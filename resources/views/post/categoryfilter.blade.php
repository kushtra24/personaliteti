@extends('layouts.app')

@section('content')
	<section id="index_of_blog">
		<div id="index-blog-title">
			<h1>Blog</h1>	
		</div>

		<div class="container">
		@foreach($categories->post as $post)

			<div class="col-md-4">
					<div class="featured-image">
						<img src="{{ $post->image }}" alt="featured img" class="img-responsive">
					</div>
					<div class="post-container">
						
						<a href="/blog/{{ $post->id }}"><h3>{{ $post->title }}</h3></a>
						{!! str_limit($post->content, 200) !!}
						<hr>
						<p><b>Autori:</b> {{ $post->user->first_name . " " . $post->user->last_name}} | <b>Data e Publikimit:</b> {{ $post->created_at->format('d.m.Y') }}</p>
					</div>
			</div>
		 @endforeach
		</div>
	</section>

@endsection
