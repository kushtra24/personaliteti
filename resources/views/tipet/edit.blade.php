@extends('layouts.appAdmin')

@section('dashboard')
 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Përpuno Personalitetin {{ $tipi->type }}</h1>
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
                          <label for="featFile" class="col-sm-2 control-label">Foto Përshkrimit</label>
                            <div class="col-sm-10">

                            <input type="file" id="featFile" name="featFile" onchange="readURL(this);" data-target="1">
                            <span id="filename"></span>

                          <img src="@if($tipi->hasMedia('thumbnail')) {{ $tipi->firstMedia('thumbnail')->getUrl() }} @endif" width="50px" id="imediateImage1">
                           </div>
                        </div>
                    
                        <div class="form-group">
                          <label for="type" class="col-sm-2 control-label">Kodi</label>
                            <div class="col-sm-10">
                          <input type="text" class="form-control" name="type" id="type" value="{{ $tipi->type }}" placeholder="Kodi" disabled>
                           </div>
                        </div>

                        <div class="form-group">
                          <label for="name" class="col-sm-2 control-label">Emri</label>
                            <div class="col-sm-10">

                          <input type="text" class="form-control" name="name" id="name" value="{{ $tipi->name }}" placeholder="Emri">
                           </div>
                        </div>

                        <div class="form-group">
                          <label for="file" class="col-sm-2 control-label">Karakteri</label>
                            <div class="col-sm-10">

                        <input type="file" id="file" name="file" onchange="readURL(this);" data-target="2">
                        <span id="filename"></span>

                          <img src="@if($tipi->hasMedia('tipiImg')) {{ $tipi->firstMedia('tipiImg')->getUrl() }} @endif" width="50px" id="imediateImage2">
                           </div>
                        </div>
                        
                        <div class="form-group">
                          <label for="short" class="col-sm-2 control-label">Përshkrimi i shkurtë</label>
                            <div class="col-sm-10">
                          <textarea class="form-control" rows="5" id="short" name="shortDescription">{{ $tipi->shortDescription }}</textarea>
                           </div>
                        </div>
                        <hr>
                          <h2>Përshkrimi</h2>
                        <div class="form-group">
                          <label for="editor" class="control-label">Hyrje</label>
                            <div class="col-sm-12">
                          <textarea name="hyrje" id="editor">{{ $tipi->hyrje }}</textarea>
                           </div>
                        </div>

                        <div class="form-group">
                          <label for="editor" class="control-label">Forcat - Dobësit</label>
                            <div class="col-sm-12">
                          <textarea name="forcatDobesit" id="editor">{{ $tipi->forcatDobesit }}</textarea>
                           </div>
                        </div>

                        <div class="form-group">
                          <label for="editor" class="control-label">Lidhjet</label>
                            <div class="col-sm-12">
                          <textarea name="lidhjet" id="editor">{{ $tipi->lidhjet }}</textarea>
                           </div>
                        </div>

                        <div class="form-group">
                          <label for="editor" class="control-label">Miqësitë</label>
                            <div class="col-sm-12">
                          <textarea name="miqesite" id="editor">{{ $tipi->miqesite }}</textarea>
                           </div>
                        </div>

                        <div class="form-group">
                          <label for="editor" class="control-label">Si Prindër</label>
                            <div class="col-sm-12">
                          <textarea name="siPrinder" id="editor">{{ $tipi->siPrinder }}</textarea>
                           </div>
                        </div>

                        <div class="form-group">
                          <label for="editor" class="control-label">Profesioni</label>
                            <div class="col-sm-12">
                          <textarea name="profesioni" id="editor">{{ $tipi->profesioni }}</textarea>
                           </div>
                        </div>

                        <div class="form-group">
                          <label for="editor" class="control-label">Vendi i Punës</label>
                            <div class="col-sm-12">
                          <textarea name="vendiPunes" id="editor">{{ $tipi->vendiPunes }}</textarea>
                           </div>
                        </div>

                        <div class="form-group">
                          <label for="editor" class="control-label">Shtesë</label>
                            <div class="col-sm-12">
                          <textarea name="shtese" id="editor">{{ $tipi->shtese }}</textarea>
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
    
      function readURL(input, photoTypeId) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    imgId = '#imediateImage' + photoTypeId;
                    $(imgId).attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("input[type='file']").change(function () {
            var photoTypeId = $(this).attr("data-target");
            readURL(this, photoTypeId);
        });

</script>

@endsection