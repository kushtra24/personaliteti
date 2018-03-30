
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

    <h4>Arkiva</h4>
    <ul>
        @foreach($archives as $archive)
        <li>
        	<a href="/archiveFilter?month={{ $archive->month }}&year={{ $archive->year }}" class="archives">{{$archive->month}} <span>{{ $archive->year }}</span></a>
        	{{-- {{ $archive->month }} --}}
        </li>
        @endforeach
    </ul>

    <h4>Kategoritë</h4>

    <ul>
        @foreach($categories as $category)
        <li>
            <a href="{{ action('CategoryController@categoryfilter', [$category]) }}" class="archives">{{ $category->name }}</a>
            {{-- {{ $archive->month }} --}}
        </li>
        @endforeach
    </ul>

@if(Request::is('blog'))

@else  
    <h4>Të fundit</h4>
@foreach($posts as $post)
        <a href="/blog/{{ $post->id }}">{{ $post->title }}</a>
        {{-- {!! str_limit($post->content, 100) !!} --}}
        <hr>
@endforeach

@endif

</div>

