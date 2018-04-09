@extends('layouts.app')

@section('style')
<style>

.animated-result {
    display: inline-flex;
}
.bar-main-container {
    margin: 10px auto;
    width: 126px;
    height: 115px;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    /*font-family: sans-serif;*/
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
    font-size: 31px;
    padding: 0; 
    width: 100%;
    height: 52px;
    text-align: center;
    vertical-align: middle;
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

.type-name {
    font-size: 17px;
    text-align: center;
}

.read-more, .procentage-block, .socialMedia-share, h1{
    text-align: center;
}

</style>
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
          <div class="row">
              <div class="col-md-4">
                  <h1 class="visible-xs"> Pershendetje, {{ Auth::user()->first_name }}</h1>
                  <img src="{{ URL::to('/') }}/images/{{ $results->finaltype }}.png" alt="personaliteti tipi avatar" class="img-responsive">
              </div>
              <div class="col-md-6">
                <h1 class="hidden-xs" > Pershendetje, {{ Auth::user()->first_name }}</h1>
                <h4>Resultati i fundit i Vlerësimit është: <a href="/tipi/{{ $results->finaltype }}">{{ $results->finaltype }}</a></h4>
                <table class="table table-striped table-responsive">
                  <tr>
                    <td><b>Numri vlersimit:</b></td>
                    <td>{{ $results->id }}</td>
                  </tr>

                  <tr>
                    <td><b>Emërtimi:</b></td>
                    <td>{{ $results->rol_name }}</td>
                  </tr>

                  <tr>
                    <td><b>Kodi:</b></td>
                    <td><a href="/tipi/{{ $results->finaltype }}">{{ $results->finaltype }}</a></td>
                  </tr>

                  <tr>
                    <td><b>Data:</b></td>
                    <td>{{ $results->created_at->format( 'd.m.Y' ) }} - {{ $results->created_at->diffForHumans() }}</td>
                  </tr>

                </table>

                <div class="procentage-block">
                   <div class="animated-result">
                      <div id="bar-1" class="bar-main-container azure">
                          <div class="wrap">
                              <div class="bar-percentage" data-percentage="{{ $results->first_final_procent_rez }}"></div>
                              <div class="type-name">{{ $results->intro_extro }}</div>
                          </div>
                      </div>
                  </div>

                  <div class="animated-result">
                       <div id="bar-2" class="bar-main-container emerald">
                          <div class="wrap">
                              <div class="bar-percentage" data-percentage="{{ $results->ns_final_procent_rez }}" final-type-name="{{ $results->intu_sens }}"></div>
                              <div class="type-name">{{ $results->intu_sens }}</div>
                          </div>
                      </div>
                  </div>

                  <div class="animated-result">
                      <div id="bar-3" class="bar-main-container violet">
                          <div class="wrap">
                              <div class="bar-percentage" data-percentage="{{ $results->ft_final_procent_rez }}" final-type-name="{{ $results->feeling_thinking }} "></div>
                              <div class="type-name">{{ $results->feeling_thinking }}</div>
                          </div>
                      </div>
                  </div>

                  <div class="animated-result">
                      <div id="bar-4" class="bar-main-container yellow">
                          <div class="wrap">
                              <div class="bar-percentage" data-percentage="{{ $results->jp_final_procent_rez }}" final-type-name="{{ $results->judging_perspecting }} "></div>
                              <div class="type-name">{{ $results->judging_perspecting }} </div>
                          </div>
                      </div>
                  </div>
                </div>
                <div class="read-more">
                    <a href="/tipi/{{ $results->finaltype }}" class="btn btn-success">Lexo më shumë rreth {{ $results->finaltype }}</a>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 socialMedia-share">
                  <h2>Shpërndajë Resultatet</h2>
                   <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.personalitetet.com/tipi/{{ $results->finaltype }}" target="_blank" class="btn btn-facebook"><i class="fab fa-facebook-f"></i></a>
                      <a href="https://twitter.com/intent/tweet?url=https%3A%2F%2Fwww.personalitetet.com%2Ftipi%2F{{ $results->finaltype }}" target="_blank" class="btn btn-twitter"><i class="fab fa-twitter"></i></a>
                      <a href="https://plus.google.com/share?url=https://www.personalitetet.com/tipi/{{ $results->finaltype }}" target="_blank" class="btn btn-googleplus"><i class="fab fa-google-plus-g"></i></a>
                </div>
              </div>
          </div>

          <div class="row">
            <div class="col-md-12"> <h1>Krahaso me resultatet e kaluara</h1> </div>
            @foreach(Auth::user()->testResults->reverse() as $testResult)
            <div class="col-md-3">
                <table class="table table-hover">
                    <tr>
                        <td> Numri vlersimit </td>
                        <td>{{ $testResult->id }} </td>
                    </tr>
                    <tr>
                        <td>E kriuar me: </td>
                        <td>{{ $testResult->created_at->diffForHumans() }} </td>
                    </tr>
                    <tr>
                        <td>Emërtimi:  </td>
                        <td>{{ $testResult->rol_name }} </td>
                    </tr>
                    <tr>
                        <td>Codi</td>
                        <td>{{ $testResult->finaltype }}</td>
                    </tr>

                    <tr>
                        <td>{{ $testResult->intro_extro }} </td>
                        <td>{{ $testResult->first_final_procent_rez }}% </td>
                    </tr>
                    <tr>
                        <td>{{ $testResult->intu_sens }}</td>
                        <td> {{ $testResult->ns_final_procent_rez }} %</td>
                    </tr>
                    <tr>
                        <td>{{ $testResult->feeling_thinking }}</td>
                        <td> {{ $testResult->ft_final_procent_rez }}% </td>
                    </tr>
                    <tr>
                        <td>{{ $testResult->judging_perspecting }}</td>
                        <td> {{ $testResult->jp_final_procent_rez }}%</td>
                    </tr>
                </table>
              </div>
            @endforeach
          </div>
        </div>{{-- col-md-12 --}}
    </div>{{-- row --}}
</div>{{-- container --}}
@endsection

@section('scripts')
  <script>
      $('.bar-percentage[data-percentage]').each(function () {
        var progress = $(this);
        var percentage = Math.ceil($(this).attr('data-percentage'));
        // var finalTypeName = $(this).attr('final-type-name');
        $({countNum: 0}).animate({countNum: percentage}, {
          duration: 3000,
          easing:'linear',
          step: function() {
            // What todo on every count
          var pct = '';
          if(percentage == 0){
            pct = Math.floor(this.countNum) + '%';
          }else{
            pct = Math.floor(this.countNum+1) + '%';
          }
          progress.text(pct) && progress.css('height',pct);
          }
        });
      });
  </script>
@endsection
