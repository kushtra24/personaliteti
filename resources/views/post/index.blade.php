@extends('layouts.appAdmin')


@section('dashboard')
 <div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Artikujt</h1>
            <a href="{!! action('PostController@create') !!}" class="btn btn-primary">Shto Artikull</a>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">

                     <div class="table-responsive patients-overview">
                    <table class="table table-hover table-striped">
                      <thead class="thead-inverse">
                          <tr>
                            <th>ID</th>
                            <th>Titulli</th>
                            <th>Përmbajtja</th>
                            <th>Foto</th>
                            <th>Autori</th>
                            <th>created_at</th>
                            <th>updated_at</th>
                          </tr>
                      </thead>
                      @foreach ($posts as $post)
                        <tr class="testing-table">
                          <td>{{ $post->id }}</td>
                          <td>{{ $post->title }}</td>
                          <td>{{ $post->content }}</td>
                          <td>{{ $post->image }}</td>
                          <td>{{ $post->author }}</td>
                          <td>{{ $post->created_at }}
                            <div class="setting">

                            <a class="btn btn-success btn-xs" href="{{ action('PostController@show', ['id' => $post->id]) }}" role="button">View</a>

                            <a class="btn btn-warning btn-xs" href="{{ action('PostController@edit', ['id' => $post->id]) }}" role="button">Edit</a>

                            <div class="display-inline" style="display: inline-block;">
                                <form method="POST" action="{{ route('PostController.destroy', [$post->id]) }}">
                                      {{ csrf_field() }}
                                      <button type="submit" class="btn btn-danger btn-xs">Delete</button>
                                </form>
                            </div>
                            </div>
                          </td>
                          <td>{{ $post->updated_at }}</td>
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