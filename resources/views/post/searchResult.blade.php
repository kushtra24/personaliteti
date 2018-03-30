@extends('layouts.app')

@section('style')
<style>
    .post-container{
        background-color: white;
        padding: 20px;
        margin-bottom: 25px;
    }

    .post-item{
    
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
    h4{
        text-align: center;
    }

</style>
@endsection

@section('content')
    <section id="index_of_blog">
        <div id="index-blog-title">
            <h1>Kërkim</h1>   
        </div>
    @if(isset($details))
        <div class="container">
                @foreach($details as $post)
                    <div class="post-item col-md-4">
                        <div class="featured-image">
                            <img src="{{ $post->image }}" alt="featured img" class="img-responsive">
                        </div>
                        <div class="post-container">
                            <a href="/blog/{{ $post->id }}"><h3>{{ $post->title }}</h3></a>
                            {!! str_limit($post->content, 200) !!}
                            <hr>
                            <p>
                            <b>Autori:</b> {{ $post->user->first_name . " " . $post->user->last_name}} <br> 
                            <b>Data e Publikimit:</b> {{ $post->created_at->format('d.m.Y') }} <br>
                            <b>Kategori:</b> @foreach($post->category as $category) <a href="#">{{ $category->name }}</a>, @endforeach
                            </p>
                        </div>
                    </div>
                @endforeach
        </div>
    @else
    <h4>Ska bash asgjë</h4>
    @endif
    </section>

@endsection

@section('scripts')

@endsection