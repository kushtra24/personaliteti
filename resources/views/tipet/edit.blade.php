@extends('layouts.appAdmin')


@section('dashboard')
 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edito Tipet e personalitetit</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8">
                    
<form method="POST" action="" class="form-horizontal" enctype="multipart/form-data" >
  {{ csrf_field() }}
        <div class="patients-overview">
            <p style=" color: orange; text-align: right;"><strong>Notice: </strong>All Orange fields are mandatory</p>

    <div class="form-group">
      <label for="FileNo" class="col-sm-3 control-label">Kodi</label>
        <div class="col-sm-9">

      <input type="text" class="form-control" name="lastName" id="LastName" value="{{ $tipi->type }}" placeholder="Kodi">
       </div>
    </div>

    <div class="form-group">
      <label for="FileNo" class="col-sm-3 control-label">Emri</label>
        <div class="col-sm-9">

      <input type="text" class="form-control" name="lastName" id="LastName" value="{{ $tipi->name }}" placeholder="Emri">
       </div>
    </div>

    <div class="form-group">
      <label for="FileNo" class="col-sm-3 control-label">Pershkrimi</label>
        <div class="col-sm-9">

      <textarea class="form-control" rows="3">{{ $tipi->description }}</textarea>
       </div>
    </div>


</div><!-- patients-overview -->



               </div>
               <div class="col-xs-12">
                <button type="submit" class="btn btn-primary pull-right">Submit Change</button>
               </div>
        </div>

</form>
                    
                </div>
                <!-- /.col-lg-8 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

@endsection