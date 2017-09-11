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

  </div>



        </form>
    </div>{{-- row end --}}
</div>{{-- conteiner --}}

@endsection

@section('scripts')

<script>


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