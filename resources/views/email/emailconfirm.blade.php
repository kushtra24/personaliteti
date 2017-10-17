@extends('layouts.app')

@section('style')
    <style>
    .loginHere{
        text-align: center;
    }

    </style>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Regjistrimi është Konfirmuar</div>
                <div class="panel-body">
                    <div class="loginHere">
                        <p>Llogaria eshte Aktivizuar me sukes, mund te kyqeni tani</p>
                        <a href="{{url('/login')}}" class="btn btn-success">Kyqu</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection