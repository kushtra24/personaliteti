@extends('layouts.appAdmin')

@section('style')
<style>

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
            <h1 class="page-header">Galleria</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <!-- /.row -->
            <div class="row">
              <div class="col-md-12">
                    <form action="{{ action('GalleryController@store') }}" method="POST" class="dropzone" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <div class="fallback">
                        <input name="file" type="file" multiple />
                      </div>
                    </form>
                    <hr>

                    @if(session()->has('message.level'))
                        <div class="alert alert-{{ session('message.level') }}"> 
                        {!! session('message.content') !!}
                        </div>
                    @endif

                @forelse($posts as $post)
                    <div class="col-md-2">
                        <div class="centered">
                            <input type="radio" id="image-{{ $post->id}}" value="{{ $post->id}}" name="postImage" class="hidden">
                            <label for="image-{{ $post->id }}">
                              <img src="{{asset('storage/images/'.$post->filename . "." . $post->extension)}}" class="{{ $post->id }} img-responsive" alt="{{ $post->id }}" >
                            </label>

                                <p> <b>{{ $post->filename }}</b></p>

                              <form method="POST" action="{{ route('gallery.destroy', [$post->id]) }}">
                                {{ csrf_field() }}
                                  <button class="btn btn-danger btn-xs" type="submit">fshije</button>
                              </form>
                            
                        </div>
                    </div>
                  @endforeach



                <div class="modal fade " tabindex="-1" role="dialog" id="myModal">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Informacionet e fotografisë</h4>
                      </div>
                      <div class="modal-body">
                        <table class="table-responsive table">
                            <thead>
                                <th></th>
                            </thead>
                            <tbody>
                                <td>{{ $post->id}}</td>
                            </tbody>
                        </table>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default closeModal" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary saveModal" disabled="disabled" data-dismiss="modal">Save changes</button>
                      </div>
                    </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
                    
                </div>
                <!-- /.col-lg-8 -->
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
</script>
@endsection