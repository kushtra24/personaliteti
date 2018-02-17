@extends('layouts.appAdmin')

@section('dashboard')
 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edito Faqet</h1>
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
                    
                    <form method="POST" action="{{ route('page.update', [$pages->id]) }}" class="form-horizontal" enctype="multipart/form-data" >
                      {{ csrf_field() }}

                        <div class="form-group">
                          <label for="type" class="col-sm-3 control-label">Titulli</label>
                            <div class="col-sm-9">
                          <input type="text" class="form-control" name="title" id="title" value="{{ $pages->title }}" placeholder="Titulli">
                           </div>
                        </div>

                        <div class="form-group">
                          <label for="type" class="col-sm-3 control-label">Slug</label>
                            <div class="col-sm-9">
                          <input type="text" class="form-control" name="slug" id="slug" value="{{ $pages->slug }}" placeholder="Titulli">
                           </div>
                        </div>

                        <div class="form-group">
                          <label for="FileNo" class="col-sm-3 control-label">Pershkrimi</label>
                            <div class="col-sm-9">
                          <textarea name="content" id="editor">{{ $pages->content }}</textarea>
                           </div>
                        </div>

                          <button type="submit" class="btn btn-primary pull-right">Ruaje</button>

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