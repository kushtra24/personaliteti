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
				<div class="col-md-3">
					<a href="#">
						<h4>INTJ</h4>
						<img src="{{asset('images/tipet.png')}}" alt="tipi">
					</a>
				</div>
				<div class="col-md-3">
					<a href="#">
						<h4>INFJ</h4>
						<img src="{{asset('images/tipet.png')}}" alt="tipi">
					</a>
				</div>
				<div class="col-md-3">
					<a href="#">
						<h4>ISTJ</h4>
						<img src="{{asset('images/tipet.png')}}" alt="tipi">
					</a>
				</div>
				<div class="col-md-3">
					<a href="#">
						<h4>ISFJ</h4>
						<img src="{{asset('images/tipet.png')}}" alt="tipi">
					</a>
				</div>
		</div>


		<div id="vetvetja" class="type-group row">
			<h1><strong>Vetvetja</strong></h1>
				<div class="col-md-3">
					<a href="#">
						<h4>INTP</h4>
						<img src="{{asset('images/tipet.png')}}" alt="tipi">
					</a>
				</div>
				<div class="col-md-3">
					<a href="#">
						<h4>INFP</h4>
						<img src="{{asset('images/tipet.png')}}" alt="tipi">
					</a>
				</div>
				<div class="col-md-3">
					<a href="#">
						<h4>ISTP</h4>
						<img src="{{asset('images/tipet.png')}}" alt="tipi">
					</a>
				</div>
				<div class="col-md-3">
					<a href="#">
						<h4>ISFP</h4>
						<img src="{{asset('images/tipet.png')}}" alt="tipi">
					</a>
				</div>
		</div>

		<div id="shoqeri" class="type-group row">
			<h1><strong>Shoqeri</strong></h1>
				<div class="col-md-3">
					<a href="#">
						<h4>ENTJ</h4>
						<img src="{{asset('images/tipet.png')}}" alt="tipi">
					</a>
				</div>
				<div class="col-md-3">
					<a href="#">
						<h4>ENFJ</h4>
						<img src="{{asset('images/tipet.png')}}" alt="tipi">
					</a>
				</div>
				<div class="col-md-3">
					<a href="#">
						<h4>ESTJ</h4>
						<img src="{{asset('images/tipet.png')}}" alt="tipi">
					</a>
				</div>
				<div class="col-md-3">
					<a href="#">
						<h4>ESFJ</h4>
						<img src="{{asset('images/tipet.png')}}" alt="tipi">
					</a>
				</div>
		</div>

		<div id="mbledhje" class="type-group row">
			<h1><strong>Mbledhje</strong></h1>
				<div class="col-md-3">
					<a href="#">
						<h4>ENTP</h4>
						<img src="{{asset('images/tipet.png')}}" alt="tipi">
					</a>
				</div>
				<div class="col-md-3">
					<a href="#">
						<h4>ENFP</h4>
						<img src="{{asset('images/tipet.png')}}" alt="tipi">
					</a>
				</div>
				<div class="col-md-3">
					<a href="#">
						<h4>ESTP</h4>
						<img src="{{asset('images/tipet.png')}}" alt="tipi">
					</a>
				</div>
				<div class="col-md-3">
					<a href="#">
						<h4>ESFP</h4>
						<img src="{{asset('images/tipet.png')}}" alt="tipi">
					</a>
				</div>
		</div>

	</section>
	
@endsection