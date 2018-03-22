@extends('layouts.app')

@section('style')

@endsection

@section('content')

	<section id="index_of_blog">
		<div class="container">
			@foreach($posts as $post)
				<div class="container">
					<div class="col-md-6">
						<img src="/{{ $post->image }}" alt="featured img">
					</div>
					<div class="col-md-6">
						<a href="/post/{{ $post->id }}"><h1>{{ $post->title }}</h1></a>
						{!! $post->content !!}
					</div>
				</div>
			@endforeach
		</div>
	</section>

@endsection