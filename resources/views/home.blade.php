@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1> {{ Auth::user()->first_name }}, Ju jeni: {{ $results->rol_name }}</h1>
                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                
                    <div class="col-md-4">
                        <img src="{{ URL::to('/') }}/images/{{ $results->finaltype }}.png" alt="personaliteti tipi avatar" width="150">
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
                                <td>{{ $testResult->rol_name }} </td>
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
                                <td>{{ $testResult->judging_perspecting }} {{ $testResult->jp_final_procent_rez }}%</td>
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
