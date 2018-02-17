@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
        	
			<p>{{ Auth::user()->first_name }}</p>
			<p>{{ Auth::user()->last_name }}</p>
			<p>{{ Auth::user()->age }}</p>
			<p>{{ Auth::user()->email }}</p>
			<p>{{ Auth::user()->verified }}</p>
			<p>{{ Auth::user()->created_at }}</p>
        </div>
    </div>
</div>


@endsection
