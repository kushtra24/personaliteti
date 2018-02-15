@extends('layouts.app')

@section('content')

<div class="container">


	<section id="page-{{ $pages->id }}">
		<hr>
	<h1>{{ $pages->title }}</h1>
	{!! $pages->content !!}
	
	</section>
	
@endsection