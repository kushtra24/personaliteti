@extends('layouts.app')

@section('ogurl')
  http://personaliteti.div/blog/{{ $postet->id }}
@endsection
@section('ogTitle') 
  {{ $postet->title }}
@endsection
@section('ogDescription')
  {!! $postet->content !!}
@endsection


@section('style')
    <style>
        .sidebar-facebook{
            background-color: white;
            margin-top: 20px;
        }
    </style>
@endsection

@section('content')
<progress value="0"></progress>
	<section id="post-{{ $postet->id }}">
		<div class="container">
			<div class="single-post-title">
				<h1>{{ $postet->title }}</h1>
				<p>
                    <i class="fas fa-user-edit"></i>&nbsp; {{ $postet->user->first_name}} &nbsp;&nbsp;
                    <i class="fas fa-pencil-alt"></i> &nbsp;{{ $postet->created_at->format('d.m.Y') }} &nbsp;&nbsp;
                    <i class="fas fa-swatchbook"></i> &nbsp; @foreach($postet->category as $category) <a href="{{ action('CategoryController@categoryfilter', [$category]) }}">{{ $category->name }}</a><span>,</span> @endforeach &nbsp;&nbsp;
                    <i class="fas fa-comment-alt"></i> &nbsp; {{ $postet->comments->count() }}
                </p>
			</div>
			<div class="col-md-8" id="post">
        @if($postet->hasMedia('thumbnail'))
				  <img src="{{ $postet->firstMedia('thumbnail')->getUrl() }}" alt="featured img" class="img-responsive">
        @endif
				{!! $postet->content !!}
        <hr>
        <h4><b><i class="fas fa-comments"></i> {{ $postet->comments->count() }} Koment{{ $postet->comments->count() == 1 ? "" : "e" }} </b></h4>

        @guest
            <h4><a href="{{ route('login') }}">Kyqu</a> Për të Lënë koment</h4>
        @else
          <div class="add_coment">
            <h3>Shto Koment</h3>
            @if(session()->has('message.level'))
                <div class="alert alert-{{ session('message.level') }}"> 
                {!! session('message.content') !!}
                </div>
            @endif
            <form  method="POST" action="{{ route('comment.store', [$postet->id]) }}">
              {!! csrf_field() !!}

                <div class="form-group">
                    <input type="text" class="form-control comment-field" name="body" cols="50" rows="50" value="{{old('body')}}" required></input>
                </div>

                <div class="form-group">
                <button type="submit" class="btn btn-primary  pull-right cleftButton" name="submit" id="submit" style=" margin-right: 0; ">Shto Koment</button>
                </div>

             </form>
          </div>
          <br>
        <br>
        @endguest
        
        <hr>
        <div class="comments">
          @foreach($postet->comments->reverse() as $comment)
              <article>
                <small><strong><i class="fas fa-user-circle"></i> {{ $comment->user->first_name}}<i class="fas fa-clock"></i> {{ $comment->created_at->diffForHumans() }}</strong></small>
                <p>{{ $comment->body}}</p>
              </article>
          @endforeach
        </div>
			</div>
			<div class="col-md-4">
			@include('post.partials.sidebar')
			</div>
		</div>
	</section>

@endsection

@section('scripts')
<script>

    //facebook
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
    text = text.replace("June", "Qershorë");
    text = text.replace("July", "Korrik");
    text = text.replace("August", "Gusht");
    text = text.replace("September", "Shtatorë");
    text = text.replace("October", "Tetorë");
    text = text.replace("November", "Nënntorë");
    text = text.replace("December", "Dhjetorë");
    $(this).text(text);
});

//progress bar
$(document).ready(function() {

if($(window).width() < 600){
  var getMax = function(){
    return $(document).height() - $(window).height() - 550;
  }
}else{
  var getMax = function(){
    return $(document).height() - $(window).height() - 200;
  }
}

  var getValue = function(){
    return $(window).scrollTop();
  }

  if ('max' in document.createElement('progress')) {
    // Browser supports progress element
    var progressBar = $('progress');

    // Set the Max attr for the first time
    progressBar.attr({ max: getMax() });

    $(document).on('scroll', function(){
      // On scroll only Value attr needs to be calculated
      progressBar.attr({ value: getValue() });
    });

    $(window).resize(function(){
      // On resize, both Max/Value attr needs to be calculated
      progressBar.attr({ max: getMax(), value: getValue()});
    });

  } else {

    var progressBar = $('.progress-bar'),
        max = getMax(),
        value, width;

    var getWidth = function() {
      // Calculate width in percentage
      value = getValue();
      width = (value/max) * 100;
      width = width + '%';
      return width;
    }

    var setWidth = function(){
      progressBar.css({ width: getWidth() });
    }

    $(document).on('scroll', setWidth);
    $(window).on('resize', function(){
      // Need to reset the Max attr
      max = getMax();
      setWidth();
    });
  }
});

</script>
@endsection