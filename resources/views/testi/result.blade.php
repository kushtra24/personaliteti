@extends('layouts.app')

@section('style')
<style>

#container { text-align: center; margin: 20px; }

.bar-main-container {
  margin: 10px auto;
  /*width: 300px;*/
  height: 50px;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  font-family: sans-serif;
  font-weight: normal;
  font-size: 12px;
  color: #FFF;
}

.wrap { padding: 8px; }

.bar-percentage {
  float: left;
  background: rgba(0,0,0,0.13);
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  padding: 9px 0px 0px 8px;
  width: 21%;
  height: 34px;
  text-align: center;
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
.azure   { background: #00b1b3; }
.emerald { background: #ef6733; }
.violet  { background: #7cb342; }
.yellow  { background: #ff9100; }
.red     { background: #E44C41; }


#animated-results {
    text-align: center;
}

.traid h3{
  font-weight: 700;
}

</style>
@endsection

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-4">
            <h1>Ti je: <b> {{ $rol_name }} </b></h1>
          @if($FirstfinalProcentRez)
            <h3>{{ $FirstfinalProcentRez }}% {{ $introExtro }} </h3>
            <h3>{{ $nsfinalProcentRez }}% {{ $intuSens }}</h3>
            <h3>{{ $ftfinalProcentRez }}% {{$feelingThinking}}</h3>
            <h3>{{ $jpfinalProcentRez }}% {{$judgingPerspecting}}</h3>
            <br>
            <h4> {{ $tipi->shortDescription }}</h4>
          @endif
        </div>

@if($FirstfinalProcentRez)
        <div class="col-md-8" id="animated-results">
          <h1> Emërtimi: <b>@if ($finalType == null) {{ Cookie::get('finaltype') }} @else {{ $finalType }} @endif</b></h1>
          <div class="animated-result">
            <div class="traid">
                <h3>Mendimet</h3>
            </div>
            <div class="traid-discription">
                <p>Kjo veti tregon se si veprojme me ambientin</p>
            </div>
            <div id="bar-1" class="bar-main-container azure">
                <div class="wrap">
                    <div class="bar-percentage" data-percentage="{{ $FirstfinalProcentRez }}" final-type-name="{{ $introExtro }}"></div>
                    <div class="bar-container">
                        <div class="bar"></div>
                    </div>
                </div>
            </div>
          </div>

          <div class="animated-result">
            <div class="traid">
                <h3>Energjia</h3>
            </div>
            <div class="traid-discription">
                <p>Kjo veti tregon ku ne perciellim energjien mentale</p>
            </div>
             <div id="bar-2" class="bar-main-container emerald">
                <div class="wrap">
                    <div class="bar-percentage" data-percentage="{{ $nsfinalProcentRez }}" final-type-name="{{ $intuSens }}"></div>
                    <div class="bar-container">
                        <div class="bar"></div>
                    </div>
                </div>
            </div>
          </div>
          
          <div class="animated-result">
            <div class="traid">
                <h3>Natyrshmeria</h3>
            </div>
            <div class="traid-discription">
                <p>Kjo veti tregon se si marrim vendime dhe perballemi me emocione </p>
            </div>

            <div id="bar-3" class="bar-main-container violet">
                <div class="wrap">
                    <div class="bar-percentage" data-percentage="{{ $ftfinalProcentRez }}" final-type-name="{{ $feelingThinking }}"></div>
                    <div class="bar-container">
                        <div class="bar"></div>
                    </div>
                </div>
            </div>
          </div>

          <div class="animated-result">
            <div class="traid">
                <h3>Teknika</h3>
            </div>
            <div class="traid-discription">
                <p>Kjo veti tregon se si Marrim vendime</p>
            </div>

            <div id="bar-4" class="bar-main-container yellow">
                <div class="wrap">
                    <div class="bar-percentage" data-percentage="{{ $jpfinalProcentRez }}" final-type-name="{{ $judgingPerspecting }}"></div>
                    <div class="bar-container">
                        <div class="bar"></div>
                    </div>
                </div>
            </div>
          </div>

        </div>
    </div>

  @else
  <div class="alert-info" role="alert">Vazhdo Regjistrimi resultatet e juaja jane ende aktive</div>
  @endif {{--Email Has been taken error msg--}} 

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
        <a href="{{ route('register') }}" class="btn btn-primary">Shko në profil</a> @else
        <p>Regjistrohu tani per t'i ruajtur keto resultate</p>
        <button id="show_register" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Regjistrohu</button>
    @endif

    <div class="modal fade" tabindex="-1" role="dialog" id="myModal">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
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
                                <input id="age" type="number" class="form-control" min="0" max="100" name="age" placeholder="Mosha" autocomplete="age" value="{{ old('age') }}" required>
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
                </div> <!-- /.modal body -->
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
        var finalTypeName = $(this).attr('final-type-name');
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
          progress.text(pct + " " + finalTypeName) && progress.siblings().children().css('width',pct);
          }
        });
      });
  </script>
@endsection