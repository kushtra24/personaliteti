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

    .centered label{
        height: 80px;
        overflow: hidden;
        border: 2px solid gray;
    }

    .selected{
        border: 2px solid red !important;
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
                        <img src="" alt="" id="imediateImage" class="img-responsive">
                        <input type="text" value="" id="fotoID" class="hidden" name="fotoID" >
                        <a href="#" class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModal"> Shto foto</a>
                        <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" id="remove-foto"> Heq foton</a>
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

                 <div class="modal fade " tabindex="-1" role="dialog" id="myModal">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Shto fotografi</h4>
                      </div>
                      <div class="modal-body">
                        <div class="form-group">
                                <input type="file" id="file" name="file" onchange="readURL(this);" accept="image/*"><span id="filename"></span>
                        </div>
                        @forelse($posts as $post)
                        <div class="col-md-2">
                            <div class="centered">
                                <input type="radio" id="image-{{ $post->id}}" value="{{ $post->id}}" name="postImage" class="hidden">
                                <label for="image-{{ $post->id }}">
                                  <img src="{{asset('storage/images/'.$post->filename . "." . $post->extension)}}" class="{{ $post->id }} img-responsive" alt="{{ $post->id }}" >
                                </label>
                            </div>
                        </div>
                        @endforeach
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default closeModal" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary saveModal" disabled="disabled" data-dismiss="modal">Save changes</button>
                      </div>
                    </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

            </form>
        </div>
        <!-- /.row -->

</div>
<!-- /#page-wrapper -->

@endsection

@section('adminscripts')
  <script>

    //make a red border on a clicked image on modal
    $('.centered label').click(function(){//if clicked the image
        $(this).addClass('selected'); // add a red morder to the image
        $('.centered label').not($(this)).removeClass('selected'); //remove the red border from the previeouse selected image
        $('.saveModal').removeAttr('disabled'); // remove attribute desabled from save modal button
    });

    //add the value of the clicked input type radio of the selected image to the hidden input of the image
     $('.modal-body input').change(function() {
        $('#fotoID').val($(this).val()); // add the value of the input to the input with the id of fotoID
    });

     $('.saveModal').click(function (){ //on click save modal button
        var image = $('.centered .selected img').attr('src'); // get the src attrubute from the selected image store to the image variable
        $('#imediateImage').attr("src", image); // add the image sec to the imadeiate image
        $('#file').val('');  // remove the file value 
     });

     $('#remove-foto, .closeModal').click(function(){ //on click remove foto button
        $('#fotoID').val(''); // remove the value of the fotoID input
        $('#file').val(''); // remove the value of the file input button
        $('.saveModal').attr('disabled', 'desabled'); // add arrtibute desable to the save modal button
        $('.centered label').not($(this)).removeClass('selected'); // make the background of the img gray again
        $('#imediateImage').attr("src", ''); // remove the src of the image
     });

    //Show image imediately
    function readURL(input) { // read the url from
        if (input.files && input.files[0]) {
            $('#myModal').modal('hide');
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