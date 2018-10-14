@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Regjistrimi</div>
                    <div class="panel-body">
                        Jeni regjistruar me sukses. Ju'a kemi dërguar një E-Mail për të verifikuar regjistrimin. <br>
                    <small>Ndërkohë Vazhdoni kyqjen dhe shikoni rezultatet e juaja <a href="{{ route('login') }}">këtu</a></small>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection