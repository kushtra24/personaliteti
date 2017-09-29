@extends('layouts.app')

@section('content')

    <?php
    $lastFinal = Auth::user()->testResults->last()->finaltype;

    if ($lastFinal == "INTJ"){ $rol_name = "Arkitekti"; $typeimg = "";}    elseif ($lastFinal == "INTP"){$rol_name = "Racionali"; $typeimg = "";}
    elseif ($lastFinal == "ENTJ"){$rol_name = "Komanderi"; $typeimg = "/images/entj.png";}
    elseif ($lastFinal == "ENTP"){$rol_name = "Debatisti"; $typeimg = "/images/entj.png";}
    elseif ($lastFinal == "INFJ"){$rol_name = "Diplomati"; $typeimg = "/images/entj.png";}
    elseif ($lastFinal == "INFP"){$rol_name = "Mediatori"; $typeimg = "/images/entj.png";}
    elseif ($lastFinal == "ENFJ"){$rol_name = "Protagonisti"; $typeimg = "/images/entp.png";}
    elseif ($lastFinal == "ENFP"){$rol_name = "Mikpritesi"; $typeimg = "/images/entp.png";}
    elseif ($lastFinal == "ISFJ"){$rol_name = "Logjistiku"; $typeimg = "/images/entp.png";}
    elseif ($lastFinal == "ISFJ"){$rol_name = "Mbrojtesi"; $typeimg = "/images/entp.png";}
    elseif ($lastFinal == "ESTJ"){$rol_name = "Ekzekutivi"; $typeimg = "/images/intj.png";}
    elseif ($lastFinal == "ESFJ"){$rol_name = "Konsulenti"; $typeimg = "/images/intj.png";}
    elseif ($lastFinal == "ISTP"){$rol_name = "Virtuozi"; $typeimg = "/images/intj.png";}
    elseif ($lastFinal == "ISFP"){$rol_name = "Adventuristi"; $typeimg = "/images/intj.png";}
    elseif ($lastFinal == "ESTP"){$rol_name = "Ndermarresi"; $typeimg = "/images/intp.png";}
    elseif ($lastFinal == "ESFP"){$rol_name = "Lozenjeri"; $typeimg = "/images/intp.png";}
    else {$rol_name = "Pa definim";}
    ?>

<div class="container">
    <div class="row">
        <div class="col-md-12"><h2></h2></div>
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1> {{ Auth::user()->first_name }}, Ju jeni: {{ $rol_name }}</h1>
                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                
                    <div class="col-md-4">
                        <img src="{{ URL::to('/') }}{{ $typeimg }}" alt="personaliteti tipi avatar" width="150">
                    </div>

                    <div class="col-md-8">
                        @foreach(Auth::user()->testResults->reverse() as $testResult)
                        <table class="table table-hover">
                            <tr>
                                <td>E kriuar me: </td>
                                <td>{{ $testResult->created_at }} </td>
                            </tr>
                            <tr>
                                <td>Roli:  </td>
                                <td>{{ $rol_name }} </td>
                            </tr>
                            <tr>
                                <td>Codi</td>
                                <td>{{ $testResult->finaltype }}</td>
                            </tr>
                            <tr>
                                <td>Codi</td>
                                <td>{{ $testResult->intro_extro }} {{ $testResult->first_final_procent_rez }}% </td>
                            </tr>
                            <tr>
                                <td>Roli:</td>
                                <td>{{ $testResult->intu_sens }} {{ $testResult->ns_final_procent_rez }} %</td>
                            </tr>
                            <tr>
                                <td>Roli:</td>
                                <td>{{ $testResult->feeling_thinking }} {{ $testResult->ft_final_procent_rez }}% </td>
                            </tr>
                            <tr>
                                <td>Roli:</td>
                                <td>{{ $testResult->judging_perspecting }} {{ $testResult->ft_final_procent_rez }}%</td>
                            </tr>
                        </table>
                        @endforeach
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
