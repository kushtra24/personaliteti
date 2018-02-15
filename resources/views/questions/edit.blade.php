@extends('layouts.appAdmin')


@section('dashboard')
 <div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Pyetjet</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <!-- /.row -->
            <div class="row">
                <div class="col-lg-4">

                        @if(session()->has('message.level'))
                            <div class="alert alert-{{ session('message.level') }}"> 
                            {!! session('message.content') !!}
                            </div>
                        @endif
                        
                     <form  method="POST" action="{{ route('QuestionsController.update', [$questions->id]) }}" >
                      {!! csrf_field() !!}
                       
                        <div class="form-group">
                            <input type="text" class="form-control" name="pyetja" value="{{ $questions->question }}" required>
                        </div>

                        <div class="form-group">
                            <div class="form-group">
                                <select class="form-control" name="purpose" required >
                                    <option value=""> Teston</option>
                                    <option value="IntroExtro" {{ $questions->purpose == "IntroExtro" ? 'selected="selected"' : '' }}>Introvert / Extrovert</option>
                                    <option value="intuitionSensing" {{ $questions->purpose == "intuitionSensing" ? 'selected="selected"' : '' }}>Intuition / Sensing</option>
                                    <option value="feelingThinking" {{ $questions->purpose == "feelingThinking" ? 'selected="selected"' : '' }}>Feeling / Thinking</option>
                                    <option value="jundgingPerciving" {{ $questions->purpose == "jundgingPerciving" ? 'selected="selected"' : '' }}>Judging / Perciving</option>
                                    <p>{{$questions->purpose}}</p>
                                </select>
                            </div>
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