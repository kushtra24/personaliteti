@extends('layouts.app')

@section('content')

<div class="container">

<h1>Ti je një: {{ $finalType }}</h1>


<h3> {{ $FirstfinalProcentRez }}% {{ $introExtro }}</h3>
<h3>{{ $nsfinalProcentRez }}% {{ $intuSens }}</h3>
<h3> {{ $ftfinalProcentRez }}% {{$feelingThinking}}</h3>
<h3>{{ $jpfinalProcentRez }}% {{$judgingPerspecting}}</h3>

<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="{{ $FirstfinalProcentRez }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $FirstfinalProcentRez}}%;">
    {{ $FirstfinalProcentRez }}% {{ $introExtro }}
  </div>
</div>

<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="{{ $nsfinalProcentRez }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $nsfinalProcentRez}}%;">
    {{ $nsfinalProcentRez }}% {{$intuSens}}
  </div>
</div>

  <div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="{{ $ftfinalProcentRez }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $ftfinalProcentRez}}%;">
      {{ $ftfinalProcentRez }}% {{$feelingThinking}}
    </div>
  </div>

  <div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="{{ $jpfinalProcentRez }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $jpfinalProcentRez}}%;">
      {{ $jpfinalProcentRez }}% {{$judgingPerspecting}}
    </div>
  </div>

</div>

@endsection