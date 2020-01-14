@extends('welcome')
@section('createNew')
<button type="submit" class="btn btn-info m-l-15"><i class="fa fa-plus-circle"></i> Create New</button>
    
@endsection
@section('pageBody')
        <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-lg-9 col-xlg-10 col-md-8">
                        <div class="card el-element-overlay">
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="all" role="tabpanel">
                                <div class="card-body">
                                <div class="card-title row">
                                    <h5 class="card-title col-md-5">All Geners</h5>
                                    <h5 class="card-title col-md-7 d-flex justify-content-end align-items-center"><button type="submit" class="btn btn-danger m-l-15"><i class="fa fa-trash-o"></i> Delete Genre</button></h5>
                                </div>
                                   
                                    <div class="row m-t-30">
                                        <!-- column -->
                                        <div class="col-lg-2 col-md-3">
                                            <div class="el-card-item">
                                                <div class="el-card-avatar el-overlay-1"> <img src="{{asset('images/alb1.jpg')}}" alt="user" />
                                                    <div class="el-overlay">
                                                        <ul class="el-info">
                                                            <li><a class="img-circle font-20" href="music-geners.html"><i class="ti-control-play"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="el-card-content text-left">
                                                    <h5 class="card-title m-b-0">The Fallen</h5>
                                                    <small class="text-muted">Sourcerer</small>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- column -->
                                        <div class="col-lg-2 col-md-3">
                                            <div class="el-card-item">
                                                <div class="el-card-avatar el-overlay-1"> <img src="{{asset('images/alb2.jpg')}}" alt="user" />
                                                    <div class="el-overlay">
                                                        <ul class="el-info">
                                                            <li><a class="img-circle font-20" href="music-geners.html"><i class="ti-control-play"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="el-card-content text-left">
                                                    <h5 class="card-title m-b-0">The Phobia</h5>
                                                    <small class="text-muted">Sourcerer</small>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- column -->
                                        <div class="col-lg-2 col-md-3">
                                            <div class="el-card-item">
                                                <div class="el-card-avatar el-overlay-1"> <img src="{{asset('images/alb3.jpg')}}" alt="user" />
                                                    <div class="el-overlay">
                                                        <ul class="el-info">
                                                            <li><a class="img-circle font-20" href="music-geners.html"><i class="ti-control-play"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="el-card-content text-left">
                                                    <h5 class="card-title m-b-0">Area 51</h5>
                                                    <small class="text-muted">Sourcerer</small>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- column -->
                                        <div class="col-lg-2 col-md-3">
                                            <div class="el-card-item">
                                                <div class="el-card-avatar el-overlay-1"> <img src="{{asset('images/alb4.jpg')}}" alt="user" />
                                                    <div class="el-overlay">
                                                        <ul class="el-info">
                                                            <li><a class="img-circle font-20" href="music-geners.html"><i class="ti-control-play"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="el-card-content text-left">
                                                    <h5 class="card-title m-b-0">Pathetic</h5>
                                                    <small class="text-muted">Sourcerer</small>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- column -->
                                        <div class="col-lg-2 col-md-3">
                                            <div class="el-card-item">
                                                <div class="el-card-avatar el-overlay-1"> <img src="{{asset('images/alb5.jpg')}}" alt="user" />
                                                    <div class="el-overlay">
                                                        <ul class="el-info">
                                                            <li><a class="img-circle font-20" href="music-geners.html"><i class="ti-control-play"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="el-card-content text-left">
                                                    <h5 class="card-title m-b-0">Ding Dong</h5>
                                                    <small class="text-muted">Sourcerer</small>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- column -->
                                        <div class="col-lg-2 col-md-3">
                                            <div class="el-card-item">
                                                <div class="el-card-avatar el-overlay-1"> <img src="{{asset('images/alb6.jpg')}}" alt="user" />
                                                    <div class="el-overlay">
                                                        <ul class="el-info">
                                                            <li><a class="img-circle font-20" href="music-geners.html"><i class="ti-control-play"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="el-card-content text-left">
                                                    <h5 class="card-title m-b-0">Risen Up</h5>
                                                    <small class="text-muted">Sourcerer</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- column -->
                                        <div class="col-lg-2 col-md-3">
                                            <div class="el-card-item">
                                                <div class="el-card-avatar el-overlay-1"> <img src="{{asset('images/alb6.jpg')}}" alt="user" />
                                                    <div class="el-overlay">
                                                        <ul class="el-info">
                                                            <li><a class="img-circle font-20" href="music-geners.html"><i class="ti-control-play"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="el-card-content text-left">
                                                    <h5 class="card-title m-b-0">The Fallen</h5>
                                                    <small class="text-muted">Sourcerer</small>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- column -->
                                        <div class="col-lg-2 col-md-3">
                                            <div class="el-card-item">
                                                <div class="el-card-avatar el-overlay-1"> <img src="{{asset('images/alb5.jpg')}}" alt="user" />
                                                    <div class="el-overlay">
                                                        <ul class="el-info">
                                                            <li><a class="img-circle font-20" href="music-geners.html"><i class="ti-control-play"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="el-card-content text-left">
                                                    <h5 class="card-title m-b-0">The Phobia</h5>
                                                    <small class="text-muted">Sourcerer</small>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- column -->
                                        <div class="col-lg-2 col-md-3">
                                            <div class="el-card-item">
                                                <div class="el-card-avatar el-overlay-1"> <img src="{{asset('images/alb4.jpg')}}" alt="user" />
                                                    <div class="el-overlay">
                                                        <ul class="el-info">
                                                            <li><a class="img-circle font-20" href="music-geners.html"><i class="ti-control-play"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="el-card-content text-left">
                                                    <h5 class="card-title m-b-0">Area 51</h5>
                                                    <small class="text-muted">Sourcerer</small>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- column -->
                                        <div class="col-lg-2 col-md-3">
                                            <div class="el-card-item">
                                                <div class="el-card-avatar el-overlay-1"> <img src="{{asset('images/alb3.jpg')}}" alt="user" />
                                                    <div class="el-overlay">
                                                        <ul class="el-info">
                                                            <li><a class="img-circle font-20" href="music-geners.html"><i class="ti-control-play"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="el-card-content text-left">
                                                    <h5 class="card-title m-b-0">Pathetic</h5>
                                                    <small class="text-muted">Sourcerer</small>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- column -->
                                        <div class="col-lg-2 col-md-3">
                                            <div class="el-card-item">
                                                <div class="el-card-avatar el-overlay-1"> <img src="{{asset('images/alb2.jpg')}}" alt="user" />
                                                    <div class="el-overlay">
                                                        <ul class="el-info">
                                                            <li><a class="img-circle font-20" href="music-geners.html"><i class="ti-control-play"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="el-card-content text-left">
                                                    <h5 class="card-title m-b-0">Ding Dong</h5>
                                                    <small class="text-muted">Sourcerer</small>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- column -->
                                        <div class="col-lg-2 col-md-3">
                                            <div class="el-card-item">
                                                <div class="el-card-avatar el-overlay-1"> <img src="{{asset('images/alb1.jpg')}}" alt="user" />
                                                    <div class="el-overlay">
                                                        <ul class="el-info">
                                                            <li><a class="img-circle font-20" href="music-geners.html"><i class="ti-control-play"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="el-card-content text-left">
                                                    <h5 class="card-title m-b-0">Risen Up</h5>
                                                    <small class="text-muted">Sourcerer</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- column -->
                                        <div class="col-lg-2 col-md-3">
                                            <div class="el-card-item">
                                                <div class="el-card-avatar el-overlay-1"> <img src="{{asset('images/alb1.jpg')}}" alt="user" />
                                                    <div class="el-overlay">
                                                        <ul class="el-info">
                                                            <li><a class="img-circle font-20" href="music-geners.html"><i class="ti-control-play"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="el-card-content text-left">
                                                    <h5 class="card-title m-b-0">The Fallen</h5>
                                                    <small class="text-muted">Sourcerer</small>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- column -->
                                        <div class="col-lg-2 col-md-3">
                                            <div class="el-card-item">
                                                <div class="el-card-avatar el-overlay-1"> <img src="{{asset('images/alb2.jpg')}}" alt="user" />
                                                    <div class="el-overlay">
                                                        <ul class="el-info">
                                                            <li><a class="img-circle font-20" href="music-geners.html"><i class="ti-control-play"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="el-card-content text-left">
                                                    <h5 class="card-title m-b-0">The Phobia</h5>
                                                    <small class="text-muted">Sourcerer</small>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- column -->
                                        <div class="col-lg-2 col-md-3">
                                            <div class="el-card-item">
                                                <div class="el-card-avatar el-overlay-1"> <img src="{{asset('images/alb3.jpg')}}" alt="user" />
                                                    <div class="el-overlay">
                                                        <ul class="el-info">
                                                            <li><a class="img-circle font-20" href="music-geners.html"><i class="ti-control-play"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="el-card-content text-left">
                                                    <h5 class="card-title m-b-0">Area 51</h5>
                                                    <small class="text-muted">Sourcerer</small>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- column -->
                                        <div class="col-lg-2 col-md-3">
                                            <div class="el-card-item">
                                                <div class="el-card-avatar el-overlay-1"> <img src="{{asset('images/alb4.jpg')}}" alt="user" />
                                                    <div class="el-overlay">
                                                        <ul class="el-info">
                                                            <li><a class="img-circle font-20" href="music-geners.html"><i class="ti-control-play"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="el-card-content text-left">
                                                    <h5 class="card-title m-b-0">Pathetic</h5>
                                                    <small class="text-muted">Sourcerer</small>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- column -->
                                        <div class="col-lg-2 col-md-3">
                                            <div class="el-card-item">
                                                <div class="el-card-avatar el-overlay-1"> <img src="{{asset('images/alb5.jpg')}}" alt="user" />
                                                    <div class="el-overlay">
                                                        <ul class="el-info">
                                                            <li><a class="img-circle font-20" href="music-geners.html"><i class="ti-control-play"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="el-card-content text-left">
                                                    <h5 class="card-title m-b-0">Ding Dong</h5>
                                                    <small class="text-muted">Sourcerer</small>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- column -->
                                        <div class="col-lg-2 col-md-3">
                                            <div class="el-card-item">
                                                <div class="el-card-avatar el-overlay-1"> <img src="{{asset('images/alb6.jpg')}}" alt="user" />
                                                    <div class="el-overlay">
                                                        <ul class="el-info">
                                                            <li><a class="img-circle font-20" href="music-geners.html"><i class="ti-control-play"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="el-card-content text-left">
                                                    <h5 class="card-title m-b-0">Risen Up</h5>
                                                    <small class="text-muted">Sourcerer</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    </div>
                                    <div class="tab-pane p-20" id="edm" role="tabpanel">
                                     
                                            <div class="card-title row">
                                                <h5 class="card-title col-md-5">EDM</h5>
                                                <h5 class="card-title col-md-7 d-flex justify-content-end align-items-center"><button type="submit" class="btn btn-danger m-l-15"><i class="fa fa-trash-o"></i> Delete Genre</button></h5>
                                            </div>
                                        <div class="row m-t-30">
                                            <!-- column -->
                                            <div class="col-lg-2 col-md-3">
                                                <div class="el-card-item">
                                                    <div class="el-card-avatar el-overlay-1"> <img src="{{asset('images/alb1.jpg')}}" alt="user" />
                                                        <div class="el-overlay">
                                                            <ul class="el-info">
                                                                <li><a class="img-circle font-20" href="music-geners.html"><i class="ti-control-play"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="el-card-content text-left">
                                                        <h5 class="card-title m-b-0">The Fallen</h5>
                                                        <small class="text-muted">Sourcerer</small>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                            </div>
                                           
                                       
                                        </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xlg-2 col-md-4">
                        <div class="list-group">
                            <a class="list-group-item active" data-toggle="tab" href="#all" role="tab" class="list-group-item">All</a>
                            <a class="list-group-item" data-toggle="tab" href="#edm" role="tab">edm</a>
                            
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
@endsection