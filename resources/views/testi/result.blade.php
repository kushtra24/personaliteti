@extends('layouts.app')

@section('ogTitle')Une jamë {{Cookie::get('finaltype')}}@endsection
{{--@section('ogDescription'){!! $results->tipi->shortDescription !!}@endsection--}}
@section('ogImage'){{asset('images/' . Cookie::get('finaltype') . '.png' )}}@endsection

@section('style')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <style>
        #loadingsubmit{
            display: none;
        }
    </style>
@endsection
@section('content')

<div id="loading">
    <img src="https://www.airbare.com.hk/_nuxt/img/logo_loading.fb960ed.gif" alt="Loading" />
</div>

<div class="container result-page" id="hidden">
    <div class="row">
        <h1>Rezultatet</h1>
        <p><em> Këto rezultate tregojnë preferencat t'ua në kater rubrikat e mëposhtme, dhe mund të ndryshojnë kohë pas kohe</em></p>
        <div class="col-sm-5">
            <h1>Ti je: <b> {{ Cookie::get('rol_name') }} {{-- {{ Cookie::get('rol_name') }} --}}</b></h1>
          @if($results->first_final_procent_rez)
          <img src="{{ URL::to('/') }}/images/{{ Cookie::get('finaltype') }}.png" alt="personaliteti tipi avatar" class="img-responsive result-img">
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
        </div>

@if($results->first_final_procent_rez)
        <div class="col-sm-7" id="animated-results">
          <h1> Kodi: <b>{{Cookie::get('finaltype') != null ? Cookie::get('finaltype') : $results->finaltype }} </b></h1>
          <div class="animated-result">
            <div class="traid">
                <h3>Mendja</h3>
            </div>
            <div class="traid-discription">
                <p>Kjo veçori tregon se si vepron me ambientin</p>
            </div>
            <div id="bar-1" class="bar-main-container azure">
                <div class="wrap">
                    <div class="bar-percentage" data-percentage="{{ Cookie::get('FirstfinalProcentRez') }}" final-type-name="{{ Cookie::get('introExtro') }}"></div>
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
                <p>Kjo veçori tregon se ku e drejton energjinë mendore</p>
            </div>
             <div id="bar-2" class="bar-main-container emerald">
                <div class="wrap">
                    <div class="bar-percentage" data-percentage="{{ Cookie::get('nsfinalProcentRez') }}" final-type-name="{{ Cookie::get('intuSens') }}"></div>
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
                <p>Kjo veçori përcakton se si marr vendime dhe përballon emocionet</p>
            </div>

            <div id="bar-3" class="bar-main-container violet">
                <div class="wrap">
                    <div class="bar-percentage" data-percentage="{{ Cookie::get('ftfinalProcentRez') }}" final-type-name="{{ Cookie::get('feelingThinking') }}"></div>
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
                <p>Kjo veçori reflekton qasjen për të punuar, planifikuar dhe vendimmarrjës</p>
            </div>

            <div id="bar-4" class="bar-main-container yellow">
                <div class="wrap">
                    <div class="bar-percentage" data-percentage="{{ Cookie::get('jpfinalProcentRez') }}" final-type-name="{{ Cookie::get('judgingPerspecting') }}"></div>
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
    <div class="row">
        <div class="col-md-12 socialMedia-share">
            <h2>Shpërndajë Resultatet</h2>
            <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.personalitetet.com/tipi/{{ Cookie::get('finaltype') }}" target="_blank" class="btn btn-facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="https://twitter.com/intent/tweet?url=https%3A%2F%2Fwww.personalitetet.com%2Ftipi%2F{{ Cookie::get('finaltype') }}" target="_blank" class="btn btn-twitter"><i class="fab fa-twitter"></i></a>
            <a href="https://plus.google.com/share?url=https://www.personalitetet.com/tipi/{{ Cookie::get('finaltype') }}" target="_blank" class="btn btn-googleplus"><i class="fab fa-google-plus-g"></i></a>
        </div>
    </div>

  <section id="shortDescriptionResilt">

        <div class="col-md-12">
          {{--{{ dd($results->tipi) }}--}}
            <p>{!! $description->shortDescription !!}</p>

            <br>
            @if (Auth::check())
                <a href="{{ route('register') }}" class="btn btn-primary">Shiko detajet</a>
            @else
                <button id="show_register" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Regjistrohu dhe lexo më shumë</button>
            @endif
		</div>

  </section>

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
                                <input id="password" type="password" class="form-control" placeholder="Fjalëkalimi" name="password" autocomplete="new-password" required>
                                @if ($errors->has('password'))
                                  <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                  </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <input id="password-confirm" type="password" class="form-control" placeholder="Përsërit Fjalëkalimin" autocomplete="retype-password" name="password_confirmation" required>
                            </div>
                            <div class="form-group">
                                <label for="agree">Duke u regjistruar ju pranoni <a href="/faqe/politikat_privatesise" target="_blank"> Politikat e privatesis</a></label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <img src="{{ asset('images/loading.gif') }}" alt="loading" height="20px" id="loadingsubmit"> <button type="submit" id="registerbutton" class="btn btn-primary">Regjistrohu</button>
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

    // $("button[type=submit]").on('submit', function() {
    //     $('#loadingsubmit').css('display', 'none');
    //     console.log('AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA');
    // });

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
        if(!$("#show_register").length == 0) {
            setTimeout(function(){
                $('#myModal').addClass('in').css('display', 'block');
            }, 20000);
            
            $('.close-icon').click(function() {
                $('#myModal').removeClass('in').css('display', 'none');
            });
        }
    });

    //datepicker
    $( function() {
    $( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true,
      dateFormat: "dd-mm-yy",
      minDate: "-99Y", 
      maxDate: "-12Y",
      yearRange: "-99:-12",
    });
  } );




