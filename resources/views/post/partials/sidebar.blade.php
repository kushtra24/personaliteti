
<form action="/search" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" class="form-control" name="q"
            placeholder="Search users"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
    </div>
</form>

<h3>Arkiva</h3>
<ul>
@foreach($archives as $archive)
<li>
	<a href="/archiveFilter?month={{ $archive->month }}&year={{ $archive->year }}" class="archives">{{$archive->month}} <span>{{ $archive->year }}</span></a>
	{{-- {{ $archive->month }} --}}
</li>
@endforeach


</ul>