@extends('layouts.appAdmin')


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
                                    <div class="huge">{{$users = DB::table('users')->count()}}</div>
                                    <div>Regjistrimet!</div>
                                </div>
                            </div>
                        </div>
                       {{--  <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a> --}}
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
                                    <div class="huge">{{$users = DB::table('posts')->count()}}</div>
                                    <div>Artikuj</div>
                                </div>
                            </div>
                        </div>
                        {{-- <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a> --}}
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
                                    <div class="huge">{{$users = DB::table('comments')->count()}}</div>
                                    <div>Komentent</div>
                                </div>
                            </div>
                        </div>
                        {{-- <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a> --}}
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
                       {{--  <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a> --}}
                    </div>
                </div>
            </div>


            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8">
                    <table class="table table-striped table-responsive">
                        <thead>
                            <th>Question</th>
                            <th>-3</th>
                            <th>-2</th>
                            <th>-1</th>
                            <th>0</th>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                        </thead>
                        @foreach($countQuestions as $countquestion)
                        <tr>
                            <td>{{ $countquestion->question_id }}</td>
                            <td>{{ $countquestion->m3 }}</td>
                            <td>{{ $countquestion->m2 }}</td>
                            <td>{{ $countquestion->m1 }}</td>
                            <td>
                                @if( $countquestion->n0 > 10 ) <span style="color: red">{{ $countquestion->n0 }}</span>
                                @else {{ $countquestion->n0 }} 
                                @endif</td>
                            <td>{{ $countquestion->p1 }}</td>
                            <td>{{ $countquestion->p2 }}</td>
                            <td>{{ $countquestion->p3 }}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                <!-- /.col-lg-8 -->
                <div class="col-lg-4">
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
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

@endsection