@extends('layouts.appAdmin')

@section('style')
<style>
    .section{
        /*background-color: #f1f1f1;*/
        border: #f1f1f1 solid;
        padding: 15px;
        margin: 20px 0;
    }

    .section:first-child{
        margin-top: 0;
    }
    
    .section>h4{
        font-weight: 700;
        border-bottom: 1px solid;
        padding-bottom: 10px;
        border-color: #ccc;
    }

    .modal-body{
        overflow: scroll;
        max-height: 500px;
    }

    .attachment-preview{
        margin: 7px 0;
    }

    .modal-body img {
        border: 2px solid gray;
    }

</style>
@endsection

@section('dashboard')
 <div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Shto Artikull</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <!-- /.row -->
        <div class="row">

            @if(session()->has('message.level'))
                <div class="alert alert-{{ session('message.level') }}"> 
                {!! session('message.content') !!}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>  
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                
            <form  method="POST" action="{{ action('PostController@store') }}" enctype="multipart/form-data">
                {!! csrf_field() !!}
                <div class="col-lg-9">
                    <div class="form-group">
                        <input type="text" class="form-control" name="title" placeholder="Titulli faqes" value="{{old('title')}}" required>
                    </div>
                    
                    <div class="form-group">
                        <textarea name="content" cols="50" rows="50">{{old('content')}}</textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary pull-right" name="submit" id="submit" accept="image/*"><i class="fa fa-save"></i> &nbsp; Ruaje</button>
                    </div>
                </div>
                <!-- /.col-lg-8 -->

                <div class="col-md-3">
                    <div class="foto section">
                        <h4>Fotoja</h4>
                        <div class="form-group">
                                <input type="file" class="" id="file" name="file" onchange="readURL(this);" required><span id="filename"></span>
                                <img src="" alt="" id="imediateImage" class="img-responsive">
                        </div>
                        <a href="#" class="btn btn-default" data-toggle="modal" data-target="#myModal"> Shto foto</a>
                    </div>
                    <div class="category section">
                        <h4>Category</h4>
                        <div class="checkbox">
                            <ul>
                                @foreach( $categories as $category)
                                <li>
                                    <input type="checkbox" name="category[]" value="{{ $category->id}}" id="{{ $category->id }}">
                                    <label for="{{ $category->id }}">{{ $category->name}}</label>
                                </li>
                                @endforeach
                            </ul>
                            <a href="/categories/create" target="_blank">Shto Kategori</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.row -->


<div class="modal fade " tabindex="-1" role="dialog" id="myModal">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Shto fotografi</h4>
      </div>
      <div class="modal-body">
        @forelse($posts as $post)
        <div class="col-md-2">
            <div class="centered">
                <input type="radio" id="image-{{ $post->id}}" value="" name="post-image" class="hidden">
                <label for="image-{{ $post->id }}">
                  <img src="{{asset('storage/images/'.$post->filename . "." . $post->extension)}}" class="{{ $post->id }} img-responsive" alt="{{ $post->id }}" >
                </label>
            </div>
        </div>
        @endforeach
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary save">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

</div>
<!-- /#page-wrapper -->

@endsection

@section('adminscripts')
  <script>

    $('.modal-body img').click(function(){
        if ($(".modal-body input").is(":checked")) {
            $(this).css('border-color', 'red');
            jQuery('.modal-body img').not(jQuery(this)).css('border-color', 'gray');
        }
        else{
            $(this).css('border-color', 'gray');
        }
    });

   

    //Show image imediately
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
            $('#imediateImage')
                .attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

@endsection