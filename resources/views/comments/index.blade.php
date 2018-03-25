@extends('layouts.appAdmin')


@section('dashboard')
 <div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Komentet</h1>
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
                            <th>Postimi</th>
                            <th>Titulli</th>
                            <th>Autori</th>
                            <th>Postuar me</th>
                          </tr>
                      </thead>
                      @foreach ($comments as $comment)
                        <tr class="testing-table">
                          <td>{{ $comment->id }}</td>
                          <td><a href="/post/{{ $comment->post_id }}">{{ $comment->post_id }}</a></td>
                          <td>{{ $comment->body }}
                             <div class="setting">
                              <a class="btn btn-success btn-xs" href="{{ action('CommentController@show', ['id' => $comment->id]) }}" role="button">Shiko</a>

                              <a class="btn btn-warning btn-xs" href="{{ action('CommentController@edit', ['id' => $comment->id]) }}" role="button">Edito</a>

                              <div class="display-inline" style="display: inline-block;">
                                  <form method="POST" action="{{ route('comments.destroy', [$comment->id]) }}">
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger btn-xs">Fshijë</button>
                                  </form>
                              </div>
                            </div>
                          </td>
                          {{-- <td>{!! str_limit($comment->content, 50) !!}</td> --}}
                          <td>{{ $comment->author }}</td>
                          <td>{{ $comment->created_at }}</td>
                        </tr>
                        @endforeach
                    </table>
                    {{ $comments->links() }}
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