// event.preventDefault();
//            var form = new FormData(this); 

// $.ajax({
//     method: "POST",
    {{-- // url: "{{ action('TestController@store') }}", --}}
//     data: form,
//     cache: false,
//     contentType: false,
//     processData: false,
//     success: function (data) {
{{-- //         window.location.replace('{{ action('TestController@index', ['purpose' => request('purpose')]) }}'); --}}
//     },
//     error: function (data) {
//         $('#save').prop('disabled', false);
//         if (data.responseJSON.title) {
//             $('#title_error').empty().append(' <span class="help-block" style="color:red;"><strong>' + data.responseJSON.title + '</strong></span>');
//         }
//         if (data.responseJSON.content) {
//             $('#content_error').empty().append(' <span class="help-block" style="color:red;"><strong>' + data.responseJSON.content + '</strong></span>');
//         }

//         if (data.responseJSON['story_photo.upload']) {
//             $('#photo-error').empty().append(' <span class="help-block" style="color:red;"><strong>' + data.responseJSON['story_photo.upload'] + '</strong></span>');
//         }

//         if (data.responseJSON['story_photo.attach']) {
//             $('#photo-error').empty().append(' <span class="help-block" style="color:red;"><strong>' + data.responseJSON['story_photo.attach'] + '</strong></span>');
//         }
//         if (data.responseJSON.institutions) {
//             $('#institutions_error').empty().append(' ' +
//                 '<span class="help-block" style="color:red;">' +
//                 '<strong>' + data.responseJSON.institutions + '</strong>' +
//                 '</span>');
//         }
//         if (data.responseJSON.donors) {
//             $('#patients_error').empty().append(' ' +
//                 '<span class="help-block" style="color:red;">' +
//                 '<strong>' + data.responseJSON.donors + '</strong>' +
//                 '</span>');
//         }
//         if (data.responseJSON.patients) {
//             $('#donors_error').empty().append(' ' +
//                 '<span class="help-block" style="color:red;">' +
//                 '<strong>' + data.responseJSON.patients + '</strong>' +
//                 '</span>');
//         }
//         window.scrollTo(0, 0);
//     } 


  </script>
@endsection