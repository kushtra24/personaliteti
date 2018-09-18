@extends('layouts.appAdmin')

@section('style')
<style>
    .section-block{
        background-color: #f6fcff;
        border: 2px solid #ccc;
        padding: 15px;
        font-weight: bold;
    }
    h4{
        font-weight: 700;
    }
</style>
@endsection

@section('dashboard')
 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                    
                </div>
                <!-- /.col-lg-12 -->
            </div>

            
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fab fa-wpforms fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{ $registerdUsers }}</div>
                                    <div>Regjistrimet!</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="far fa-newspaper fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{ $writtenPosts }}</div>
                                    <div>Artikuj</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fas fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{ $comments }}</div>
                                    <div>Komentent</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{ $counter }}</div>
                                    <div>Testet e bëra</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- /.row -->

            <div class="row">
                <div class="col-md-6">
                    <div class="section-block">
                        <h4>Kërko përgjigjet e dhëna në bazë të ID</h4>
                        <hr>
                        <form  method="GET" action="{{ action('AdminController@index') }}" >
                        
                            <div class="form-group">
                                <input type="text" class="form-control" name="testee" placeholder="Numri i testit" required>
                            </div>
                            
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary" name="submit" id="submit"><i class="fa fa-save"></i> &nbsp; Ruaje</button>
                            </div>

                        </form>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="section-block">
                        <table class="table table-striped table-responsive">
                            <thead>
                                <th>Pyetja</th>
                                <th>Përgjigja</th>
                            </thead>
                            @forelse($answers as $answer)
                            <tr>
                                <td>{{ $answer->question->question }}</td>
                                <td>{{ $answer->value }}</td>
                            </tr>
                            @empty
                            <tr><td></td></tr>
                            @endforelse
                        </table>
                    </div>
                </div>
                
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-block">
                        <h4>Të gjitha pyetjet dhe pergjigjet</h4>
                        <hr>
                        <table class="table table-striped table-responsive">
                            <thead>
                                <th>Pyetja</th>
                                <th>-3</th>
                                <th>-2</th>
                                <th>-1</th>
                                <th>0</th>
                                <th>1</th>
                                <th>2</th>
                                <th>3</th>
                            </thead>
                            @foreach($questions as $question)
                            <tr>
                                <td>{{ $question->question }}</td>
                                <td>{{ $question->answer_minus_3 }}</td>
                                <td>{{ $question->answer_minus_2 }}</td>
                                <td>{{ $question->answer_minus_1 }}</td>
                                <td {{ $question->answer_0 > 10 ? "style=color:red" : '' }}>{{ $question->answer_0 }}</td>
                                <td>{{ $question->answer_1 }}</td>
                                <td>{{ $question->answer_2 }}</td>
                                <td>{{ $question->answer_3 }}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
                <!-- /.col-lg-8 -->
                <div class="col-lg-4">
                    <div class="section-block">
                        <h4>Resultatet e pergjithshme deri me tani</h4>
                        <hr>
                        <table class="table table-striped table-responsive">
                            <thead>
                                <th>Kodi</th>
                                <th>Numri</th>
                            </thead>
                            @foreach($countResults as $countResult)
                            <tr>
                                <td>{{ $countResult->finaltype }}</td>
                                <td>{{ $countResult->Numri }}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

@endsection