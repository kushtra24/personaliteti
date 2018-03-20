@extends('layouts.app')

@section('style')
<style>

#container { text-align: center; margin: 20px; }
h2 { color: #CCC; }
a { text-decoration: none; color: #EC5C93; }

.bar-main-container {
  margin: 10px auto;
  /*width: 300px;*/
  height: 50px;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  font-family: sans-serif;
  font-weight: normal;
  font-size: 0.8em;
  color: #FFF;
}

.wrap { padding: 8px; }

.bar-percentage {
  float: left;
  background: rgba(0,0,0,0.13);
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  padding: 9px 0px;
  width: 18%;
  height: 16px;
}

.bar-container {
  float: right;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  border-radius: 10px;
  height: 10px;
  background: rgba(0,0,0,0.13);
  width: 78%;
  margin: 12px 0px;
  overflow: hidden;
}

.bar {
  float: left;
  background: #FFF;
  height: 100%;
  -webkit-border-radius: 10px 0px 0px 10px;
  -moz-border-radius: 10px 0px 0px 10px;
  border-radius: 10px 0px 0px 10px;
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
  filter: alpha(opacity=100);
  -moz-opacity: 1;
  -khtml-opacity: 1;
  opacity: 1;
}

/* COLORS */
.azure   { background: #38B1CC; }
.emerald { background: #2CB299; }
.violet  { background: #8E5D9F; }
.yellow  { background: #EFC32F; }
.red     { background: #E44C41; }

</style>
@endsection

@section('content')

<div class="container">

<div class="col-md-4">
  <h1>Ti je një: @if ($finalType == null) {{ Cookie::get('finaltype') }} @else {{ $finalType }} @endif</h1>

    @if($FirstfinalProcentRez)
  <h3> {{ $FirstfinalProcentRez }}% {{ $introExtro }} </h3>
  <h3>{{ $nsfinalProcentRez }}% {{ $intuSens }}</h3>
  <h3> {{ $ftfinalProcentRez }}% {{$feelingThinking}}</h3>
  <h3>{{ $jpfinalProcentRez }}% {{$judgingPerspecting}}</h3>
</div>

<div class="col-md-8">
  <div class="traid"><h4>Mendimet</h4></div>
  <div class="traid-discription"><p>Kjo veti tregon se si veprojme me ambientin</p></div>

  <div class="progress">
    <div class="progress-bar {{ $introExtro }}" role="progressbar" aria-valuenow="{{ $FirstfinalProcentRez }}"  aria-valuemin="0" aria-valuemax="100" style="width: {{ $FirstfinalProcentRez}}%;">

      {{ $FirstfinalProcentRez }}% {{ $introExtro }}
    </div>@if ($FirstfinalProcentRez == "100")
           {{" "}}
      @else    <span>{{ 100 - $FirstfinalProcentRez }}% {{ $introExtro === "Extrovert" ? "Introvert" : "Extrovert" }}</span>
      @endif
  </div>

  <div id="bar-2" class="bar-main-container emerald">
    <div class="wrap">
      <div class="bar-percentage" data-percentage="62"></div>
      <div class="bar-container">
        <div class="bar"></div>
      </div>
    </div>
  </div>

  <div class="traid"><h4>Energjia</h4></div>
  <div class="traid-discription"><p>Kjo veti tregon ku ne perciellim energjien mentale</p></div>
  <div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="{{ $nsfinalProcentRez }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $nsfinalProcentRez}}%;">
      {{ $nsfinalProcentRez }}% {{$intuSens}}
    </div>
        <span>{{ 100 - $nsfinalProcentRez }}% {{ $intuSens === "Shqisor" ? "Intuitive" : "Shqisor" }}</span>
  </div>

  <div class="traid"><h4>Natyrshmeria</h4></div>
  <div class="traid-discription"><p>Kjo veti tregon se si marrim vendime dhe perballemi me emocione </p></div>
    <div class="progress">
      <div class="progress-bar" role="progressbar" aria-valuenow="{{ $ftfinalProcentRez }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $ftfinalProcentRez}}%;">
        {{ $ftfinalProcentRez }}% {{$feelingThinking}}
      </div>
            <span>{{ 100 - $ftfinalProcentRez }}% {{ $feelingThinking === "Ndjenjë (Feeling)" ? "Mendim (Thinking)" : "Ndjenjë (Feeling)" }}</span>
    </div>

  <div class="traid"><h4>Teknika</h4></div>
  <div class="traid-discription"><p>Kjo veti tregon se si Marrim vendime</p></div>
    <div class="progress">
      <div class="progress-bar" role="progressbar" aria-valuenow="{{ $jpfinalProcentRez }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $jpfinalProcentRez}}%;">
        {{ $jpfinalProcentRez }}% {{$judgingPerspecting}}
      </div>
          <span>{{ 100 - $jpfinalProcentRez }}% {{ $judgingPerspecting === "Perspektivë" ? "Gjykues" : "Perspektivë" }}</span>
    </div>
</div>
    @else
    <div class="alert alert-info" role="alert">Vazhdo Regjistrimi resultatet e juaja jane ende aktive</div>
  @endif
{{--Email Has been taken error msg--}}

@if ($errors->has('email'))
  <span class="help-block">
    <div class="alert alert-danger" role="alert">{{ $errors->first('email') }}</div>
  </span>
@endif

@if ($errors->has('password'))
  <span class="help-block">
    <div class="alert alert-danger" role="alert" >{{ $errors->first('password') }}</div>
  </span>
@endif


@if (Auth::check())
  <a href="{{ route('register') }}" class="btn btn-primary">Shko në profil</a>
@else
    <p>Regjistrohu tani per t'i ruajtur keto resultate</p>
    <button id="show_register" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Regjistrohu</button>
@endif

<div class="modal fade" tabindex="-1" role="dialog" id="myModal">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    {{--   <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Regjistrohu</h4>
      </div> --}}
      <div class="modal-body">
      <div class="col-md-6">
        <div class="registration-info">
          <i class="fab fa-wpforms fa-10x"></i>
          <h1>Regjistrohu</h1>
          <p>Regjistrimi eshte falas dhe ju lejon qe te mbani resultatet e juaja ne nje vend te vetme, ti shperndani ato apo te lexoni me teper per cdo resultat</p>
        </div>
      </div>
        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
              {{ csrf_field() }}
<div class="col-md-6">
              <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }} ">
                  <input id="first_name" type="text" class="form-control" name="first_name" placeholder="Emri" autocomplete="name" value="{{ old('name') }}" required autofocus>
                  @if ($errors->has('first_name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('first_name') }}</strong>
                    </span>
                  @endif
              </div>

              <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                  <input id="name" type="text" class="form-control" name="last_name" placeholder="Mbiemri" autocomplete="surname" value="{{ old('name') }}" required>
                  @if ($errors->has('last_name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('last_name') }}</strong>
                    </span>
                  @endif
              </div>

              <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
                  <input id="age" type="number" class="form-control" name="age" placeholder="Mosha" autocomplete="age" value="{{ old('age') }}" required>
                  @if ($errors->has('age'))
                    <span class="help-block">
                        <strong>{{ $errors->first('age') }}</strong>
                    </span>
                  @endif
              </div>

              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                  <input id="email" type="email" class="form-control" name="email" placeholder="E-Mail Adresa" autocomplete="email" value="{{ old('email') }}" required>
                  @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                  @endif
              </div>

              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                  <input id="password" type="password" class="form-control" placeholder="Fjalkalimi" name="password" autocomplete="new-password" required>
                  @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                  @endif
              </div>

              <div class="form-group">
                  <input id="password-confirm" type="password" class="form-control" placeholder="Përsërit Fjalkalimin" autocomplete="retype-password" name="password_confirmation" required>
              </div>
              <div class="form-group">
                  <input id="agree" type="checkbox" required>
                  <label for="agree">Duke u regjistruar ju pranoni Politikat e privatesis</label>
              </div>
</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Mbylle</button>
        <button type="submit" class="btn btn-primary">Regjistrohu</button>
      </div>
    </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

</div>

@endsection

@section('scripts')
  <script>
    
$('.bar-percentage[data-percentage]').each(function () {
  var progress = $(this);
  var percentage = Math.ceil($(this).attr('data-percentage'));
  $({countNum: 0}).animate({countNum: percentage}, {
    duration: 2000,
    easing:'linear',
    step: function() {
      // What todo on every count
    var pct = '';
    if(percentage == 0){
      pct = Math.floor(this.countNum) + '%';
    }else{
      pct = Math.floor(this.countNum+1) + '%';
    }
    progress.text(pct) && progress.siblings().children().css('width',pct);
    }
  });
});

  //modal
  // $('#myModal').on('shown.bs.modal', function () {
  //   $('#myInput').focus()
  // })
  </script>
@endsection