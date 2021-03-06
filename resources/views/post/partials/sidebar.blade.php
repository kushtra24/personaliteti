
<div id="sidebar">
    <div id="search">
        <form action="/search" method="POST" role="search">
            {{ csrf_field() }}
            <div class="input-group">
                <input type="text" class="form-control" name="q"
                    placeholder="Kërko"> <span class="input-group-btn">
                    <button type="submit" class="btn btn-primary">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </span>
            </div>
        </form>
    </div>

    <div id="sidebar-archive">
        <h4>Arkiva</h4>
        <ul>
            @foreach($archives as $archive)
            <li>
            	<a href="/archiveFilter?month={{ $archive->month }}&year={{ $archive->year }}" class="archives">{{$archive->month}} <span>{{ $archive->year }}</span></a>
                {{-- {{ $archive->month }} --}}
                
            </li>
            @endforeach
            {{-- <p>{{ $postCounter }} postime deri me tani </p> --}}
        </ul>
    </div>
    <div id="sidebar-categories">
    <h4>Kategoritë</h4>
        <ul>
            @foreach($categories as $category)
            <li>
                <a href="{{ action('CategoryController@categoryfilter', [$category]) }}" class="archives">{{ $category->name }}</a>
                {{-- {{ $archive->month }} --}}
            </li>
            @endforeach
        </ul>
    </div>

@if(Request::is('blog/*'))
    <div id="sidebar-latest">
        <h4>Të fundit</h4>
        @foreach($posts->slice(0, 5) as $post)
            <a href="/blog/{{ $post->id }}">{{ $post->title }}</a>

            {{-- {!! str_limit($post->content, 100) !!} --}}
            <hr>
        @endforeach
    </div>
@endif

    <div class="sidebar-facebook">
        <div class="fb-page" data-href="https://www.facebook.com/personalitetet/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/personalitetet/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/personalitetet/">Personalitetet</a></blockquote></div>
    </div>
</div>

