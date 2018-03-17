@extends('layouts.app')

@section('content')

<div class="container">

	<section id="heading-welcomepage">
		<h1>Gjejë Personalitetin tuaj, Tani!</h1>
		<h4>Fillo tesin e personalitetit dhe mahnitu me saktesine qe ofron resultati juaj i personalitetit</h4>

<<<<<<< HEAD
		<a href="{{ route('testi') }}" class="btn btn-primary">Fillo Testin</a>
=======
		<a href="{{ route('testi') }}" class="btn btn-primary">Fillo Vlersimin</a>
>>>>>>> 9b587baea26c7cf112027bd10e59a44d4aaa7aea
		<br><small>Pa pages, nuk eshte e nevojshme regjistrimi</small>
		<br>
		<img src="{{ URL::to('/') }}/images/homepage.jpg" alt="homepage image">
	</section>

	<section id="welcome-content-middle">
		<i class="fas fa-heart fa-5x"></i>
		<h3>Pak rreth teories se pergjithshme testuese</h3>
		<p>Lorem Ipsum është një tekst shabllon i industrisë së printimit dhe shtypshkronjave. Lorem Ipsum ka qenë teksti shabllon i industrisë që nga vitet 1500, kur një shtypës i panjohur morri një galeri shkrimesh dhe i ngatërroi  </p>
	</section>
	
	<section id="cka_vlerson" class="col-md-offset-31">
		<h1>Ku ju ndihmon ky vlersim</h1>

		<div class="komunikim">
			<div class="col-md-5">
				<i class="far fa-comments pull-right"></i>
			</div>
			<div class="col-md-5">
				<h2>Komunikim</h2>
				<p>Some people are naturally inclined to focus on the big picture and talk about big ideas. Others focus on details, facts, and what’s right in front of them. By understanding how people take in and express information, you can speak to any subject at hand in a way that resonates more effectively with them</p>
			</div>
		</div>
		<div class="karrier">
			<div class="col-md-5 col-md-offset-2">
				<h2>Karrier</h2>
				<p>Some people are naturally inclined to focus on the big picture and talk about big ideas. Others focus on details, facts, and what’s right in front of them. By understanding how people take in and express information, you can speak to any subject at hand in a way that resonates more effectively with them</p>
			</div>
			<div class="col-md-5">
				<i class="fab fa-telegram-plane"></i>
			</div>
		</div>
		<div class="lidhje">
				<div class="col-md-5">
				<i class="far fa-heart pull-right"></i>
			</div>
			<div class="col-md-5">
				<h2>lIDHJE BASHKSHORTORE</h2>
				<p>Some people are naturally inclined to focus on the big picture and talk about big ideas. Others focus on details, facts, and what’s right in front of them. By understanding how people take in and express information, you can speak to any subject at hand in a way that resonates more effectively with them</p>
			</div>
		</div>
		<div class="vendimarrje">
			
			<div class="col-md-5 col-md-offset-2">
				<h2>Vendimarrje</h2>
				<p>Some people are naturally inclined to focus on the big picture and talk about big ideas. Others focus on details, facts, and what’s right in front of them. By understanding how people take in and express information, you can speak to any subject at hand in a way that resonates more effectively with them</p>
			</div>
			<div class="col-md-5">
				<i class="far fa-compass"></i>
			</div>
		</div>
	</section>

@endsection

@section('style')
<style>


</style>
@endsection