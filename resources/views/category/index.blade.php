@extends('layouts.appAdmin')


@section('dashboard')
 <div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Kategori</h1>
            <a href="{!! action('CategoryController@create') !!}" class="btn btn-primary">Shto Kategori</a>
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
                    <th>ID</th>
                    <th>Emri</th>
                    <th>slug</th>
                    <th>created_at</th>
                  </tr>
              </thead>
              @foreach ($categories as $category)
                <tr class="testing-table">
                  <td>{{ $category->id }}</td>
                  <td>{{ $category->name }}</td>
                  <td>{{ $category->slug }}</td>
                  <td>{{ $category->created_at }}
                    <div class="setting">

                    <a class="btn btn-warning btn-xs" href="{{ action('CategoryController@edit', ['id' => $category->id]) }}" role="button">Edit</a>

                    <div class="display-inline" style="display: inline-block;">
                        <form method="post" action="{{ route('category.destroy', [$category->id]) }}">
                              {{ csrf_field() }}
                              <button type="submit" class="btn btn-danger btn-xs">Delete</button>
                        </form>
                    </div>
                    </div>
                  </td>
                </tr>
                @endforeach
            </table>
          </div>
        
    </div>
    <!-- /.col-lg-8 -->
  </div>
  <!-- /.row -->
</div>
<!-- /#category-wrapper -->

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