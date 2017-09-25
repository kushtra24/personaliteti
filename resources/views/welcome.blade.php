@extends('layouts.app')

@section('content')

<div class="container">

	<div class="heading">
		<h1>Eshte Mahnistese te Lexosh dicka qe te pershkruan aq mire</h1>
		<h4>Fillo tesin e personalitetit dhe mahnitu me saktesine qe ofron resultati juaj i personalitetit</h4>

		<a href="{{ route('testi') }}" class="btn btn-primary">Fillo Testing</a>
		<br><small>Pa pages, nuk eshte e nevojshme regjistrimi</small>
	</div>
	
@endsection