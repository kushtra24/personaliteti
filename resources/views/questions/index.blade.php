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

                     <div class="table-responsive patients-overview">
                    <table class="table table-hover table-striped">
                      <thead class="thead-inverse">
                          <tr>
                            <th>ID</th>
                            <th>Pyetja</th>
                            <th>Teston</th>
                            <th>created_at</th>
                            <th>updated_at</th>
                          </tr>
                      </thead>
                      @foreach ($questions as $question)
                        <tr class="testing-table">
                          <td>{{ $question->id }}</td>
                          <td>{{ $question->question }}</td>
                          <td>{{ $question->purpose }}</td>
                          <td>{{ $question->created_at }}
                            <div class="setting">

                            <a class="btn btn-success btn-xs" href="{{ action('QuestionsController@show', ['id' => $question->id]) }}" role="button">View</a>

                            <a class="btn btn-warning btn-xs" href="{{ action('QuestionsController@edit', ['id' => $question->id]) }}" role="button">Edit</a>
                            </div>
                          </td>
                          <td>{{ $question->updated_at }}</td>
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