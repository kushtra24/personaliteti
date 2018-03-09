@extends('layouts.app')

@section('content')

<div class="container">
<h1>{{$title}}</h1>
{!! $content !!}
</div>
@endsection