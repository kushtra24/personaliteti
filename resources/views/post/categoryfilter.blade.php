@extends('layouts.app')

@section('style')
<style>
	.nothing{
		text-align: center;
	}
</style>
@endsection

@section('content')
	<section id="index_of_blog">
		<section id="heading-welcomepage">
			<h1>Kategoria</h1>
			<h4>Këtu mund të shihni artikujt e publikuar sipas kategories së përzgjedhur</h4>
			<hr>
		</section>

		<div class="container">
			@foreach($categories->post as $post)
				<div class="col-md-4">
						<div class="featured-image">
							@if($post->hasMedia('thumbnail'))
								<img src="{{$post->getMedia('thumbnail')->first()->getUrl()}}" alt="featured img" class="img-responsive">
							@else
								<img src="/images/blog-default.png" alt="featured img" class="img-responsive">
							@endif
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
