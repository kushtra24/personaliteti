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
						@if($post->hasMedia('thumbnail'))
						<img src="{{ $post->firstMedia('thumbnail')->getUrl() }}" alt="featured img" class="img-responsive">
						@endif

					</div>
					<div class="post-container">
						
						<a href="/blog/{{ $post->id }}"><h3>{{ $post->title }}</h3></a>
						{!! str_limit($post->content, 200) !!}
						<hr>
						<p>
							<b>Autori:</b> {{ $post->user->first_name . " " . $post->user->last_name}} | 
							<b>Data e Publikimit:</b> {{ $post->created_at->format('d.m.Y') }} |
							<b>Kategori:</b> @foreach($post->category as $category) {{ $category->name }}, @endforeach
						</p>
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

@section('scripts')
<script>

	//replace the english month to Albanian
	$(".archives").each(function() {
    var text = $(this).text();
    text = text.replace("January", "Janar");
    text = text.replace("February", "Shkurt");
    text = text.replace("March", "Mars");
    text = text.replace("April", "Prill");
    text = text.replace("May", "Mai");
    text = text.replace("June", "Qershor");
    text = text.replace("July", "Korrik");
    text = text.replace("August", "Gusht");
    text = text.replace("September", "Shtatorë");
    text = text.replace("October", "Tetorë");
    text = text.replace("November", "Nënntorë");
    text = text.replace("December", "Dhjetorë");
    $(this).text(text);
});
	

</script>
@endsection