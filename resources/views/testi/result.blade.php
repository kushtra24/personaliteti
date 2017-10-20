@extends('layouts.app')

@section('content')

<div class="container">

<h1>Ti je një: @if ($finalType == null) {{ Cookie::get('finaltype') }} @else {{ $finalType }} @endif</h1>

  @if($FirstfinalProcentRez)
<h3> {{ $FirstfinalProcentRez }}% {{ $introExtro }} </h3>
<h3>{{ $nsfinalProcentRez }}% {{ $intuSens }}</h3>
<h3> {{ $ftfinalProcentRez }}% {{$feelingThinking}}</h3>
<h3>{{ $jpfinalProcentRez }}% {{$judgingPerspecting}}</h3>


<div class="traid"><h4>Mendimet</h4></div>
<div class="traid-discription"><p>Kjo veti tregon se si veprojme me ambientin</p></div>
<div class="progress">
  <div class="progress-bar {{ $introExtro }}" role="progressbar" aria-valuenow="{{ $FirstfinalProcentRez }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $FirstfinalProcentRez}}%;">
    {{ $FirstfinalProcentRez }}% {{ $introExtro }}
  </div>@if ($FirstfinalProcentRez == "100")
         {{" "}}
    @else
    <span>{{ 100 - $FirstfinalProcentRez }}% {{ $introExtro === "Extrovert" ? "Introvert" : "Extrovert" }}</span>
    @endif
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
    <div class="alert alert-danger" role="alert">{{ $errors->first('password') }}</div>
  </span>
@endif


@if (Auth::check())
  <a href="{{ route('register') }}" class="btn btn-primary">Shko në profil</a>
@else
    <p>Regjistrohu tani per t'i ruajtur keto resultate</p>
    <button id="show_register" class="btn btn-primary">Regjistrohu</button>
@endif


  <div id="registerForma" class="col-md-12 hide">
    <div class="panel panel-default">
      <div class="panel-heading">Regjistrohu</div>

      <div class="panel-body">
        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
          {{ csrf_field() }}

          <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
            <label for="first_name" class="col-md-4 control-label">Emri</label>

            <div class="col-md-6">
              <input id="first_name" type="text" class="form-control" name="first_name" value="{{ old('name') }}" required autofocus>

              @if ($errors->has('first_name'))
                <span class="help-block">
                    <strong>{{ $errors->first('first_name') }}</strong>
                </span>
              @endif
            </div>
          </div>

          <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label">Mbiemri</label>

            <div class="col-md-6">
              <input id="name" type="text" class="form-control" name="last_name" value="{{ old('name') }}" required>

              @if ($errors->has('last_name'))
                <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
              @endif
            </div>
          </div>

          <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
            <label for="age" class="col-md-4 control-label">Mosha</label>

            <div class="col-md-6">
              <input id="age" type="number" class="form-control" name="age" value="{{ old('age') }}" required>

              @if ($errors->has('age'))
                <span class="help-block">
                                        <strong>{{ $errors->first('age') }}</strong>
                                    </span>
              @endif
            </div>
          </div>

          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="col-md-4 control-label">E-Mail Adresa</label>

            <div class="col-md-6">
              <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

              @if ($errors->has('email'))
                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
              @endif
            </div>
          </div>

          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class="col-md-4 control-label">Fjalkalimi</label>

            <div class="col-md-6">
              <input id="password" type="password" class="form-control" name="password" required>

              @if ($errors->has('password'))
                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
              @endif
            </div>
          </div>

          <div class="form-group">
            <label for="password-confirm" class="col-md-4 control-label">Përsërit Fjalkalimin</label>

            <div class="col-md-6">
              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
              <button type="submit" class="btn btn-primary">
                Regjistrohu
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

</div>

@endsection

@section('scripts')
  <script>
  $( "#show_register" ).click(function() {
    $("#registerForma").removeClass("hide");
    $("#show_register").addClass("hide");
  });
  </script>
@endsection