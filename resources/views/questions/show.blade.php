@extends('layouts.app')

@section('content')

<div class="container">

	<section id="heading-welcomepage">
		<h1>Tipet e Personaliteteve</h1>
		<h4>Keto jane tipet e personaliteteve ne nje vend, shtypni mbi te per te lexuar me shum</h4>
		<hr>
	</section>

	<section id="the-types">
		
	<p>{{ $questions->id }}</p>
	<p>{{ $questions->question }}</p>
	<p>{{ $questions->purpose }}</p>
	
	</section>
	
@endsection