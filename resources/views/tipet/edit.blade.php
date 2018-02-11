@extends('layouts.appAdmin')


@section('dashboard')
 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edito Tipet e personalitetit</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8">
                    
                    {{-- @foreach(Auth::user()->testResults->reverse() as $testResult)
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
                        @endforeach --}}
                    
                </div>
                <!-- /.col-lg-8 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

@endsection