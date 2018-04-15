@extends('layouts.app')

@section('style')
<style>
	.btn-xs{
		margin: 0 !important;
	}
</style>
@endsection

@section('content')

<div class="container">
    <div class="row">

    	<div class="col-md-4">
			<img src="../images/{{ Auth()->user()->testResults->last()->finaltype }}.png" alt="tipi" class="img-responsive">
    	</div>
        <div class="col-md-6">

			<form  method="POST" action="{{ route('UserController.update', [$user->id]) }}" enctype="multipart/form-data">
              	{!! csrf_field() !!}

                <div class="form-group"
>                    <input type="text" class="form-control" name="title" placeholder="Titulli faqes" value="{{ $user->first_name }}" required>
                </div>

                <div class="form-group">
                	<button type="submit" class="btn btn-primary pull-right cleftButton" name="submit" id="submit"><i class="fa fa-save"></i> &nbsp; Ruaje</button>
                </div>
            </form>

			<h3>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h3>
        	<p><b>Tipi:</b> <span>{{ Auth()->user()->testResults->last()->finaltype }}</span></p>
			<p><b>Gjinia:</b>
				@if(Auth::user()->gjinia == "")
					<a href="#" class="btn btn-default btn-xs pull-right">Shto gjini</a>
				@else
					{{Auth::user()->gjinia}}
				@endif
			</p>
			<p><b>Mosha:</b> 
				@if(Auth::user()->age == "")
					<a href="#" class="btn btn-default btn-xs pull-right">Shto Moshë</a>
				@else
					{{ Auth::user()->age }} Vjeq
				@endif
			</p>
			<p><b>Emaili:</b> {{ Auth::user()->email }}</p>
			<p><b>Profil i verifikuar:</b> {{ (Auth::user()->verified == '0' ? 'Jo' : 'Po') }}</p> 
			<p><b>Adresa:</b>
				@if(Auth::user()->adresa == "")
					<a href="#" class="btn btn-default btn-xs pull-right">Shto Adres</a>
				@else
					{{Auth::user()->adresa}}
				@endif
			</p>

			<p><b>shteti:</b>
				@if(Auth::user()->shteti == "")
					<a href="#" class="btn btn-default btn-xs pull-right">Shto shtet</a>
				@else
					{{Auth::user()->shteti}}
				@endif
			</p>

			<p><b>shkollimi:</b>
				@if(Auth::user()->shkollimi == "")
					<a href="#" class="btn btn-default btn-xs pull-right">Shto shkollim</a>
				@else
					{{Auth::user()->shkollimi}}
				@endif
			</p>

			<p><b>vendëlindja:</b>
				@if(Auth::user()->vendlindja == "")
					<a href="#" class="btn btn-default btn-xs pull-right">Shto vendlindje</a>
				@else
					{{Auth::user()->vendlindja}}
				@endif
			</p>

			<p><b>Hobby:</b>
				@if(Auth::user()->hobby == "")
					<a href="#" class="btn btn-default btn-xs pull-right">Shto hobby</a>
				@else
					{{Auth::user()->hobby}}
				@endif
			</p>

			<p><b>Profili u Krijua me daten:</b> {{ Auth::user()->created_at }}</p>
        </div>
    </div>
</div>



@endsection
