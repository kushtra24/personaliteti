@extends('layouts.app')

@section('content')

<div class="container">

	<section id="heading-welcomepage">
		<h1>Tipet e personaliteteve</h1>
		<h4>Këto janë tipet e përsonaliteteve në një vend, shtypni mbi të për të lexuar më shumë</h4>
		<hr>
	</section>

	<section id="the-types">

		<div id="organize" class="type-group row">
			<h1><strong>Organizim</strong></h1>
				
			@foreach ($tipet->slice(0, 4) as $tipi)
				<div class="col-md-3 the-type">
					<a href="{{ action('TipetController@show', [$tipi]) }}">
						<img src="{{ $tipi->hasMedia('tipiImg') ? $tipi->firstMedia('tipiImg')->getUrl() : $tipi->type_img }}" alt="tipi">
						<h4>{{ $tipi->name }}</h4>
						<h5>{{ $tipi->type }}</h5>
					</a>
				</div>
			@endforeach
		</div>

		<div id="vetvetja" class="type-group row">
			<h1><strong>Vetvetja</strong></h1>

			@foreach ($tipet->slice(4, 4) as $tipi)
				<div class="col-md-3 the-type">
					<a href="{{ action('TipetController@show', [$tipi]) }}">
						<img src="{{ $tipi->hasMedia('tipiImg') ? $tipi->firstMedia('tipiImg')->getUrl() : $tipi->type_img }}" alt="tipi">
						<h4>{{ $tipi->name }}</h4>
						<h5>{{ $tipi->type }}</h5>
					</a>
				</div>
			@endforeach
		</div>

		<div id="shoqeri" class="type-group row">
			<h1><strong>Shoqëri</strong></h1>

			@foreach ($tipet->slice(8, 4) as $tipi)
				<div class="col-md-3 the-type">
					<a href="{{ action('TipetController@show', [$tipi]) }}">
						<img src="{{ $tipi->hasMedia('tipiImg') ? $tipi->firstMedia('tipiImg')->getUrl() : $tipi->type_img }}" alt="tipi">
						<h4>{{ $tipi->name }}</h4>
						<h5>{{ $tipi->type }}</h5>
					</a>
				</div>
			@endforeach
		</div>

		<div id="mbledhje" class="type-group row">
			<h1><strong>Mbledhje</strong></h1>
			@foreach ($tipet->slice(12, 4)  as $tipi)
				<div class="col-md-3 the-type">
					<a href="{{ action('TipetController@show', [$tipi]) }}">
						<img src="{{ $tipi->hasMedia('tipiImg') ? $tipi->firstMedia('tipiImg')->getUrl() : $tipi->type_img }}" alt="tipi">
						<h4>{{ $tipi->name }}</h4>
						<h5>{{ $tipi->type }}</h5>
					</a>
				</div>
			@endforeach
		</div>

	</section>
	
@endsection