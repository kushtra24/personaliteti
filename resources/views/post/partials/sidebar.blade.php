
<h3>Arkiva</h3>
<ul>
@foreach($archives as $archive)
<li>
	<a href="/archiveFilter?month={{ $archive['month'] }}&year={{ $archive['year'] }}" class="archives">{{$archive['month']}} <span>{{ $archive['year'] }}</span></a>
</li>
@endforeach
</ul>