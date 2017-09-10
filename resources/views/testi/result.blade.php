@extends('layouts.app')

@section('content')

<div class="container">

<h1>Ti je një: {{$finalType}}</h1>


<h3>{{ $endresult }}</h3>
<h3>{{ $nsendresult }}</h3>

<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="{{ $finalProcentRez }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $finalProcentRez}}%;">
    {{$endresult}}
  </div>
</div>

<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="{{ $finalProcentRez }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $nsfinalProcentRez}}%;">
    {{$nsendresult}}
  </div>
</div>

</div>

@endsection