@extends('layouts.app')

@section('style')
<style>
    #about h1{
        text-align: center
    }
    #about p, #about li{
        font-size: 18px;
    }
    #about p:first-child{
        margin-top: 45px;
    }
</style>
@endsection
@section('content')
<div class="container" id="about">

    <div class="row">
        <div class="col-md-12"><h1>Rreth nesh</h1></div>
        <div class="col-md-6"><p> Personalitetet.com është një ide e një grupi shoqerorë të cilët dëshirojnë që të vedijesojnë opitionin shqipetarë dhe më gjërë, rreth fuqies së njohëjës së vetëvetës dhe shoqërisë në veqanti dhe në përgjithsi.</p>
            <p>Ndër kontribuesve janë:</p>
            <ul>
                <li>Besfort A. - Marketing</li>
                <li>Kushtrim R. - Design dhe Programim</li>
                <li>Lyra G. - Përmbbajtje</li>
                <li>Mirjeta H. - Përmbajtje</li>
            </ul>
        </div>
        <div class="col-md-6">
            <img src="../../storage/images/about.png" alt="personalitetet about page" class="img-responsive">
        </div>
    </div>
</div>
@endsection