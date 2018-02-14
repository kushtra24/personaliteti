@extends('layouts.app')

@section('content')

<div class="container">

	<section id="heading-welcomepage">
		<h1>Tipet e Personaliteteve</h1>
		<h4>Keto jane tipet e personaliteteve ne nje vend, shtypni mbi te per te lexuar me shum</h4>
		<hr>
	</section>

	<section id="the-types">

		{{-- @foreach ($tipet as $tipi)
			@if($tipi->id <= 4)
			<div class="col-md-3">
					<a href="{{ action('tipetController@show', ['id' => $tipi->id]) }}">
						<h4>{{ $tipi->type }}</h4>
						<img src="images/{{ $tipi->type_img }}" alt="tipi" width="200px">
						<p>{{ $tipi->name }}</p>
					</a>
				</div>
			@endif
		@endforeach --}}



		<div id="organize" class="type-group row">
			<?php $first = ""; $var = 0;?>
			<h1><strong> <?php echo $first; ?> </strong></h1>
		@for($i = 0; $i <= 4; $i++)
			@foreach ($tipet->slice(0, $var) as $tipi)
				<div class="col-md-3">
					<a href="{{ action('tipetController@show', ['id' => $tipi->id]) }}">
						<h4>{{ $tipi->type }}</h4>
						<img src="images/{{ $tipi->type_img }}" alt="tipi" width="200px">
						<p>{{ $tipi->name }}</p>
					</a>
				</div>
			@endforeach
			
			<?php $var = $var + 4;

				if ($i= 1) {
					$first = "Organizim";
				}
				elseif($i= 2){
					$first = "tjter";
				}
			?>

		@endfor
		</div>


		<div id="vetvetja" class="type-group row">
			<h1><strong>Vetvetja</strong></h1>

			@foreach ($tipet->slice(4, 4) as $tipi)
				<div class="col-md-3">
					<a href="{{ action('tipetController@show', ['id' => $tipi->id]) }}">
						<h4>{{ $tipi->type }}</h4>
						<img src="images/{{ $tipi->type_img }}" alt="tipi" width="200px">
						<p>{{ $tipi->name }}</p>
					</a>
				</div>
			@endforeach
				
		</div>

		<div id="shoqeri" class="type-group row">
			<h1><strong>Shoqeri</strong></h1>

			@foreach ($tipet->slice(8, 4) as $tipi)
				<div class="col-md-3">
					<a href="{{ action('tipetController@show', ['id' => $tipi->id]) }}">
						<h4>{{ $tipi->type }}</h4>
						<img src="images/{{ $tipi->type_img }}" alt="tipi" width="200px">
						<p>{{ $tipi->name }}</p>
					</a>
				</div>
			@endforeach

		</div>

		<div id="mbledhje" class="type-group row">
			<h1><strong>Mbledhje</strong></h1>
			@foreach ($tipet->slice(12, 4)  as $tipi)
				<div class="col-md-3">
					<a href="{{ action('tipetController@show', ['id' => $tipi->id]) }}">
						<h4>{{ $tipi->type }}</h4>
						<img src="images/{{ $tipi->type_img }}" alt="tipi" width="200px">
						<p>{{ $tipi->name }}</p>
					</a>
				</div>
			@endforeach
		</div>

	</section>
	
@endsection