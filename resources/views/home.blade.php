@extends('layouts.app')

@section('style')

@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="">
                <div class="">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ URL::to('/') }}/images/{{ $results->finaltype }}.png" alt="personaliteti tipi avatar" class="img-responsive">
                    </div>

                    <div class="col-md-8">
                    <h1> {{ Auth::user()->first_name }}, Ju jeni: {{ $results->rol_name }}</h1>
                     <p> Kodi: {{ $results->finaltype }}</p>
                     <p> Kodi: {{ $results->created_at }}</p>
                     <p> Kodi: {{ $results->rol_name }}</p>
                     <p> Kodi: {{ $results->intro_extro }} {{ $results->first_final_procent_rez }}% </p>
                     <p> Kodi: {{ $results->intu_sens }} {{ $results->ns_final_procent_rez }}% </p>
                     <p> Kodi: {{ $results->feeling_thinking }} {{ $results->ft_final_procent_rez }}% </p>
                     <p> Kodi: {{ $results->judging_perspecting }} {{ $results->jp_final_procent_rez }}% </p>
                    </div>
                </div>

                  <div class="row">
                    <div class="col-md-12"> <h1>Historia</h1> </div>
                  @foreach(Auth::user()->testResults->reverse() as $testResult)
                    <div class="col-md-3">
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
                      </div>
                    @endforeach
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
