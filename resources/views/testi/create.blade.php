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
            <div class="tab-content">

              <div role="tabpanel" class="tab-pane fade in active firstSet" id="firstSet">
                  @include('testi.partials.introExtro')
              </div>

              <div role="tabpanel" class="tab-pane fade secondSet" id="secondSet">
                  @include('testi.partials.IntuitiveSensitive')
              </div>

              <div role="tabpanel" class="tab-pane fade thirdSet" id="thirdSet">
                   @include('testi.partials.thinkingFeeling')
              </div>

              <div role="tabpanel" class="tab-pane fade lastSet" id="lastSet">
                   @include('testi.partials.judgingPerspecting')
                  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Perfundo">
              </div>
              
              <div class="form-group">
              <div class="col-md-6">
                <a id="goBack" class="tab-prev btn btn-warning btn-lg btn-block hide" data-toggle="tooltip" data-placement="top" title="Ktheu">Ktheu</a>
              </div>
              <div class="col-md-6">
                <a id="goforward" class="tab-forward btn btn-success btn-lg btn-block" data-toggle="tooltip" data-placement="top" title="Vazhdo">Vazhdo</a>
              </div>
              </div>

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
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="container">
<div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="100%" data-numposts="5"></div>
</div>
@endsection

@section('scripts')

<script>

progressProcent = 0;
$("input[type='radio']").on('click',function(){
   if($(this).parent().find('.checked').length ==0){
      progressProcent = progressProcent + 2.27272727;
      $("#progress-bar").css('width', progressProcent + '%');
      $("#how-much-progress").text(100 - progressProcent + '%');
      $("#progress-container").removeClass("hide");
   } $(this).addClass('checked');
});


var count=1;
$('.tab-forward').click(function() {
    if(count==1){
        $('.progress-status').text('Edhe 3/4');
        $('.progress-minutes').text(' ~ 7:30 min');

    }
    if(count==2){
        $('.progress-status').text('Vetem edhe 1/4');
        $('.progress-minutes').text(' ~ 5:00 min');
    }
    if(count==3){
        $('.progress-status').text('E Fundit');
        $('.progress-minutes').text(' ~ 2.30 min');
    }
    count++;
});


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


jQuery('#myTabs a').click(function (e) {
  e.preventDefault()
  jQuery(this).tab('show')
})

// $('input[value="3"]').click(function(){
//   $('input[type="radio"].right').css({color: "red"});
// });

</script>

@endsection