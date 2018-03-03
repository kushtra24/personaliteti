@extends('layouts.app')

@section('content')

<div class="container">

	<section id="heading-welcomepage">
		<h1>Tipet e Personaliteteve</h1>
		<h4>Keto jane tipet e personaliteteve ne nje vend, shtypni mbi te per te lexuar me shum</h4>
		<hr>
	</section>

	<section id="type-single">
{{-- <p>{{ $tipi->featured_Image }}</p> --}}
	<div class="row">
		<div class="col-md-4 col-md-offset-2">
			<img src="../{{ $tipi->type_img }}" alt="tipi" class="img-responsive">
		</div>
		<div class="col-md-6 single-type-meta">			
			<h3>Grupi: <span>{{ $tipi->group }}</span></h3>
			<h3>Emertimi: <span>{{ $tipi->name }}</span></h3>
			<h3>Kodi: <span>{{ $tipi->type }}</span></h3>
			<p>{{ $tipi->shortDescription }}</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			
		</div>
		<div class="col-md-8">
			{!! $tipi->description !!}
		</div>
	</div>
	
	</section>

@endsection