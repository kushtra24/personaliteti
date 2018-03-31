@extends('layouts.app')

@section('content')

<div class="container">

	<section id="heading-welcomepage">
		<h1>Tipet e Personaliteteve</h1>
		<h4>Keto jane tipet e personaliteteve ne nje vend, shtypni mbi te per te lexuar me shum</h4>
		<hr>
	</section>

	<section id="the-types">

		<div id="organize" class="type-group row">
			<h1><strong>Organizim</strong></h1>
				
			@foreach ($tipet->slice(0, 4) as $tipi)
				<div class="col-md-3 the-type">
					<a href="{{ action('TipetController@show', [$tipi]) }}">
						<img src="{{ $tipi->type_img }}" alt="tipi" width="200px">
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
					<a href="{{ action('TipetController@show', ['id' => $tipi->id]) }}">
						<img src="{{ $tipi->type_img }}" alt="tipi" width="200px">
						<h4>{{ $tipi->name }}</h4>
						<h5>{{ $tipi->type }}</h5>
					</a>
				</div>
			@endforeach
		</div>

		<div id="shoqeri" class="type-group row">
			<h1><strong>Shoqeri</strong></h1>

			@foreach ($tipet->slice(8, 4) as $tipi)
				<div class="col-md-3 the-type">
					<a href="{{ action('TipetController@show', ['id' => $tipi->id]) }}">
						<img src="{{ $tipi->type_img }}" alt="tipi" width="200px">
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
					<a href="{{ action('TipetController@show', ['id' => $tipi->id]) }}">
						<img src="{{ $tipi->type_img }}" alt="tipi" width="200px">
						<h4>{{ $tipi->name }}</h4>
						<h5>{{ $tipi->type }}</h5>
					</a>
				</div>
			@endforeach
		</div>

	</section>
	
@endsection