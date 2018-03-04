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
		<div class="col-md-4 col-md-offset-1">
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
		<div class="col-md-9">
			{!! $tipi->description !!}
		</div>
		<div class="col-md-3">
			@if(Auth::check())
			<div class="placehodler" style="background-color: #ccc; display: block; width: 100%; height: 350px;">
				<h3>Resultatet e juaja </h3>
				{{ Auth::user()->first_name }}
				<br>
			 <p> Kodi: {{ Auth()->user()->testResults->last()->finaltype }}</p>
             <p> Kodi: {{ Auth()->user()->testResults->last()->created_at }}</p>
             <p> Kodi: {{ Auth()->user()->testResults->last()->rol_name }}</p>
             <p> Kodi: {{ Auth()->user()->testResults->last()->intro_extro }} {{ Auth()->user()->testResults->last()->first_final_procent_rez }}% </p>
             <p> Kodi: {{ Auth()->user()->testResults->last()->intu_sens }} {{ Auth()->user()->testResults->last()->ns_final_procent_rez }}% </p>
             <p> Kodi: {{ Auth()->user()->testResults->last()->feeling_thinking }} {{ Auth()->user()->testResults->last()->ft_final_procent_rez }}% </p>
             <p> Kodi: {{ Auth()->user()->testResults->last()->judging_perspecting }} {{ Auth()->user()->testResults->last()->jp_final_procent_rez }}% </p>
				<a href="/compare?{{-- {{$tipet->{id} }} --}}" class="btn btn-primary">Krahaso me ty</a>
			</div>
			@endif
		</div>
		
	</div>
	
	</section>

@endsection