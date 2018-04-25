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
                                <input type="file" id="file" name="file" onchange="readURL(this);" required><span id="filename"></span>
                                <img src="" alt="" id="imediateImage" class="img-responsive">
                        </div>
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
</div>
<!-- /#page-wrapper -->

@endsection

@section('adminscripts')
  <script>


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