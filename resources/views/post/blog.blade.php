@extends('layouts.app')

@section('style')
<style>
	.post-container{
		background-color: white;
		padding: 20px;
		margin-bottom: 25px;
	}
	.featured-image{
		max-height: 300px;

		overflow: hidden;
	}
	.featured-image img{
		width: 100%;
	}

	#index-blog-title{
		height: 288px;
		margin: 0 auto;

	}
	#index-blog-title h1{
		text-align: center;
		line-height: 288px;
		text-transform: uppercase;
	}

</style>
@endsection

@section('content')
	<section id="index_of_blog">
		<div id="index-blog-title">
			<h1>Blog</h1>	
		</div>

		<div class="container">
			<div class="col-md-8">
				@foreach($posts as $post)
					<div class="featured-image">
						<img src="{{ $post->image }}" alt="featured img" class="img-responsive">
					</div>
					<div class="post-container">
						
						<a href="/post/{{ $post->id }}"><h3>{{ $post->title }}</h3></a>
						{!! str_limit($post->content, 200) !!}
						<hr>
						<p><b>Autori:</b> {{ $post->author }}</p>
					</div>
				@endforeach
				{{ $posts->links() }}
			</div>
			<div class="col-md-4">
				@include('post.partials.sidebar')
			</div>
		</div>
	</section>

@endsection