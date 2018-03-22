@extends('layouts.app')

@section('style')

@endsection

@section('content')

	<section id="page-{{ $postet->id }}">
		<div class="container">
			<div class="col-md-6">
				<img src="/{{ $postet->image }}" alt="featured img">
			</div>
			<div class="col-md-6">
				<h1>{{ $postet->title }}</h1>
				{!! $postet->content !!}
			</div>
		</div>
	</section>

@endsection