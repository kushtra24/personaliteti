@extends('layouts.app')

@section('content')

<div class="container">

<h1>Ti je një: {{ $finalType }}</h1>


<h3> {{ $FirstfinalProcentRez }}% {{ $introExtro }}</h3>
<h3>{{ $nsfinalProcentRez }}% {{ $intuSens }}</h3>
<h3> {{ $ftfinalProcentRez }}% {{$feelingThinking}}</h3>
<h3>{{ $jpfinalProcentRez }}% {{$judgingPerspecting}}</h3>


<div class="traid"><h4>Mendimet</h4></div>
<div class="traid-discription"><p>Kjo veti tregon se si veprojme me ambientin</p></div>
<div class="progress">
  <div class="progress-bar {{ $introExtro }}" role="progressbar" aria-valuenow="{{ $FirstfinalProcentRez }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $FirstfinalProcentRez}}%;">
    {{ $FirstfinalProcentRez }}% {{ $introExtro }}
  </div>@if ($FirstfinalProcentRez == "100")
         {{ " "}}
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

<p>Regjistrohu tani per t'i ruajtur keto resultate</p>
<a href="{{ route('register') }}" class="btn btn-primary">Regjistrohu</a>

</div>

@endsection

@section('scripts')



@endsection