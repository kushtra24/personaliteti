@extends('layouts.app')
@section('style')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@endsection
@section('content')

<div id="loading">
    <img src="https://www.airbare.com.hk/_nuxt/img/logo_loading.fb960ed.gif" alt="Loading" />
</div>

<div class="container result-page" id="hidden">
    <div class="row">
        <h1>Resultatet</h1>
        <p><em> Këto resultate tregojnë preferencat e juaja në kater rubrikat e mëposhtme, dhe mund të ndryshojnë kohë pas kohe</em></p>
        <div class="col-sm-5">
            <h1>Ti je: <b> {{ $rol_name }} {{-- {{ Cookie::get('rol_name') }} --}}</b></h1>
          @if($FirstfinalProcentRez)
            <img src="../{{ $tipi->type_img }}" alt="tipi featured" class="img-responsive result-img">
            <br>
            <h4> {!! str_limit($tipi->shortDescription, 450) !!}</h4>
            <br>
          @endif
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
                <a href="{{ route('register') }}" class="btn btn-primary">Shiko detajet</a>
            @else
                <p>Regjistrohu tani per t'i ruajtur keto resultate</p>
                <button id="show_register" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Regjistrohu</button>
            @endif
        </div>

@if($FirstfinalProcentRez)
        <div class="col-sm-7" id="animated-results">
          <h1> Kodi: <b>@if ($finalType == null) {{ Cookie::get('finaltype') }} @else {{ $finalType }} @endif</b></h1>
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



    <div class="modal fade" tabindex="-1" role="dialog" id="myModal">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="col-md-61">
                        <div class="registration-info">
                            <i class="fas fa-times pull-right close-icon" data-dismiss="modal"></i>
                            <h3>Regjistrohu</h3>
                            <p>Regjistrimi eshte falas dhe ju lejon qe te mbani resultatet e juaja ne nje vend te vetme, ti shperndani ato apo te lexoni me teper per cdo resultat</p>
                            <hr>
                        </div>
                    </div>
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <div class="col-md-61">
                            <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }} ">
                                <input id="first_name" type="text" class="form-control" name="first_name" placeholder="Emri" autocomplete="given-name" value="{{ old('name') }}" required autofocus>
                                @if ($errors->has('first_name'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('first_name') }}</strong>
                                  </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                                <input id="name" type="text" class="form-control" name="last_name" placeholder="Mbiemri" autocomplete="family-name" value="{{ old('name') }}" required>
                                @if ($errors->has('last_name'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('last_name') }}</strong>
                                  </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
                                <input type="text" id="datepicker" class="form-control" name="age" placeholder="Data e lindjes" autocomplete="age" value="{{ old('age') }}">
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
                                <label for="agree">Duke u regjistruar ju pranoni <a href="/faqe/politikat_privatesise" target="_blank"> Politikat e privatesis</a></label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            {{-- <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Mbylle</button> --}}
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
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <script>

    $( document ).ready(function() {
      $('.container').removeAttr('id');
      $('#loading').hide();
      $('.bar-percentage[data-percentage]').each(function () {
        var progress = $(this);
        var percentage = Math.ceil($(this).attr('data-percentage'));
        var finalTypeName = $(this).attr('final-type-name');
        $({countNum: 0}).animate({countNum: percentage}, {
          duration: 4000,
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
    });

    //drigger modal after a period second time
    $( document ).ready(function() {
        setTimeout(function(){
            $('#myModal').addClass('in').css('display', 'block');
        }, 10000);
        
        $('.close-icon').click(function() {
            $('#myModal').removeClass('in').css('display', 'none');
        });
    });

    //datepicker
    $( function() {
    $( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true,
      dateFormat: "dd-mm-yy",
      minDate: "-99Y", 
      maxDate: "-12Y" 
    });
  } );

  </script>
@endsection