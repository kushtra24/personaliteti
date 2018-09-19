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
	#stickySidebar{
		background: white;
		padding: 15px 0;
		position: sticky;
		top: 20px;
	}
	#stickySidebar li{
		list-style: none;
		margin: 5px 0;
		text-transform: uppercase;
	}
	#stickySidebar h4{
		text-align: center;
		font-weight: 700;
	}
	/* .stickNow{
		padding: 16px 33px !important;
		position: fixed;
		top: 3px;
		right: 99px;
	} */
	


</style>
@endsection

@section('content')

<div class="container">

	<section id="heading-welcomepage">
		@foreach($tipi as $tipi)
			<img src="../{{ $tipi->feat_img }}" alt="tipi featured" width="100%" class="img-responsive">
			
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
	
	<div class="row" id="content">
		<div class="col-md-9">
				<h1>Tipi {{ $tipi->type }}</h1>
				<h4>Nryshe njihet edhe si {{ $tipi->name }}</h4>
				<hr>
				
			<div class="description">
				<div id="hyrja">
					{!! $tipi->hyrje !!}
					<hr>
				</div>
				<div id="forcatDobesit">
					{!! $tipi->forcatDobesit !!}
					<hr>
				</div>
				<div id="lidhjet">
					{!! $tipi->lidhjet !!}
					<hr>
				</div>
				<div id="miqesite">
					{!! $tipi->miqesite !!}
					<hr>
				</div>
				<div id="siprinder">
					{!! $tipi->siPrinder !!}
					<hr>
				</div>
				<div id="profesioni">
					{!! $tipi->profesioni !!}
					<hr>
				</div>
				<div id="vendipunes">
					{!! $tipi->vendiPunes !!}
					<hr>
				</div>
				<div id="shtese">
					{!! $tipi->shtese !!}
				</div>
			</div>
		</div>

		{{-- sidebar --}}
		<div class="col-md-3">
			{{-- <div class="sidebar-container"> --}}
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
				@elseif(Cookie::get('rol_name'))
					<div class="placehodler">
					<h3>Resultatet e juaja </h3>
					<p>{{ Cookie::get('rol_name')}}</p>
					<br>
				</div>
				@else
				<div class="notLogedIn">
					<h3>Sapo Erdhe?</h3>
				<a href="{{ route('testi') }}" class="btn btn-default">Fillo Vlersimin</a>
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

				<div id="stickySidebar">
					<h4>Eksploroje {{ $tipi->name }}n</h4>
					<ul>
						<li> <a href="#hyrja">Hyrje</a></li>
						<li> <a href="#forcatDobesit">Forcat/Dobesit</a></li>
						<li> <a href="#lidhjet">Lidhjet</a></li>
						<li> <a href="#miqesite">Miqesite</a></li>
						<li> <a href="#siprinder">Si prinder</a></li>
						<li> <a href="#profesioni">Profesioni</a></li>
						<li> <a href="#vendipunes">Vendi Punës</a></li>
						<li> <a href="#shtese">Më shumë</a></li>
					</ul> 
				</div>
			{{-- </div> end of sidebar contaier --}}
		</div>{{-- end of sidebar --}}
		
	</div>
	
	</section>

@endsection

@section('scripts')
<script>

var targetOffset = $("#stickySidebar").offset().top;

var $w = $(window).scroll(function(){
    if ( $w.scrollTop() > targetOffset && screen.width > 960) {   
        $('#content').css('display', 'flex');
    } else {
		$('#content').css('display', '');
    }
});

</script>
@endsection