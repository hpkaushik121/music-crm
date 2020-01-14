@extends('welcome')
@section('createNew')
<button type="submit" class="btn btn-info m-l-15"><i class="fa fa-plus-circle"></i> Create New</button>
    
@endsection
@section('pageBody')
     <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- .row -->
                <div class="row">
                    <!-- .col -->
                    <div class="col-md-6 col-lg-6 col-xlg-4">
                        <div class="card card-body">
                            <div class="row align-items-center">
                                <div class="col-md-4 col-lg-3 text-center">
                                    <a href="/artists/details?id=someid"><img src="{{asset('images/users/1.jpg')}}" alt="user" class="img-circle img-fluid"></a>
                                </div>
                                <div class="col-md-8 col-lg-9">
                                    <h4 class="card-title m-b-0">Johnathan Doe</h4> <small>Jazz, Metal</small>
                                    <div class="row m-t-10">
                                        <div class="col-md-6 border-right">
                                            <strong>22</strong>
                                            <p>Albums</p>
                                        </div>
                                        <div class="col-md-6">
                                            <strong>15</strong>
                                            <p>Singles</p>
                                        </div>
                                    </div>
                                    <hr class="m-t-0">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <a href="javascript: void(0);" class="text-purple m-r-10"><i class="fa fa-facebook fa-2x"></i></a>
                                            <a href="javascript: void(0);" class="text-blue m-r-10"><i class="fa fa-twitter fa-2x"></i></a>
                                            <a href="javascript: void(0);" class="text-danger m-r-10"><i class="fa fa-soundcloud fa-2x"></i></a>
                                            <a href="javascript: void(0);" class="text-success m-r-10"><i class="fa fa-spotify fa-2x"></i></a>
                                            <a href="javascript: void(0);" class="text-red"><i class="fa fa-youtube fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <!-- .col -->
                    <div class="col-md-6 col-lg-6 col-xlg-4">
                        <div class="card card-body">
                            <div class="row align-items-center">
                                <div class="col-md-4 col-lg-3 text-center">
                                    <a href="/artists/details?id=someid"><img src="{{asset('images/users/2.jpg')}}" alt="user" class="img-circle img-fluid"></a>
                                </div>
                                <div class="col-md-8 col-lg-9">
                                    <h4 class="card-title m-b-0">Johnathan Doe</h4> <small>Jazz, Metal</small>
                                    <div class="row m-t-10">
                                        <div class="col-md-6 border-right">
                                            <strong>22</strong>
                                            <p>Albums</p>
                                        </div>
                                        <div class="col-md-6">
                                            <strong>15</strong>
                                            <p>Singles</p>
                                        </div>
                                    </div>
                                    <hr class="m-t-0">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <a href="javascript: void(0);" class="text-purple m-r-10"><i class="fa fa-facebook fa-2x"></i></a>
                                            <a href="javascript: void(0);" class="text-blue m-r-10"><i class="fa fa-twitter fa-2x"></i></a>
                                            <a href="javascript: void(0);" class="text-danger m-r-10"><i class="fa fa-soundcloud fa-2x"></i></a>
                                            <a href="javascript: void(0);" class="text-success m-r-10"><i class="fa fa-spotify fa-2x"></i></a>
                                            <a href="javascript: void(0);" class="text-red"><i class="fa fa-youtube fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <!-- .col -->
                    <div class="col-md-6 col-lg-6 col-xlg-4">
                        <div class="card card-body">
                            <div class="row align-items-center">
                                <div class="col-md-4 col-lg-3 text-center">
                                    <a href="/artists/details?id=someid"><img src="{{asset('images/users/3.jpg')}}" alt="user" class="img-circle img-fluid"></a>
                                </div>
                                <div class="col-md-8 col-lg-9">
                                    <h4 class="card-title m-b-0">Johnathan Doe</h4> <small>Jazz, Metal</small>
                                    <div class="row m-t-10">
                                        <div class="col-md-6 border-right">
                                            <strong>22</strong>
                                            <p>Albums</p>
                                        </div>
                                        <div class="col-md-6">
                                            <strong>15</strong>
                                            <p>Singles</p>
                                        </div>
                                    </div>
                                    <hr class="m-t-0">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <a href="javascript: void(0);" class="text-purple m-r-10"><i class="fa fa-facebook fa-2x"></i></a>
                                            <a href="javascript: void(0);" class="text-blue m-r-10"><i class="fa fa-twitter fa-2x"></i></a>
                                            <a href="javascript: void(0);" class="text-danger m-r-10"><i class="fa fa-soundcloud fa-2x"></i></a>
                                            <a href="javascript: void(0);" class="text-success m-r-10"><i class="fa fa-spotify fa-2x"></i></a>
                                            <a href="javascript: void(0);" class="text-red"><i class="fa fa-youtube fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <!-- .col -->
                    <div class="col-md-6 col-lg-6 col-xlg-4">
                        <div class="card card-body">
                            <div class="row align-items-center">
                                <div class="col-md-4 col-lg-3 text-center">
                                    <a href="/artists/details?id=someid"><img src="{{asset('images/users/4.jpg')}}" alt="user" class="img-circle img-fluid"></a>
                                </div>
                                <div class="col-md-8 col-lg-9">
                                    <h4 class="card-title m-b-0">Johnathan Doe</h4> <small>Jazz, Metal</small>
                                    <div class="row m-t-10">
                                        <div class="col-md-6 border-right">
                                            <strong>22</strong>
                                            <p>Albums</p>
                                        </div>
                                        <div class="col-md-6">
                                            <strong>15</strong>
                                            <p>Singles</p>
                                        </div>
                                    </div>
                                    <hr class="m-t-0">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <a href="javascript: void(0);" class="text-purple m-r-10"><i class="fa fa-facebook fa-2x"></i></a>
                                            <a href="javascript: void(0);" class="text-blue m-r-10"><i class="fa fa-twitter fa-2x"></i></a>
                                            <a href="javascript: void(0);" class="text-danger m-r-10"><i class="fa fa-soundcloud fa-2x"></i></a>
                                            <a href="javascript: void(0);" class="text-success m-r-10"><i class="fa fa-spotify fa-2x"></i></a>
                                            <a href="javascript: void(0);" class="text-red"><i class="fa fa-youtube fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <!-- .col -->
                    <div class="col-md-6 col-lg-6 col-xlg-4">
                        <div class="card card-body">
                            <div class="row align-items-center">
                                <div class="col-md-4 col-lg-3 text-center">
                                    <a href="/artists/details?id=someid"><img src="{{asset('images/users/5.jpg')}}" alt="user" class="img-circle img-fluid"></a>
                                </div>
                                <div class="col-md-8 col-lg-9">
                                    <h4 class="card-title m-b-0">Johnathan Doe</h4> <small>Jazz, Metal</small>
                                    <div class="row m-t-10">
                                        <div class="col-md-6 border-right">
                                            <strong>22</strong>
                                            <p>Albums</p>
                                        </div>
                                        <div class="col-md-6">
                                            <strong>15</strong>
                                            <p>Singles</p>
                                        </div>
                                    </div>
                                    <hr class="m-t-0">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <a href="javascript: void(0);" class="text-purple m-r-10"><i class="fa fa-facebook fa-2x"></i></a>
                                            <a href="javascript: void(0);" class="text-blue m-r-10"><i class="fa fa-twitter fa-2x"></i></a>
                                            <a href="javascript: void(0);" class="text-danger m-r-10"><i class="fa fa-soundcloud fa-2x"></i></a>
                                            <a href="javascript: void(0);" class="text-success m-r-10"><i class="fa fa-spotify fa-2x"></i></a>
                                            <a href="javascript: void(0);" class="text-red"><i class="fa fa-youtube fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <!-- .col -->
                    <div class="col-md-6 col-lg-6 col-xlg-4">
                        <div class="card card-body">
                            <div class="row align-items-center">
                                <div class="col-md-4 col-lg-3 text-center">
                                    <a href="/artists/details?id=someid"><img src="{{asset('images/users/6.jpg')}}" alt="user" class="img-circle img-fluid"></a>
                                </div>
                                <div class="col-md-8 col-lg-9">
                                    <h4 class="card-title m-b-0">Johnathan Doe</h4> <small>Jazz, Metal</small>
                                    <div class="row m-t-10">
                                        <div class="col-md-6 border-right">
                                            <strong>22</strong>
                                            <p>Albums</p>
                                        </div>
                                        <div class="col-md-6">
                                            <strong>15</strong>
                                            <p>Singles</p>
                                        </div>
                                    </div>
                                    <hr class="m-t-0">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <a href="javascript: void(0);" class="text-purple m-r-10"><i class="fa fa-facebook fa-2x"></i></a>
                                            <a href="javascript: void(0);" class="text-blue m-r-10"><i class="fa fa-twitter fa-2x"></i></a>
                                            <a href="javascript: void(0);" class="text-danger m-r-10"><i class="fa fa-soundcloud fa-2x"></i></a>
                                            <a href="javascript: void(0);" class="text-success m-r-10"><i class="fa fa-spotify fa-2x"></i></a>
                                            <a href="javascript: void(0);" class="text-red"><i class="fa fa-youtube fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <!-- .col -->
                    <div class="col-md-6 col-lg-6 col-xlg-4">
                        <div class="card card-body">
                            <div class="row align-items-center">
                                <div class="col-md-4 col-lg-3 text-center">
                                    <a href="/artists/details?id=someid"><img src="{{asset('images/users/7.jpg')}}" alt="user" class="img-circle img-fluid"></a>
                                </div>
                                <div class="col-md-8 col-lg-9">
                                    <h4 class="card-title m-b-0">Johnathan Doe</h4> <small>Jazz, Metal</small>
                                    <div class="row m-t-10">
                                        <div class="col-md-6 border-right">
                                            <strong>22</strong>
                                            <p>Albums</p>
                                        </div>
                                        <div class="col-md-6">
                                            <strong>15</strong>
                                            <p>Singles</p>
                                        </div>
                                    </div>
                                    <hr class="m-t-0">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <a href="javascript: void(0);" class="text-purple m-r-10"><i class="fa fa-facebook fa-2x"></i></a>
                                            <a href="javascript: void(0);" class="text-blue m-r-10"><i class="fa fa-twitter fa-2x"></i></a>
                                            <a href="javascript: void(0);" class="text-danger m-r-10"><i class="fa fa-soundcloud fa-2x"></i></a>
                                            <a href="javascript: void(0);" class="text-success m-r-10"><i class="fa fa-spotify fa-2x"></i></a>
                                            <a href="javascript: void(0);" class="text-red"><i class="fa fa-youtube fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <!-- .col -->
                    <div class="col-md-6 col-lg-6 col-xlg-4">
                        <div class="card card-body">
                            <div class="row align-items-center">
                                <div class="col-md-4 col-lg-3 text-center">
                                    <a href="/artists/details?id=someid"><img src="{{asset('images/users/8.jpg')}}" alt="user" class="img-circle img-fluid"></a>
                                </div>
                                <div class="col-md-8 col-lg-9">
                                    <h4 class="card-title m-b-0">Johnathan Doe</h4> <small>Jazz, Metal</small>
                                    <div class="row m-t-10">
                                        <div class="col-md-6 border-right">
                                            <strong>22</strong>
                                            <p>Albums</p>
                                        </div>
                                        <div class="col-md-6">
                                            <strong>15</strong>
                                            <p>Singles</p>
                                        </div>
                                    </div>
                                    <hr class="m-t-0">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <a href="javascript: void(0);" class="text-purple m-r-10"><i class="fa fa-facebook fa-2x"></i></a>
                                            <a href="javascript: void(0);" class="text-blue m-r-10"><i class="fa fa-twitter fa-2x"></i></a>
                                            <a href="javascript: void(0);" class="text-danger m-r-10"><i class="fa fa-soundcloud fa-2x"></i></a>
                                            <a href="javascript: void(0);" class="text-success m-r-10"><i class="fa fa-spotify fa-2x"></i></a>
                                            <a href="javascript: void(0);" class="text-red"><i class="fa fa-youtube fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <!-- .col -->
                    <div class="col-md-6 col-lg-6 col-xlg-4">
                        <div class="card card-body">
                            <div class="row align-items-center">
                                <div class="col-md-4 col-lg-3 text-center">
                                    <a href="/artists/details?id=someid"><img src="{{asset('images/users/1.jpg')}}" alt="user" class="img-circle img-fluid"></a>
                                </div>
                                <div class="col-md-8 col-lg-9">
                                    <h4 class="card-title m-b-0">Johnathan Doe</h4> <small>Jazz, Metal</small>
                                    <div class="row m-t-10">
                                        <div class="col-md-6 border-right">
                                            <strong>22</strong>
                                            <p>Albums</p>
                                        </div>
                                        <div class="col-md-6">
                                            <strong>15</strong>
                                            <p>Singles</p>
                                        </div>
                                    </div>
                                    <hr class="m-t-0">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <a href="javascript: void(0);" class="text-purple m-r-10"><i class="fa fa-facebook fa-2x"></i></a>
                                            <a href="javascript: void(0);" class="text-blue m-r-10"><i class="fa fa-twitter fa-2x"></i></a>
                                            <a href="javascript: void(0);" class="text-danger m-r-10"><i class="fa fa-soundcloud fa-2x"></i></a>
                                            <a href="javascript: void(0);" class="text-success m-r-10"><i class="fa fa-spotify fa-2x"></i></a>
                                            <a href="javascript: void(0);" class="text-red"><i class="fa fa-youtube fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <!-- .col -->
                    <div class="col-md-6 col-lg-6 col-xlg-4">
                        <div class="card card-body">
                            <div class="row align-items-center">
                                <div class="col-md-4 col-lg-3 text-center">
                                    <a href="/artists/details?id=someid"><img src="{{asset('images/users/2.jpg')}}" alt="user" class="img-circle img-fluid"></a>
                                </div>
                                <div class="col-md-8 col-lg-9">
                                    <h4 class="card-title m-b-0">Johnathan Doe</h4> <small>Jazz, Metal</small>
                                    <div class="row m-t-10">
                                        <div class="col-md-6 border-right">
                                            <strong>22</strong>
                                            <p>Albums</p>
                                        </div>
                                        <div class="col-md-6">
                                            <strong>15</strong>
                                            <p>Singles</p>
                                        </div>
                                    </div>
                                    <hr class="m-t-0">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <a href="javascript: void(0);" class="text-purple m-r-10"><i class="fa fa-facebook fa-2x"></i></a>
                                            <a href="javascript: void(0);" class="text-blue m-r-10"><i class="fa fa-twitter fa-2x"></i></a>
                                            <a href="javascript: void(0);" class="text-danger m-r-10"><i class="fa fa-soundcloud fa-2x"></i></a>
                                            <a href="javascript: void(0);" class="text-success m-r-10"><i class="fa fa-spotify fa-2x"></i></a>
                                            <a href="javascript: void(0);" class="text-red"><i class="fa fa-youtube fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <!-- .col -->
                    <div class="col-md-6 col-lg-6 col-xlg-4">
                        <div class="card card-body">
                            <div class="row align-items-center">
                                <div class="col-md-4 col-lg-3 text-center">
                                    <a href="/artists/details?id=someid"><img src="{{asset('images/users/3.jpg')}}" alt="user" class="img-circle img-fluid"></a>
                                </div>
                                <div class="col-md-8 col-lg-9">
                                    <h4 class="card-title m-b-0">Johnathan Doe</h4> <small>Jazz, Metal</small>
                                    <div class="row m-t-10">
                                        <div class="col-md-6 border-right">
                                            <strong>22</strong>
                                            <p>Albums</p>
                                        </div>
                                        <div class="col-md-6">
                                            <strong>15</strong>
                                            <p>Singles</p>
                                        </div>
                                    </div>
                                    <hr class="m-t-0">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <a href="javascript: void(0);" class="text-purple m-r-10"><i class="fa fa-facebook fa-2x"></i></a>
                                            <a href="javascript: void(0);" class="text-blue m-r-10"><i class="fa fa-twitter fa-2x"></i></a>
                                            <a href="javascript: void(0);" class="text-danger m-r-10"><i class="fa fa-soundcloud fa-2x"></i></a>
                                            <a href="javascript: void(0);" class="text-success m-r-10"><i class="fa fa-spotify fa-2x"></i></a>
                                            <a href="javascript: void(0);" class="text-red"><i class="fa fa-youtube fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <!-- .col -->
                    <div class="col-md-6 col-lg-6 col-xlg-4">
                        <div class="card card-body">
                            <div class="row align-items-center">
                                <div class="col-md-4 col-lg-3 text-center">
                                    <a href="/artists/details?id=someid"><img src="{{asset('images/users/4.jpg')}}" alt="user" class="img-circle img-fluid"></a>
                                </div>
                                <div class="col-md-8 col-lg-9">
                                    <h4 class="card-title m-b-0">Johnathan Doe</h4> <small>Jazz, Metal</small>
                                    <div class="row m-t-10">
                                        <div class="col-md-6 border-right">
                                            <strong>22</strong>
                                            <p>Albums</p>
                                        </div>
                                        <div class="col-md-6">
                                            <strong>15</strong>
                                            <p>Singles</p>
                                        </div>
                                    </div>
                                    <hr class="m-t-0">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <a href="javascript: void(0);" class="text-purple m-r-10"><i class="fa fa-facebook fa-2x"></i></a>
                                            <a href="javascript: void(0);" class="text-blue m-r-10"><i class="fa fa-twitter fa-2x"></i></a>
                                            <a href="javascript: void(0);" class="text-danger m-r-10"><i class="fa fa-soundcloud fa-2x"></i></a>
                                            <a href="javascript: void(0);" class="text-success m-r-10"><i class="fa fa-spotify fa-2x"></i></a>
                                            <a href="javascript: void(0);" class="text-red"><i class="fa fa-youtube fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
@endsection