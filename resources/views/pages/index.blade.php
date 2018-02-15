@extends('layouts.appAdmin')


@section('dashboard')
 <div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Pyetjet</h1>
            <a href="{!! action('pageController@create') !!}" class="btn btn-primary">Shto Faqe</a>
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
                            <th>Titulli</th>
                            <th>created_at</th>
                            <th>updated_at</th>
                          </tr>
                      </thead>
                      @foreach ($pages as $page)
                        <tr class="testing-table">
                          <td>{{ $page->id }}</td>
                          <td>{{ $page->title }}</td>
                          <td>{{ $page->created_at }}
                            <div class="setting">

                            <a class="btn btn-success btn-xs" href="{{ action('pageController@show', ['id' => $page->id]) }}" role="button">View</a>

                            <a class="btn btn-warning btn-xs" href="{{ action('pageController@edit', ['id' => $page->id]) }}" role="button">Edit</a>

                            <div class="display-inline" style="display: inline-block;">
                                <form method="post" action="{{ route('page.destroy', [$page->id]) }}">
                                      {{ csrf_field() }}
                                      <button type="submit" class="btn btn-danger btn-xs">Delete</button>
                                </form>
                            </div>
                            </div>
                          </td>
                          <td>{{ $page->updated_at }}</td>
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