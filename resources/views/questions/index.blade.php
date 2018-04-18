@extends('layouts.appAdmin')


@section('dashboard')
 <div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Pyetjet</h1>
            <a href="{!! action('QuestionsController@create') !!}" class="btn btn-primary">Shto Pyetje</a>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">

                  @if(session()->has('message.level'))
                            <div class="alert alert-{{ session('message.level') }}"> 
                            {!! session('message.content') !!}
                            </div>
                        @endif


                     <div class="table-responsive patients-overview">
                    <table class="table table-hover table-striped">
                      <thead class="thead-inverse">
                          <tr>
                            <th>Nr.</th>
                            <th>Pyetja</th>
                            <th>Teston</th>
                            <th>Krijuar</th>
                            <th>Përditësuar</th>
                            <th>ID</th>
                          </tr>
                      </thead>
                      @foreach ($questions as $index => $question)
                        <tr class="testing-table">
                          <td>{{ $index +1 }}</td>
                          <td>{{ $question->question }}
                            <div class="setting">
                              <a class="btn btn-success btn-xs" href="{{ action('QuestionsController@show', ['id' => $question->id]) }}" role="button">View</a>

                              <a class="btn btn-warning btn-xs" href="{{ action('QuestionsController@edit', ['id' => $question->id]) }}" role="button">Edit</a>

                              <div class="display-inline" style="display: inline-block;">
                                  <form method="POST" action="{{ route('QuestionsController.destroy', [$question->id]) }}">
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger btn-xs">Delete</button>
                                  </form>
                              </div>
                            </div>
                          </td>
                          <td>{{ $question->purpose }}</td>
                          <td>{{ $question->created_at }}</td>
                          <td>{{ $question->updated_at }}</td>
                          <td>{{ $question->id }}</td>
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