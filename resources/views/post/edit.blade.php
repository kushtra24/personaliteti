@extends('layouts.appAdmin')


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
                <div class="col-lg-12">

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
                        
                     <form  method="POST" action="{{ route('PostController.update', [$posts->id]) }}" enctype="multipart/form-data">
                      {!! csrf_field() !!}
                       
                        <div class="form-group">
                        		<input type="file" id="file" name="file" onchange="readURL(this);"><span id="filename"></span>
                          		<img src="{{ $posts->image }}" alt="post image" width="50px" id="imediateImage" class="img-responsive">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="title" placeholder="Titulli faqes" value="{{ $posts->title }}" required>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="author" placeholder="Autori" value="{{ $posts->author }}" required>
                        </div>

                        <div class="form-group">
                            <textarea name="content" id="editor" cols="50" rows="50">{{ $posts->content }}</textarea>
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