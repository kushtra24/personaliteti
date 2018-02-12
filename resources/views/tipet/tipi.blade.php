@extends('layouts.app')

@section('content')

<div class="container">

	<section id="heading-welcomepage">
		<h1>Tipet e Personaliteteve</h1>
		<h4>Keto jane tipet e personaliteteve ne nje vend, shtypni mbi te per te lexuar me shum</h4>
		<hr>
	</section>

	<section id="the-types">

	<p>{{ $tipi->featured_Image }}</p>
	<p>{{ $tipi->id }}</p>
	<p>{{ $tipi->type }}</p>
	<p>{{ $tipi->name }}</p>
	<img src="/images/{{ $tipi->type_img }}" alt="tipi" width="200px">
	{!! $tipi->description !!}
	
	</section>
	
@endsection