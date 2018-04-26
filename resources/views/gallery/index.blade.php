@extends('layouts.appAdmin')

@section('style')
<style>

.attachment-preview {
    position: relative;
    box-shadow: inset 0 0 15px rgba(0,0,0,.1), inset 0 0 0 1px rgba(0,0,0,.05);
    background: #eee;
    cursor: pointer;
}


.centered img {
    -webkit-transform: translate(-50%,-50%);
    transform: translate(-50%,-50%);
}

.prev-thumbnail {
    overflow: hidden;
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    opacity: 1;
    transition: opacity .1s;
}

.prev-thumbnail:after {
    content: "";
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    box-shadow: inset 0 0 0 1px rgba(0,0,0,.1);
    overflow: hidden;
}

.centered {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    -webkit-transform: translate(50%,50%);
    transform: translate(50%,50%);
}

.attachment-preview:before {
    content: "";
    display: block;
    padding-top: 100%;
}

</style>
@endsection

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

                @forelse($posts as $post)
                <div class="col-md-1">
                  <div class="attachment-preview">
                    <div class="prev-thumbnail">
                      <div class="centered">
                          <img src=" {{asset('storage/'.$post->filename . "." . $post->extension)}}" class=" img-responsive" alt="{{ $post->filename }}" >
                      </div>
                    </div>
                  </div>
                </div>

                @endforeach
                    
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