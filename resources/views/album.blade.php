@extends('welcome')
@section('createNew')
<button type="submit" class="btn btn-info m-l-15"><i class="fa fa-plus-circle"></i> Create New</button>
@endsection
@section('pageBody')
     <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card el-element-overlay">
                            <div class="card-body">
                                <h5 class="card-title">All Albums</h5>
                                <div class="row m-t-30">
                                    <!-- column -->
                                    <div class="col-lg-2 col-md-3">
                                        <div class="el-card-item">
                                            <div class="el-card-avatar el-overlay-1"> <img src="{{asset('images/alb1.jpg')}}" alt="user" />
                                                <div class="el-overlay">
                                                    <ul class="el-info">
                                                        <li><a class="img-circle font-20" href="{{Request::path()}}/details-Album?id=someid"><i class="ti-control-play"></i></a></li>
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
                                                        <li><a class="img-circle font-20" href="{{Request::path()}}/details-Album?id=someid"><i class="ti-control-play"></i></a></li>
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
                                                        <li><a class="img-circle font-20" href="{{Request::path()}}/details-Album?id=someid"><i class="ti-control-play"></i></a></li>
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
                                                        <li><a class="img-circle font-20" href="{{Request::path()}}/details-Album?id=someid"><i class="ti-control-play"></i></a></li>
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
                                                        <li><a class="img-circle font-20" href="{{Request::path()}}/details-Album?id=someid"><i class="ti-control-play"></i></a></li>
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
                                                        <li><a class="img-circle font-20" href="{{Request::path()}}/details-Album?id=someid"><i class="ti-control-play"></i></a></li>
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
                                                        <li><a class="img-circle font-20" href="{{Request::path()}}/details-Album?id=someid"><i class="ti-control-play"></i></a></li>
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
                                                        <li><a class="img-circle font-20" href="{{Request::path()}}/details-Album?id=someid"><i class="ti-control-play"></i></a></li>
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
                                                        <li><a class="img-circle font-20" href="{{Request::path()}}/details-Album?id=someid"><i class="ti-control-play"></i></a></li>
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
                                                        <li><a class="img-circle font-20" href="{{Request::path()}}/details-Album?id=someid"><i class="ti-control-play"></i></a></li>
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
                                                        <li><a class="img-circle font-20" href="{{Request::path()}}/details-Album?id=someid"><i class="ti-control-play"></i></a></li>
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
                                                        <li><a class="img-circle font-20" href="{{Request::path()}}/details-Album?id=someid"><i class="ti-control-play"></i></a></li>
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
                                                        <li><a class="img-circle font-20" href="{{Request::path()}}/details-Album?id=someid"><i class="ti-control-play"></i></a></li>
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
                                                        <li><a class="img-circle font-20" href="{{Request::path()}}/details-Album?id=someid"><i class="ti-control-play"></i></a></li>
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
                                                        <li><a class="img-circle font-20" href="{{Request::path()}}/details-Album?id=someid"><i class="ti-control-play"></i></a></li>
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
                                                        <li><a class="img-circle font-20" href="{{Request::path()}}/details-Album?id=someid"><i class="ti-control-play"></i></a></li>
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
                                                        <li><a class="img-circle font-20" href="{{Request::path()}}/details-Album?id=someid"><i class="ti-control-play"></i></a></li>
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
                                                        <li><a class="img-circle font-20" href="{{Request::path()}}/details-Album?id=someid"><i class="ti-control-play"></i></a></li>
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
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
@endsection