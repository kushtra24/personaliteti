@extends('layouts.app')

@section('ogTitle') 
	Personalitetet Blog
@endsection
@section('ogDescription')
	Vendi ku mund të lexoni rreth tipeve të personalitetit
@endsection

@section('ogImage')
{{asset('images/homepage.png')}}
@endsection

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
		margin: 0 auto;
	}
	#index-blog-title h1, #index-blog-title p{
		text-align: center;
		text-transform: uppercase;
	}

	.sidebar-facebook{
		background-color: white;
		margin-top: 20px;
	}

</style>
@endsection

@section('content')

	<section id="index_of_blog">
		<div class="container">
			<section id="heading-welcomepage">
				<h1>Blogu rreth personaliteteve</h1>
				<h4>Lexo artikuj rreth e rotull personaliteteve</h4>
				<hr>
			</section>
			<div class="row">
				<div class="col-md-8">
					@foreach($posts as $post)
						<div class="post">
							<div class="featured-image">
								@if($post->hasMedia('thumbnail'))
								<img src="{{$post->getMedia('thumbnail')->first()->getUrl()}}" alt="featured img" class="img-responsive">
								@else
								<img src="/images/blog-default.png" alt="featured img" class="img-responsive">
								@endif
							</div>
							<div class="post-container">
								<a href="/blog/{{ $post->id }}"><h3>{{ $post->title }}</h3></a>
                                <div class="content">
								    {!! str_limit($post->content, 200) !!}
                                </div>
								<hr>
								<p>
									<i class="fas fa-user-edit"></i>&nbsp; {{ $post->user->first_name}} &nbsp;&nbsp;
									<i class="fas fa-pencil-alt"></i> &nbsp;{{ $post->created_at->format('d.m.Y') }} &nbsp;&nbsp;
									<i class="fas fa-swatchbook"></i> &nbsp; @foreach($post->category as $category) <a href="{{ action('CategoryController@categoryfilter', [$category]) }}">{{ $category->name }}</a><span>,</span> @endforeach &nbsp;&nbsp;
									<i class="fas fa-comment-alt"></i> &nbsp; {{ $post->comments->count() }}
									<a href="/blog/{{ $post->id }}" class="pull-right">Vazhdo Leximin <i class="fas fa-angle-double-right"></i></a>
								</p>
							</div>
						</div>
					@endforeach
					{{--pagination--}}
					{{ $posts->links() }}
				</div>
				<div class="col-md-4">
					@include('post.partials.sidebar')
				</div>
			</div>
			<div class="row">
				<div class="fb-comments" data-href="https://www.facebook.com/personalitetet" data-width="100%" data-numposts="5"></div>
			</div>
		</div>

	</section>

@endsection

@section('scripts')
<script>

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/de_DE/sdk.js#xfbml=1&version=v3.1';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

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
	
	// facebook comments
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/sq_AL/sdk.js#xfbml=1&version=v3.1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
//facebook comments end

</script>
@endsection