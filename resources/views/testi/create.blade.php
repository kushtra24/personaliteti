@extends('layouts.app')

           
@section('content')
<div class="container testing-page">

    <div class="row">
      
      <h1>Testi i Personalitetit</h1>
      <p>Testi eshte pa pages dhe mund te behet sa here qe deshironi</p>

      <ul>
        <li>Mund ta beni brenda 10 Minutave</li>
        <li>Pergjigjuni Sinqerisht, edhe nese nuk i deshironi pyetjet</li>
        <li>me pak pergjigje neotrale = me shum saktesi</li>
      </ul>

    </div>


    <div class="col-md-6 col-md-offset-3">
        <form method="POST" action="/result" class="form-horizontal">
        {{ csrf_field() }}
        
            <!-- Nav tabs -->
            <ul class="nav nav-tabs hide" role="tablist" id="myTabs">
              <li role="presentation" class="active"><a href="#firstSet" aria-controls="firstSet" role="tab" data-toggle="tab">Intro/extro</a></li>
              <li role="presentation"><a href="#secondSet" aria-controls="secondSet" role="tab" data-toggle="tab">intuiting/sensing</a></li>
              <li role="presentation"><a href="#thirdSet" aria-controls="thirdSet" role="tab" data-toggle="tab">think/feel</a></li>
              <li role="presentation" class="lastSet "><a href="#lastSet" aria-controls="lastSet" role="tab" data-toggle="tab">judge/perspect</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content" id="all-tabs">


                @foreach( $questions as $question)
                <div class="question form-group">
                    <h3>{{ $question->question }}</h3>
                    <fieldset  class="test-field pull-left">
                        <p>{{ $spajtohem }}</p>
                        <input type="radio"  name="q[{{ $question->purpose }}][{{$question->id}}]" id="q{{$question->id}}option1" class="left" value="-3">

                        <input type="radio"  name="q[{{ $question->purpose }}][{{$question->id}}]" id="q{{$question->id}}option2" class="left" value="-2">

                        <input type="radio"  name="q[{{ $question->purpose }}][{{$question->id}}]" id="q{{$question->id}}option3" class="left" value="-1">
                        
                        <input type="radio" name="q[{{ $question->purpose }}][{{$question->id}}]" id="q{{$question->id}}neotral1" value="0">
                        
                        <input type="radio" name="q[{{ $question->purpose }}][{{$question->id}}]" id="q{{$question->id}}option1r" class="right" value="1">
                        
                        <input type="radio" name="q[{{ $question->purpose }}][{{$question->id}}]" id="q{{$question->id}}option2r" class="right" value="2">
                        
                        <input type="radio" name="q[{{ $question->purpose }}][{{$question->id}}]" id="q{{$question->id}}option3r" class="right" value="3">
                        <p>{{$pajtohem}}</p>
                    </fieldset>
                </div>
                @endforeach

              
              <div class="form-group">
              <div class="col-md-6">
                <a id="goBack" class="tab-prev btn btn-warning btn-lg btn-block hide" data-toggle="tooltip" data-placement="top" title="Ktheu">Ktheu</a>
              </div>
              <div class="col-md-6">
                <a id="goforward" class="tab-forward btn btn-success btn-lg btn-block" data-toggle="tooltip" data-placement="top" title="Vazhdo">Vazhdo</a>
              </div>
              </div>
              <input type="submit" class="btn btn-primary btn-lg btn-block hide" value="Perfundo" id="submit">
              
                  <div class="alert alert-danger hide"> Keni lënë Pyetje pa përzgjedhur, Shfrytezoni butonin "Kthehu" per te shikuar</div>

          </div><!-- end of teb content -->
        </form>


    </div>{{-- row end --}}
</div>{{-- conteiner --}}


<div class="progress-container hide" id="progress-container" style="position: fixed; bottom: 18px; left: 15px; z-index: 10000; background-color: #fff; padding: 13px 38px; border: 2px solid #f1f1f1;">
   <strong class="progress-status">Edhe 4/4</strong> <span class="pull-right"><i class="fa fa-clock-o" aria-hidden="true"></i> <i class="progress-minutes">~ 10 min</i></span>
  <div class="progress" style="width: 473px;">
    <div class="progress-bar progress-bar-striped active" id="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" ></div>
  </div>
</div>

<div id="fb-root"></div>
{{-- Facebook comments --}}
<script>
</script>

<div class="container">
<div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="100%" data-numposts="5"></div>
</div>
@endsection

@section('scripts')

<script>

//Form validation
$('#submit').click(function() {
    if(!$("input").is(":checked")) {
      $('.alert').removeClass('hide');
        event.preventDefault();
    }
});
//form validation end

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
$('.question:nth-child(n+11)').addClass('hide');

var count = 0;
$('.tab-forward').click(function() {
    count++;
    if(count==1){
        $('.progress-status').text('Edhe 3/4');
        $('.progress-minutes').text(' ~ 7:30 min');
        $('.question:nth-child(-n+11)').addClass('hide');
        $('.question:nth-child(n+11):nth-child(-n+20)').removeClass('hide');
    }
    if(count==2){
        $('.progress-status').text('Vetem edhe 1/4');
        $('.progress-minutes').text(' ~ 5:00 min');
        $('.question:nth-child(n+11):nth-child(-n+20)').addClass('hide');
        $('.question:nth-child(n+21):nth-child(-n+30)').removeClass('hide');
    }
    if(count==3){
        $('.progress-status').text('E Fundit');
        $('.progress-minutes').text(' ~ 2.30 min');
        $('#submit').removeClass('hide');
        $('.question:nth-child(n+21):nth-child(-n+30)').addClass('hide');
        $('.question:nth-child(n+31)').removeClass('hide');
    }
});

$('#goBack').click(function() {
    count = count - 1;
    if(count==0){
        $('.question:nth-child(n+10)').addClass('hide');
        $('.question:nth-child(-n+10)').removeClass('hide');
    }
    if(count==1){
        $('.question:nth-child(n+11):nth-child(-n+20)').removeClass('hide');
        $('.question:nth-child(n+21):nth-child(-n+30)').addClass('hide');
    }
    if(count==2){
        $('.question:nth-child(n+21):nth-child(-n+30)').removeClass('hide');
        $('.question:nth-child(n+31)').addClass('hide');
        $(".tab-forward").removeClass("hide");
    }
});
//Progress bar changelog and tab switching end


// go forward button
$('.tab-forward').click(function(){
    //go forward on tabs    
    $('.nav-tabs > .active').next('li').find('a').trigger('click');

  //hide the tab-forward button if the tab arrives to the last set
  if($('.lastSet').hasClass('active')) {
        $(".tab-forward").addClass("hide");
    }

        $("#goBack").removeClass("hide");


        $('html, body').animate({
            scrollTop: $(".tab-content").offset().top
        }, 1000);

});

// go back button
$('.tab-prev').click(function(){
    //go forward on tabs    
    $('.nav-tabs > .active').prev('li').find('a').trigger('click');

    if($('.lastSet').hasClass('active')) {
        $("#goforward").removeClass("hide");
    }

    if($('.secondSet').hasClass('active')) {
        $("#goBack").addClass("hide");
    }

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