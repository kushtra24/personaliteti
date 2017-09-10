@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
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

    <div role="tabpanel" class="tab-pane fade in active" id="firstSet">
        @include('testi.partials.introExtro')
    </div>

    <div role="tabpanel" class="tab-pane fade" id="secondSet">
        @include('testi.partials.IntuitiveSensitive')
    </div>

    <div role="tabpanel" class="tab-pane fade" id="thirdSet">
        
    </div>

    <div role="tabpanel" class="tab-pane fade lastSet" id="lastSet">
        <div class="form-group">
        <input type="submit" class="btn btn-success">
        </div>
    </div>

    <a class="tab-forward btn btn-success" data-toggle="tooltip" data-placement="top" title="Vazhdo">Vazhdo</a>
  </div>



        </form>
    </div>{{-- row end --}}
</div>{{-- conteiner --}}

@endsection

@section('scripts')

<script>
$('.tab-forward').click(function(){
    //go forward on tabs    
    $('.nav-tabs > .active').next('li').find('a').trigger('click');

  //hide the tab-forward button if the tab arrives to the last set
  if($('.lastSet').hasClass('active')) {
        $(".tab-forward").hide();
    }

});

jQuery('#myTabs a').click(function (e) {
  e.preventDefault()
  jQuery(this).tab('show')
})
    
</script>

@endsection