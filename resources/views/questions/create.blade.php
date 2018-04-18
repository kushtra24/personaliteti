@extends('layouts.appAdmin')


@section('dashboard')
 <div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Shto Pyetje</h1>
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

                     <form  method="POST" action="{{ action('QuestionsController@store') }}" >
                      {!! csrf_field() !!}
                       
                        <div class="form-group">
                            <input type="text" class="form-control" name="pyetja" placeholder="Pyetja" required>
                        </div>

                        <div class="form-group">
                            <div class="form-group">
                                <select class="form-control" name="purpose" required>
                                    <option value=""> Teston</option>
                                    <option value="IntroExtro">Introvert / Extrovert</option>
                                    <option value="intuitionSensing">Intuition / Sensing</option>
                                    <option value="feelingThinking">Feeling / Thinking</option>
                                    <option value="jundgingPerciving">Judging / Perciving</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                        <button type="submit" class="btn btn-primary cleftButton" name="submit" id="submit"><i class="fa fa-save"></i> &nbsp; Ruaje</button>
                        </div>

                     </form>
                    
                </div>
                <!-- /.col-lg-8 -->
            </div>
            <!-- /.row -->
</div>
<!-- /#page-wrapper -->

@endsection