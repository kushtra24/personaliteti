@extends('layouts.appAdmin')


@section('dashboard')
 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tipet e personalitetit</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8">
                      @if(session()->has('message.level'))
                          <div class="alert alert-{{ session('message.level') }}"> 
                          {!! session('message.content') !!}
                          </div>
                      @endif

                  <div class="table-responsive patients-overview">
                    <table class="table table-hover table-striped">
                      <thead class="thead-inverse">
                          <tr>
                            <th>ID</th>
                            <th>Tipi</th>
                            <th>Emri</th>
                            <th>Krjuar</th>
                            <th>Përditësuar</th>
                          </tr>
                      </thead>
                      @foreach ($tipet as $tipi)
                        <tr class="testing-table">
                          <td>{{ $tipi->id }}</td>
                          <td>{{ $tipi->type }}</td>
                          <td>{{ $tipi->name }}</td>
                          <td>{{ $tipi->created_at }}
                            <div class="setting">

                            <a class="btn btn-success btn-xs" href="{{ action('TipetController@show', ['id' => $tipi->type]) }}" role="button" target="_blank">Shiko</a>

                            <a class="btn btn-warning btn-xs" href="{{ action('TipetController@edit', ['id' => $tipi->id]) }}" role="button">Përpuno</a>
                            </div>
                          </td>
                          <td>{{ $tipi->updated_at }}</td>
                        </tr>
                        @endforeach
                    </table>
                  </div>
                    
                </div>
                <!-- /.col-lg-8 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

@endsection

@section('style')

<style>

.setting{
  display: none;
}

.testing-table:hover .setting{
  display: block;
}
</style>
@endsection