@extends('layouts.app')

@section('style')
<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
<style>

.testimonials{
	text-align: center;
}

.avatar{
	border: 3px solid #ccc;
    border-radius: 50%;
    height: 80px;
    width: 80px;
    margin: 0 auto;
}
.quote-icon{
	color: #cecece;
}

.owl-carousel {
    margin: 56px 0;
}


</style>
@endsection
@section('content')

<div class="container">

	<section id="heading-welcomepage">
		<h1>Gjejë Personalitetin tuaj, Tani!</h1>
		<h4>Fillo vlersimin e personalitetit dhe mahnitu me saktesine qe ofron resultati juaj i personalitetit</h4>

		<a href="{{ route('testi') }}" class="btn btn-primary">Fillo Vlersimin</a>
		{{-- <br><small>Pa pages, nuk eshte e nevojshme regjistrimi</small> --}}
		<br>
		<img src="{{ asset('images/homepage.png') }}" class="img-responsive" alt="homepage image">
	</section>

	<section id="welcome-content-middle">
		<i class="fas fa-heart fa-5x"></i>
		<h3>Pakë rreth teoriës së përgjithshme të vlersimit</h3>
		<p>Bazuar ne studimet dhe mesimet e Carl Jung mbi tipet e personalitetit, ne kemi ndertuar nje pyetsor qe jep nje indikator per orientimin e personalitetit tuaj. Pyetsori ofron një indikator me te cilen mund te percaktohet tipi i personalitetit tuaj.</p>
	</section>
	
	<section id="cka_vlerson" class="col-md-offset-31">
		<h1>Ku ju ndihmon ky vlersim</h1>

		<div class="komunikim col-md-6">
			<div class="inner-part">
				<i class="far fa-comments"></i>
				<h2>Komunikim</h2>
				<p>Disa njerëz janë të prirur natyrshëm që të përqëndrohen në pamjen e madhe dhe të flasin për idetë e mëdha. Të tjerë përqendrohen në detaje, fakte dhe në atë që duket qartë. Duke kuptuar se si njerëzit marrin dhe shprehin informacione, ju mund të flisni me çdo temë në një mënyrë që rezonon më efektivisht me ta.</p>
			</div>
		</div>
		<div class="karrier col-md-6">
			<div class="inner-part">
				<i class="fab fa-telegram-plane"></i>
				<h2>Karrier</h2>
				<p>Gjetja e një karriere të duhur për ju, mund të jetë një përpjekje e lodhshme dhe frustruese, por vlerësimi i personalitetit mund të ju ndihmojë. Duke e njohur veten, duke njohur nevojat e atyre që janë përreth jush dhe duke identifikuar ne cfar fusha mund të lulëzoni natyrshëm, qasja juaj në zhvillimin e karrierës bëhet shumë më e lehtë.</p>
			</div>
		</div>
		<div class="lidhje col-md-6">
			<div class="inner-part">
				<i class="far fa-heart"></i>
				<h2>lIDHJE BASHKSHORTORE</h2>
				<p>Ndoshta bashkshorti/ja juaj ju kupton, ose ju e keni të vështirë duke u kuptuar me një mik apo një anëtar të familjes. A jeni duke thënë të njëjtat gjëra, por në mënyra të ndryshme? Apo ndoshta po kërkoni të krijoni ekuilibrin në një mënyrë që ju plotëson më shumë. Preferencat e personalitetit tuaj mund të kenë diçka për të thënë për këtë.</p>
			</div>
		</div>
		<div class="vendimarrje col-md-6">
			<div class="inner-part">
				<i class="far fa-compass"></i>
				<h2>Vendimarrje</h2>
				<p>Shumë njerëz i afrohen vendimmarrjes në aspektin e rezultateve të drejtpërdrejta dhe implikimeve (p.sh., nëse kthehem në shkollë, do të kushtojë kaq..). Sidoqoftë, rezultatet e nënkuptuara dhe ato që ndikojnë në thelbin tënd nuk janë gjithmonë aq të dukshme (p.sh., a do të përshtatet ky format i mësimdhënjes me mua?). Ne mund t'ju ndihmojmë t'i zbuloni këtë.</p>
			</div>
		</div>
	</section>

	<section class="testimonials">
		<h1>Çfar thanë të tjerët?</h1>
		<i class="fas fa-quote-left fa-5x quote-icon"></i>
		<div class="owl-carousel">
		  <div class="col-md-8 col-md-offset-2">
			<p>Ishte fascinuese të lexojë gjëra rreth përsonalitetit timë, ishtin tejët të sakta, nuk besoja çfar isha duke lëxuar. Aq të sakta ishin sa që mendoja që është shkruarë posaqerisht për mua</p>
			<div class="avatar"><img src="{{ asset('images/enfj.png') }}" alt="testimonial avatar"></div>
		  </div>

		  <div class="col-md-8 col-md-offset-2">
			<p>Jetën e kamë kaluar duke menduar se jamë nga një plant tjër apo diçka të till. Kur e përfundova pyetsorin pash që nuk jamë e vetmja por ka më shumë njerëzë sikur unë, që nga ajo ditë jamë më e lumtur në lëkuren time</p>
			<div class="avatar"><img src="{{ asset('images/INFJ.png') }}" alt="testimonial avatar"></div>
		  </div>
		</div>
	</section>

@endsection

@section('scripts')
	<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
	<script>
		$(document).ready(function(){
  			// $(".owl-carousel").owlCarousel();
  			$('.owl-carousel').owlCarousel({
			    center: true,
			    items:1,
			    loop:true,
			    margin:10,
			    responsive:{
			        600:{
			            items:1
			        }
			    }
			});
		});
	</script>
@endsection