@extends('layouts.appAdmin')


@section('dashboard')
 <div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Galleria</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <!-- /.row -->
            <div class="row">
              <div class="col-md-3">
                 <div class="upload">
                        <form  method="POST" action="{{ action('GalleryController@store') }}" enctype="multipart/form-data">
                          {{ csrf_field() }}
                          <input type="file" id="file" name="file" >
                           <button type="submit" class="btn btn-primary" name="submit" accept="image/*"><i class="fa fa-save"></i> &nbsp; Ruaje</button>
                        </form>
                    </div>
              </div>
                <div class="col-lg-12">
                    @if(session()->has('message.level'))
                        <div class="alert alert-{{ session('message.level') }}"> 
                        {!! session('message.content') !!}
                        </div>
                    @endif

                  {{-- <div class="table-responsive patients-overview">
                    <table class="table table-hover table-striped">
                      <thead class="thead-inverse">
                          <tr>
                            <th>ID</th>
                            <th>Filename</th>
                            <th>extention</th>
                            <th>size</th>
                            <th>mime type</th>
                            <th>created_at</th>
                            <th>updated_at</th>
                          </tr>
                      </thead>
                      @foreach ($pages as $page)
                        <tr class="testing-table">
                          <td>{{ $page->id }}</td>
                          <td>{{ $page->title }}</td>
                          <td>{{ $page->slug }}</td>
                          <td>{{ $page->created_at }}</td>
                          <td>{{ $page->updated_at }}</td>
                        </tr>
                      @endforeach
                    </table>
                  </div> --}}
                    
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