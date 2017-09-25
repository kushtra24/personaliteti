@extends('layouts.app')

@section('content')
    <?php
    $name = Cookie::get('finaltype', 'Coockies janë çkyqur');

    if ($name == "INTP"){
        $rol_name = "IT WORKS";
    }else{
        $rol_name = "Shkenctari";
    }

    $var = Cookie::get('finaltype', 'Coockies janë çkyqur');

    ?>

<div class="container">
    <div class="row">
        <div class="col-md-12"><h2>Mirë se vjen, {{ Auth::user()->first_name }}</h2></div>
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Roli ytë është "{{ $rol_name }}", {{ $var }}</h3>
                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                
                    <div class="col-md-3">

                        <?php
                        if ($name == "INTP"){
                            $typeimg = 'https://www.16personalities.com/images/system/home/home-16personalities-community.png';
                        }else{
                            $typeimg = 'https://storage.googleapis.com/neris/public/images/types/infj.png ';
                        }
                        ?>


                        <img src="{{ $typeimg }}" alt="personaliteti tipi avatar" width="150">


                    </div>

                    <div class="col-md-9">
                        <table class="table table-hover">
                            <tr>
                                <td>Codi</td>
                                <td>{{ $name }}</td>
                            </tr>
                            <tr>
                                <td>Roli:</td>
                                <td>{{ $rol_name }}</td>
                            </tr>
                        </table>

                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
