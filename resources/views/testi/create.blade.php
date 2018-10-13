@extends('layouts.app')

@section('content')
<div class="container testing-page">

<div class="progress-container hide" id="progress-container" >
   <strong class="progress-status">Edhe 4/4</strong> <span class="pull-right"><i class="fa fa-clock-o" aria-hidden="true"></i> <i class="progress-minutes">~ 10 min</i></span>
  <div class="progress">
    <div class="progress-bar progress-bar-striped active" id="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" ></div>
  </div>
</div>
      
  <div class="center">
      
      <h1><b> Pyetsori i Personalitetit </b></h1>
      {{-- <p>Pyetsori i Personalitetit</p> --}}

    <div class="row">
      <div class="test-rules" style="margin: 40px 0">
        <div class="col-md-2 bounce col-md-offset-1"><i class="fas fa-ban fa-4x"></i> <p>Është pa pagesë</p></div>
        <div class="col-md-2 bounce"> <i class="fab fa-buromobelexperte fa-4x"></i><p>Ndahet në 4 rubrika me nga 11 pyetje</p></div>
        <div class="col-md-2 bounce"><i class="fas fa-stopwatch fa-4x"></i></i> <p>Nuk merr më shumë kohë se 10 min</p></div>
        <div class="col-md-2 bounce"><i class="fas fa-street-view fa-4x"></i><p>Përgjigjuni sinqerisht për të marr rezultat më të saktë</p> </div>
        <div class="col-md-2 bounce"><i class="far fa-dot-circle fa-4x"></i> <p>Leni sa më pak përgjigje neutrale</p></div>
      </div>
    </div>
    <hr>
    <br>
    </div>


    
        <form method="POST" action="{{ route('result') }}" class="form-horizontal">
        {{ csrf_field() }}
      
            <!-- Tab panes -->
            <div class="tab-content" id="all-tabs">
                @foreach( $questions as $question)
                <div class="question form-group">
                        <div class="">
                            <h4 style="font-weight: 700;">{{ $question->question }}</h4>
                        </div>
                    <div  class="test-field">
                        <div class="col-md-3 answer-lg">
                            <div class="hidden-xs spajtohem-lg">{{ $question->spajtohem }}</div>
                        </div>
                        <div class="col-md-6 circles">
                            <input type="radio" name="q[{{$question->id}}]" id="q{{$question->id}}option1" class="left" value="-3" title="Shumë">
                            <input type="radio" name="q[{{$question->id}}]" id="q{{$question->id}}option2" class="left" value="-2" title="Mesatarisht">
                            <input type="radio" name="q[{{$question->id}}]" id="q{{$question->id}}option3" class="left" value="-1" title="Pak">
                            <input type="radio" name="q[{{$question->id}}]" id="q{{$question->id}}neotral1" value="0" title="Neotral">
                            <input type="radio" name="q[{{$question->id}}]" id="q{{$question->id}}option1r" class="right" value="1" title="Pak">
                            <input type="radio" name="q[{{$question->id}}]" id="q{{$question->id}}option2r" class="right" value="2" title="Mesatarisht">
                            <input type="radio" name="q[{{$question->id}}]" id="q{{$question->id}}option3r" class="right" value="3" title="Shumë">
                        </div>
                        <div class="col-md-3 answer-lg">
                            <div class="hidden-xs pajtohem-lg">{{$question->pajtohem}}</div>
                        </div>
                    </div>
                    <div class="pajtohem visible-xs">
                        <div class="col-xs-6"><p>{{ $question->spajtohem }}</p></div>
                        <div class="col-xs-6"><p>{{$question->pajtohem}}</p></div>
                    </div>
                </div>
                @endforeach

                <div class="form-group col-md-8 col-md-offset-2">

                    <div class="col-md-2 col-md-offset-4">
                        <a id="goBack" class="tab-prev btn btn-warning btn-lg btn-block hide" data-toggle="tooltip" data-placement="top" title="Ktheu"><i class="fas fa-long-arrow-alt-left"></i></a>
                    </div>

                    <div class="col-md-6">
                        <a id="goforward" class="tab-forward btn btn-primary btn-lg btn-block" data-toggle="tooltip" data-placement="top" title="Vazhdo">Vazhdo</a>
                    </div>

                    <div class="col-md-6">
                        <input type="submit" class="btn btn-success btn-lg btn-block hide" value="Perfundo" id="submit">
                    </div>

                </div>
                <div class="alert alert-danger hide"> Keni lënë Pyetje pa përzgjedhur, Shfrytezoni butonin "Kthehu" per te shikuar</div>
            </div><!-- end of teb content -->
        </form>


    {{-- </div>row end --}}
</div>{{-- conteiner --}}

<div id="fb-root"></div>
<div class="container">
<div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="100%" data-numposts="5"></div>
</div>
@endsection

@section('scripts')

<script>

//Form validation
$('#submit').click(function() {
        if($('input[type="radio"]:checked').each('.circles').hasClass('checked') == false) {
        $('.alert').removeClass('hide');
            event.preventDefault();
        }
});
//form validation end

// neotral_clicked = 0;
// $('input[title="Neotral"]').on('click', function(){
//     neotral_clicked ++;
//     if (neotral_clicked == 3) {
//         alert('Jeni Duke Lënë shumë pyetje neotrale');
//     }
// });


//Progress bar counter
progressProcent = 0;
$("input[type='radio']").on('click',function(){
   if($(this).parent().hasClass('checked') == false){
      progressProcent = progressProcent + 2.27272727;
      $("#progress-bar").css('width', progressProcent + '%');
      $("#how-much-progress").text(100 - progressProcent + '%');
      $("#progress-container").removeClass("hide");
   } $(this).parent().addClass('checked');
});
//progress bar counter end

//Progress bar changelog and tab switching
//foward button
$('.question:nth-child(n+12)').addClass('hide');

var count = 0;
$('.tab-forward').click(function() {
    count++;
    if(count==1){
        $('.progress-status').text('Edhe 3/4');
        $('.progress-minutes').text(' ~ 7:30 min');
        $('.question:nth-child(-n+12)').addClass('hide');
        $('.question:nth-child(n+12):nth-child(-n+22)').removeClass('hide');
    }
    if(count==2){
        $('.progress-status').text('Vetem edhe 1/4');
        $('.progress-minutes').text(' ~ 5:00 min');
        $('.question:nth-child(n+12):nth-child(-n+22)').addClass('hide');
        $('.question:nth-child(n+23):nth-child(-n+33)').removeClass('hide');
    }
    if(count==3){
        $('.progress-status').text('E Fundit');
        $('.progress-minutes').text(' ~ 2.30 min');
        $('#submit').removeClass('hide');
        $('.question:nth-child(n+23):nth-child(-n+33)').addClass('hide');
        $('.question:nth-child(n+34)').removeClass('hide');
        $('#goforward').addClass('hide');
    }
});


// Go back button
$('#goBack').click(function() {
    count--;
    if(count==0){
        $('.question:nth-child(n+11)').addClass('hide');
        $('.question:nth-child(-n+11)').removeClass('hide');
    }
    if(count==1){
        $('.question:nth-child(n+12):nth-child(-n+21)').removeClass('hide');
        $('.question:nth-child(n+22):nth-child(-n+31)').addClass('hide');
    }
    if(count==2){
        $('.question:nth-child(n+22):nth-child(-n+31)').removeClass('hide');
        $('.question:nth-child(n+32)').addClass('hide');
        $(".tab-forward").removeClass("hide");
        $('#submit').addClass('hide');
    }
});
// Go back button
//Progress bar changelog and tab switching end 


// go forward button
$('.tab-forward').click(function(){
    //go forward on tabs    
    $('.nav-tabs > .active').next('li').find('a').trigger('click');

  //hide the tab-forward button if the tab arrives to the last set
  //if($('.lastSet').hasClass('active')) {
   //     $(".tab-forward").addClass("hide");
  //  }

        $("#goBack").removeClass("hide");


        $('html, body').animate({
            scrollTop: $(".test-rules").offset().top
        }, 1000);

});


// facebook comments
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
//facebook comments end
</script>

@endsection