@extends('layouts.appAdmin')


@section('dashboard')
 <div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Shto Faqe</h1>
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

                     <form  method="POST" action="{{ action('PageController@store') }}" >
                      {!! csrf_field() !!}
                       
                        <div class="form-group">
                            <input type="text" class="form-control" name="title" placeholder="Titulli faqes" required>
                        </div>

                        <div class="form-group">
                          <input type="text" class="form-control" name="slug" id="slug" placeholder="slug">
                        </div>

                        <div class="form-group">
                            <textarea name="content" id="editor" cols="50" rows="50"></textarea>
                        </div>


                        <div class="form-group">
                        <button type="submit" class="btn btn-primary pull-right cleftButton" name="submit" id="submit"><i class="fa fa-save"></i> &nbsp; Ruaje</button>
                        </div>

                     </form>
                    
                </div>
                <!-- /.col-lg-8 -->
            </div>
            <!-- /.row -->
</div>
<!-- /#page-wrapper -->

@endsection

@section('adminscripts')


  <script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );


        // show the image immediately after insertation
        $("input[id='type_img']").change(function (e) {
            var $this = $(this);
            $this.next().html($this.val().split('\\').pop());
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