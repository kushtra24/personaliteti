@extends('layouts.app')

@section('style')
<style>
	progress {
  /* Positioning */
  position: fixed;
  left: 0;
  top: 0;
  z-index: 100;

  /* Dimensions */
  width: 100%;
  height: 2px;

  /* Reset the appearance */
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;

  /* Get rid of the default border in Firefox/Opera. */
  border: none;

  /* Progress bar container for Firefox/IE10+ */
  background-color: transparent;

  /* Progress bar value for IE10+ */
  color: red;
}

progress::-webkit-progress-bar {
  background-color: transparent;
}

progress::-webkit-progress-value {
  background-color: red;
}

progress::-moz-progress-bar {
  background-color: red;
}
#post{
	text-align: justify;
    word-break: break-all;
    }
#post>img{
	display: block;
	width: 100%;
    max-width: 100%;
    height: auto;
    margin-bottom: 50px;
}

#post p{
	font-size: 17px;
}

.single-post-title{
	padding: 15px 20px;
}
.single-post-title>h1{
	font-weight: 700;
}

</style>
@endsection

@section('content')
<progress value="0"></progress>
	<section id="post-{{ $postet->id }}">
		<div class="container">
			<div class="single-post-title">
				<h1>{{ $postet->title }}</h1>
				<p>Autori: {{ $postet->author }} | {{-- {{ $posted->category }} | --}} Me: {{ $postet->created_at->format('d.m.Y') }}</p>
			</div>
			<div class="col-md-8" id="post">
				<img src="{{ $postet->image }}" alt="featured img" class="img-responsive">
				{!! $postet->content !!}
        <hr>
        <div class="comments">
          @foreach($postet->comments->reverse() as $comment)
              <article>
                <strong> {{ $comment->created_at->diffForHumans() }} </strong>
                {{ $comment->body}}
              </article>
          @endforeach
        </div>
<hr>
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
                  <input type="text" class="form-control" name="body" cols="50" rows="50" value="{{old('body')}}" required></input>
              </div>

              <div class="form-group">
              <button type="submit" class="btn btn-primary pull-right cleftButton" name="submit" id="submit" style=" margin-right: 0; ">Shto Koment</button>
              </div>

           </form>
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

$(document).ready(function() {
    
  var getMax = function(){
    return $(document).height() - $(window).height();
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
      progressBar.attr({ max: getMax(), value: getValue() });
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