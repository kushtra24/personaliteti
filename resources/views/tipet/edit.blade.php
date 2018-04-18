@extends('layouts.appAdmin')

@section('dashboard')
 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edito Personalitetin {{ $tipi->type }}</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    <form method="POST" action="{{ route('admintipet.update', [$tipi->id]) }}" class="form-horizontal" enctype="multipart/form-data" >
                      {{ csrf_field() }}

                        <div class="form-group">
                          <label for="type" class="col-sm-2 control-label">Kodi</label>
                            <div class="col-sm-10">

                          <input type="text" class="form-control" name="type" id="type" value="{{ $tipi->type }}" placeholder="Kodi">
                           </div>
                        </div>

                        <div class="form-group">
                          <label for="name" class="col-sm-2 control-label">Emri</label>
                            <div class="col-sm-10">

                          <input type="text" class="form-control" name="name" id="name" value="{{ $tipi->name }}" placeholder="Emri">
                           </div>
                        </div>

                        <div class="form-group">
                          <label for="FileNo" class="col-sm-2 control-label">Type Image</label>
                            <div class="col-sm-10">

                        <input type="file" id="file" name="file" onchange="readURL(this);"><span id="filename"></span>

                          <img src="../{{ $tipi->type_img }}" alt="Type image" width="50px" id="imediateImage1">
                           </div>
                        </div>

                        <div class="form-group">
                          <label for="FileNo" class="col-sm-2 control-label">Pershkrimi shkurt</label>
                            <div class="col-sm-10">
                          <textarea class="form-control" rows="5" id="short" name="shortDescription">{{ $tipi->shortDescription }}</textarea>
                           </div>
                        </div>

                        <div class="form-group">
                          <label for="FileNo" class="control-label">Pershkrimi</label>
                            <div class="col-sm-12">
                          <textarea name="description" id="editor">{{ $tipi->description }}</textarea>
                           </div>
                        </div>

                          <button type="submit" class="btn btn-primary pull-right">Ruaj</button>

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