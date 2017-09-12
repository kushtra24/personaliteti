@extends('layouts.app')

           
@section('content')
<div class="container">

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
                  <div class="form-group">
                  <input type="submit" class="btn btn-success" value="Perfundo">
                  </div>
              </div>
              
              <div class="form-group">
                <a id="goBack" class="tab-prev btn btn-warning hide" data-toggle="tooltip" data-placement="top" title="Ktheu">Ktheu</a>
                <a id="goforward" class="tab-forward btn btn-success pull-right" data-toggle="tooltip" data-placement="top" title="Vazhdo">Vazhdo</a>
              </div>

              </div><!-- end of teb content -->
        </form>


    </div>{{-- row end --}}
</div>{{-- conteiner --}}


<div class="progress-container hide" id="progress-container" style="position: fixed; bottom: 0; left: 15px; z-index: 10000;">
  <div class="progress" style="width: 473px;">
    <div class="progress-bar progress-bar-striped active" id="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" sty></div>
  </div>
</div>


@endsection

@section('scripts')

<script>

progressProcent = 0;
$("input[type='radio']").on('click',function(){
   if($(this).parent().find('.checked').length ==0){
      progressProcent = progressProcent + 2.27272727;
      $("#progress-bar").css('width', progressProcent + '%');
      $("#progress-container").removeClass("hide");
   } $(this).addClass('checked');
});

function changePasswordProgressBar(ev) {
    // less than 8 characters
    var wrost = 5,
        // minimum 8 characters
        bad = /^(?=.{6,}).*/,
        //Alpha Numeric plus minimum 8
        good = /^(?=.*?[a-z]).{5,}$/, //pattern="^(?=.*[A-Za-z])(?=.*\d)(?=.*[$@$!%*#?&])[A-Za-z\d$@$!%*#?&]{6,}$"
        //Must contain at least one upper case letter, one lower case letter and (one number OR one special char).
        better = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9]).{8,}$/,
        betterOne = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[#?!@$%^&*-+/=)(]).{8,}$/,
        betterTwo = /^(?=.*?[A-Z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-+/=)(]).{8,}$/,
        betterthree = /^(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-+/=)(]).{8,}$/,
        //Must contain at least one upper case letter, one lower case letter and (one number AND one special char).
        best = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-/=)+(]).{8,}$/,
        password = $(ev.target).val(),
        strength = '0',
        progressClass = 'progress-bar progress-bar-',
        ariaMsg = '0% Complete (danger)',
        $progressBarElement = $('#password-progress-bar'),
        $something = $('#changethecolor');

    if (best.test(password) === true) {
        strength = '100%';
        progressClass += 'success';
        ariaMsg = '100% Complete';
    } else if (better.test(password) === true) {
        strength = '80%';
        progressClass += 'info';
        ariaMsg = 'Almost Complete';
    } else if (betterOne.test(password) === true) {
        strength = '80%';
        progressClass += 'info';
        ariaMsg = 'Almost Complete';
    } 
    else if (betterTwo.test(password) === true) {
        strength = '80%';
        progressClass += 'info';
        ariaMsg = 'Almost Complete';
    }
    else if (betterthree.test(password) === true) {
        strength = '80%';
        progressClass += 'info';
        ariaMsg = 'Almost Complete';
    }
    else if (good.test(password) === true) {
        strength = '50%';
        progressClass += 'warning';
        ariaMsg = '50% Complete';
    } else if (bad.test(password) === true) {
        strength = '30%';
        progressClass += 'warning';
        ariaMsg = 'Still too low';
    } else if (password.length >= 1 && password.length <= wrost) {
        strength = '10%';
        progressClass += 'danger';
        ariaMsg = 'Too low';
    } else if (password.length < 1) {
        strength = '0';
        progressClass += 'danger';
        ariaMsg = '0% Complete';
    }

    $progressBarElement.removeClass().addClass(progressClass);
    $progressBarElement.attr('aria-valuenow', strength);
    $progressBarElement.css('width', strength);
    $progressBarElement.find('span.sr-only').text(ariaMsg);
}
    
$(document).ready(function () {
    $(".pwd").first().on('keyup', changePasswordProgressBar);
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