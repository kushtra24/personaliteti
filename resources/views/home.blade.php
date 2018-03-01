@extends('layouts.app')

@section('style')
<style>

/* ------- DO NOT EDIT BELOW --------- */
@import url(https://fonts.googleapis.com/css?family=Abel);
.chart-three {
  width: 200px;
  height: 200px;
  margin: 0;
  position: relative;
}
.chart-three.animate svg .circle-foreground {
  -webkit-animation: offset 3s ease-in-out forwards;
          animation: offset 3s ease-in-out forwards;
  -webkit-animation-delay: 1s;
          animation-delay: 1s;
}
.chart-three.animate figcaption:after {
  -webkit-animation: chart-three-label 3s steps(19) forwards;
          animation: chart-three-label 3s steps(19) forwards;
  -webkit-animation-delay: 1s;
          animation-delay: 1s;
}
.chart-three svg {
  width: 100%;
  height: 100%;
}
.chart-three svg .circle-background, .chart-three svg .circle-foreground {
  r: 87.5px;
  cx: 50%;
  cy: 50%;
  fill: none;
  stroke: #305556;
  stroke-width: 25px;
}
.chart-three svg .circle-foreground {
  stroke: #389967;
  stroke-dasharray: 104.405px 549.5px;
  stroke-dashoffset: 104.405px;
  stroke-linecap: round;
  -webkit-transform-origin: 50% 50%;
          transform-origin: 50% 50%;
  -webkit-transform: rotate(-90deg);
          transform: rotate(-90deg);
}
.chart-three figcaption {
  display: inline-block;
  width: 100%;
  height: 2.5rem;
  overflow: hidden;
  text-align: center;
  color: #c6e8d7;
  position: absolute;
  top: calc(50% - 1.25rem);
  left: 0;
  font-size: 0;
}
.chart-three figcaption:after {
  display: inline-block;
  content: "0%\a 1%\a 2%\a 3%\a 4%\a 5%\a 6%\a 7%\a 8%\a 9%\a 10%\a 11%\a 12%\a 13%\a 14%\a 15%\a 16%\a 17%\a 18%\a 19%\a 20%\a 21%\a 22%\a 23%\a 24%\a 25%\a 26%\a 27%\a 28%\a 29%\a 30%\a 31%\a 32%\a 33%\a 34%\a 35%\a 36%\a 37%\a 38%\a 39%\a 40%\a 41%\a 42%\a 43%\a 44%\a 45%\a 46%\a 47%\a 48%\a 49%\a 50%\a 51%\a 52%\a 53%\a 54%\a 55%\a 56%\a 57%\a 58%\a 59%\a 60%\a 61%\a 62%\a 63%\a 64%\a 65%\a 66%\a 67%\a 68%\a 69%\a 70%\a 71%\a 72%\a 73%\a 74%\a 75%\a 76%\a 77%\a 78%\a 79%\a 80%\a 81%\a 82%\a 83%\a 84%\a 85%\a 86%\a 87%\a 88%\a 89%\a 90%\a 91%\a 92%\a 93%\a 94%\a 95%\a 96%\a 97%\a 98%\a 99%\a 100%\a";
  white-space: pre;
  font-size: 2.5rem;
  line-height: 2.5rem;
}

@-webkit-keyframes chart-three-label {
  100% {
    -webkit-transform: translateY(-47.5rem);
            transform: translateY(-47.5rem);
  }
}

@keyframes chart-three-label {
  100% {
    -webkit-transform: translateY(-47.5rem);
            transform: translateY(-47.5rem);
  }
}
@-webkit-keyframes offset {
  100% {
    stroke-dashoffset: 0;
  }
}
@keyframes offset {
  100% {
    stroke-dashoffset: 0;
  }
}

figure {
  margin: 1rem !important;
}

figcaption {
  font-family: 'Abel', sans-serif;
}


</style>
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1> {{ Auth::user()->first_name }}, Ju jeni: {{ $results->rol_name }}</h1>
                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                
                    <div class="col-md-4">
                        <img src="{{ URL::to('/') }}/images/{{ $results->finaltype }}.png" alt="personaliteti tipi avatar" width="150">
                    </div>

                    <div class="col-md-8">
                        @foreach(Auth::user()->testResults->reverse() as $testResult)
                        <table class="table table-hover">
                            <tr>
                                <td>E kriuar me: </td>
                                <td>{{ $testResult->created_at }} </td>
                            </tr>
                            <tr>
                                <td>Roli:  </td>
                                <td>{{ $testResult->rol_name }} </td>
                            </tr>
                            <tr>
                                <td>Codi</td>


                                <td>{{ $testResult->finaltype }}</td>
                            </tr>

                            <figure class="chart-three animate">
                                <svg role="img" xmlns="http://www.w3.org/2000/svg">
                                    <circle class="circle-background"/>
                                    <circle class="circle-foreground"/>
                                </svg>
                                <figcaption></figcaption>
                            </figure>
                            <tr>
                                <td>Codi</td>
                                <td>{{ $testResult->intro_extro }} {{ $testResult->first_final_procent_rez }}% </td>
                            </tr>
                            <tr>
                                <td>Roli:</td>
                                <td>{{ $testResult->intu_sens }} {{ $testResult->ns_final_procent_rez }} %</td>
                            </tr>
                            <tr>
                                <td>Roli:</td>
                                <td>{{ $testResult->feeling_thinking }} {{ $testResult->ft_final_procent_rez }}% </td>
                            </tr>
                            <tr>
                                <td>Roli:</td>
                                <td>{{ $testResult->judging_perspecting }} {{ $testResult->jp_final_procent_rez }}%</td>
                            </tr>
                        </table>
                        @endforeach
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
