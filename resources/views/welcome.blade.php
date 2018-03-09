@extends('layouts.app')

@section('content')

<div class="container">

	<section id="heading-welcomepage">
		<h1>Gjejë Personalitetin tuaj, Tani!</h1>
		<h4>Fillo tesin e personalitetit dhe mahnitu me saktesine qe ofron resultati juaj i personalitetit</h4>

		<a href="{{ route('testi') }}" class="btn btn-primary">Fillo Testing</a>
		<br><small>Pa pages, nuk eshte e nevojshme regjistrimi</small>
		<br>
		<img src="{{ URL::to('/') }}/images/homepage.jpg" alt="homepage image">
	</section>

	<section id="welcome-content-middle">
		<i class="fas fa-heart fa-5x"></i>
		<h3>Pak rreth teories se pergjithshme testuese</h3>
		<p>Lorem Ipsum është një tekst shabllon i industrisë së printimit dhe shtypshkronjave. Lorem Ipsum ka qenë teksti shabllon i industrisë që nga vitet 1500, kur një shtypës i panjohur morri një galeri shkrimesh dhe i ngatërroi  </p>
	</section>
	

@endsection