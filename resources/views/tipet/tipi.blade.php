@extends('layouts.app')

@section('style')
<style>
	.description{
		font-size: 18px;
		text-align: justify;
		line-height: 1.8;
	}
	.notLogedIn, .social-share, .placehodler{
		background-color: #fff;
		text-align: center;
		padding: 15px;
		margin: 15px 0;
	}
	.notLogedIn .btn, .social-share .btn, .placehodler .btn{
		width: 100%;
		margin: 10px 0;
	}
</style>
@endsection

@section('content')

<div class="container">

	<section id="heading-welcomepage">
		@foreach($tipi as $tipi)

			<img src="../{{ $tipi->featured_Image }}" alt="tipi featured" width="100%" class="img-responsive">
			<h1>Tipi {{ $tipi->type }}</h1>
			{{-- <img src="../{{ $tipi->type_img }}" alt="tipi" width="70px" class="img-responsive"> --}}
			<h4>Nryshe njihet edhe si {{ $tipi->name }}</h4>
			<hr>
		@endforeach
	</section>

	<section id="type-single">
{{-- <p>{{ $tipi->featured_Image }}</p> --}}
	<div class="row">
	
		<div class="col-md-4 col-md-offset-1">
			{{-- <img src="../{{ $tipi->type_img }}" alt="tipi" class="img-responsive"> --}}
		</div>
		<div class="col-md-6 single-type-meta">
			{{-- <h3>Emertimi: <span>{{ $tipi->name }}</span></h3> --}}
			{{-- <h3>Kodi: <span>{{ $tipi->type }}</span></h3> --}}
			{{-- <p>{!! $tipi->shortDescription !!}</p> --}}
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-9">
			<div class="description">
				{!! $tipi->description !!}
			</div>
		</div>
		<div class="col-md-3">
			@if(Auth::check() && Auth::user()->hasAnyRole('User'))
			<div class="placehodler">
				<h3>Resultatet e juaja </h3>
				<p> {{ Auth()->user()->testResults->last()->finaltype }} - {{ Auth()->user()->testResults->last()->rol_name }}</p>
				<br>
		             <p> {{ Auth()->user()->testResults->last()->intro_extro }} {{ Auth()->user()->testResults->last()->first_final_procent_rez }}% </p>
		             <p> {{ Auth()->user()->testResults->last()->intu_sens }} {{ Auth()->user()->testResults->last()->ns_final_procent_rez }}% </p>
		             <p> {{ Auth()->user()->testResults->last()->feeling_thinking }} {{ Auth()->user()->testResults->last()->ft_final_procent_rez }}% </p>
		             <p> {{ Auth()->user()->testResults->last()->judging_perspecting }} {{ Auth()->user()->testResults->last()->jp_final_procent_rez }}% </p>
		             <hr>
		             <p> {{ Auth()->user()->testResults->last()->created_at->diffForHumans() }}</p>
				{{-- <a href="/compare?{{$tipet->{id} }}" class="btn btn-primary">Krahaso me ty</a> --}}
			</div>

			@else
			<div class="notLogedIn">
				<h3>Sapo Erdhe?</h3>
				<a href="/testip" class="btn btn-default">Fillo Vlersimin</a>
				<p>Nëse ke llogari <a href="{{ route('login')}}"> Kyqu</a></p>
			</div>
			@endif

			<div class="social-share">
				<h3>Shpërndaje</h3>
				<a href="https://www.facebook.com/sharer/sharer.php?u=https://www.personalitetet.com/tipi/{{ $tipi->type}}" target="_blank" class="btn btn-facebook"><i class="fab fa-facebook-f"></i></a>
				<br>
				<a href="https://twitter.com/intent/tweet?url=https%3A%2F%2Fwww.personalitetet.com%2Ftipi%2F{{$tipi->type }}" target="_blank" class="btn btn-twitter"><i class="fab fa-twitter"></i></a>
				<br>
				<a href="https://plus.google.com/share?url=https://www.personalitetet.com/tipi/{{$tipi->type }}" target="_blank" class="btn btn-googleplus"><i class="fab fa-google-plus-g"></i></a>
			</div>
		</div>
		
	</div>
	
	</section>

@endsection