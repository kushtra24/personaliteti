@extends('layouts.app')

@section('style')
<style>
	.btn-xs{
		margin: 0 !important;
	}
</style>
@endsection

@section('content')

<div class="container user-profile">
    <div class="row">

    	<div class="col-md-4">
			<img src="{{ URL::to('/') . "/storage/images/" . Auth()->user()->testResults->last()->finaltype . ".png" }}" alt="tipi" class="img-responsive">
    	</div>
        <div class="col-md-6 user-data">        	
			<h3>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h3>
        	<p><b>Tipi:</b> <span>{{ Auth()->user()->testResults->last()->finaltype }}</span></p>
			<p><b>Gjinia:</b>
				@if(Auth::user()->gjinia == "" || Auth::user()->gjinia == null)
					<a href="{{ action('UserController@edit', [Auth::user()->id]) }}" class="btn btn-default btn-xs pull-right">Shto gjini</a>
				@else
				{{ Auth::user()->gjinia == "M" ? 'Mashkull' : 'Femer' }}
				@endif
			</p>
			<p><b>Data lindjes:</b> 
				@if(Auth::user()->age == "")
					<a href="{{ action('UserController@edit', [Auth::user()->id]) }}" class="btn btn-default btn-xs pull-right">Shto Moshë</a>
				@else
					{{ date('d-m-Y', strtotime(Auth::user()->age)) }}
					
				@endif
			</p>
			<p><b>Emaili:</b> {{ Auth::user()->email }}</p>
			<p><b>Profil i verifikuar:</b> {{ (Auth::user()->verified == '0' ? 'Jo' : 'Po') }}</p> 
			<p><b>Adresa:</b>
				@if(Auth::user()->adresa == "")
					<a href="{{ action('UserController@edit', [Auth::user()->id]) }}" class="btn btn-default btn-xs pull-right">Shto Adres</a>
				@else
					{{Auth::user()->adresa}}
				@endif
			</p>

			<p><b>Shteti:</b>
				@if(Auth::user()->shteti == "")
					<a href="{{ action('UserController@edit', [Auth::user()->id]) }}" class="btn btn-default btn-xs pull-right">Shto shtet</a>
				@else
					{{Auth::user()->shteti}}
				@endif
			</p>

			<p><b>Shkollimi:</b>
				@if(Auth::user()->shkollimi == "")
					<a href="{{ action('UserController@edit', [Auth::user()->id]) }}" class="btn btn-default btn-xs pull-right">Shto shkollim</a>
				@else
					{{Auth::user()->shkollimi}}
				@endif
			</p>

			<p><b>Vendëlindja:</b>
				@if(Auth::user()->vendlindja == "")
					<a href="{{ action('UserController@edit', [Auth::user()->id]) }}" class="btn btn-default btn-xs pull-right">Shto vendlindje</a>
				@else
					{{Auth::user()->vendlindja}}
				@endif
			</p>

			<p><b>Hobby:</b>
				@if(Auth::user()->hobby == "")
					<a href="{{ action('UserController@edit', [Auth::user()->id]) }}" class="btn btn-default btn-xs pull-right">Shto hobby</a>
				@else
					{{Auth::user()->hobby}}
				@endif
			</p>

			<p><b>Profili u Krijua me daten:</b> {{ Auth::user()->created_at }}</p>
			
			<a href="{{ action('UserController@edit', [Auth::user()->id]) }}" class="btn btn-warning no-left-margin">Ndrysho Profilin</a>
        </div>
    </div>
</div>



@endsection
