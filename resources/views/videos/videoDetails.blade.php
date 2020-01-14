@extends('welcome')
@section('pageBody')
       <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div id="jp_container_1" class="mvdplayer">
                                    <div class="jp-type-single" style="position: relative;">
                                        <div id="jplayer_1" class="jp-jplayer jp-video"></div>
                                        <div class="jp-video-play hidden-xs">
                                            <a class="fa fa-5x text-white fa-play-circle-o"></a>
                                        </div>
                                        <div class="jp-gui">
                                            <div class="jp-play-bar play-progress"></div>
                                            <div class="jp-interface">
                                                <div class="jp-controls">
                                                    <div class="p-l">
                                                        <a class="jp-play"><i class="fa fa-play fa-2x"></i></a>
                                                        <a class="jp-pause"><i class="fa fa-pause fa-2x"></i></a>
                                                    </div>
                                                    <div class="hidden-xs">
                                                        <a class="jp-mute m-l-20" title="mute"><i class="fa fa-volume-up fa-2x"></i></a>
                                                        <a class="jp-unmute m-l-20" title="unmute"><i class="fa fa-volume-off fa-2x"></i></a>
                                                    </div>
                                                    <div class="hidden-xs jp-volume">
                                                        <div class="jp-volume-bar bg-muted m-l-20">
                                                            <div class="jp-volume-bar-value bg-red"></div>
                                                        </div>
                                                    </div>
                                                    <div class="jp-progress">
                                                        <div class="jp-seek-bar">
                                                            <div class="jp-current-time current-time text-white"></div>
                                                            <div class="jp-duration duration text-white"></div>
                                                            <div class="jp-title text-white">
                                                                <ul>
                                                                    <li></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <a class="jp-full-screen" title="full screen"><i class="fa fa-expand fa-2x"></i></a>
                                                        <a class="jp-restore-screen" title="restore screen"><i class="fa fa-compress fa-2x"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="jp-no-solution hide">
                                            <span>Update Required</span> To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
                                        </div>
                                    </div>
                                </div>
                                <h3 class="card-title m-t-30">The Asgardian Hammer By Ground Zero</h3>
                                <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                            </div>
                            <hr class="m-b-0 m-t-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <ul class="list-inline m-b-0">
                                            <li><i class="fa fa-calendar"></i> Oct. 07, 2017</li>
                                            <li><a href="JavaScript:void(0)" class="link"><i class="fa fa-share-alt"></i>  Share</a></li>
                                            <li><i class="fa fa-thumbs-up"></i> 4356</li>
                                            <li><i class="fa fa-thumbs-down"></i> 123</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 text-right">
                                        <span class="ml-auto vd-view">10,267 views</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column -->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">COMING UP NEXT</h5>
                                <div class="row m-t-30">
                                    <div class="col-4"><a href="javascript:void()"><img src="{{asset('images/vd1.jpg')}}" class="img-fluid" alt="alb" /></a></div>
                                    <div class="col-8">
                                        <h5 class="card-title m-b-5">Shut up society</h5><span class="text-muted">Oct 07 | 5:06 | M.Murdock</span></div>
                                </div>
                            </div>
                            <hr>
                            <div class="card-body">
                                <div class="row m-b-20">
                                    <div class="col-4"><a href="javascript:void()"><img src="{{asset('images/vd2.jpg')}}" class="img-fluid" alt="alb" /></a></div>
                                    <div class="col-8">
                                        <h5 class="card-title m-b-5">Shut up society</h5><span class="text-muted">Oct 07 | 5:06 | M.Murdock</span></div>
                                </div>
                                <div class="row m-b-20">
                                    <div class="col-4"><a href="javascript:void()"><img src="{{asset('images/vd3.jpg')}}" alt="alb" class="img-fluid"/></a></div>
                                    <div class="col-8">
                                        <h5 class="card-title m-b-5">Shut up society</h5><span class="text-muted">Oct 07 | 5:06 | M.Murdock</span></div>
                                </div>
                                <div class="row m-b-20">
                                    <div class="col-4"><a href="javascript:void()"><img src="{{asset('images/vd4.jpg')}}" alt="alb" class="img-fluid"/></a></div>
                                    <div class="col-8">
                                        <h5 class="card-title m-b-5">Shut up society</h5><span class="text-muted">Oct 07 | 5:06 | M.Murdock</span></div>
                                </div>
                                <div class="row m-b-20">
                                    <div class="col-4"><a href="javascript:void()"><img src="{{asset('images/vd5.jpg')}}" alt="alb" class="img-fluid" /></a></div>
                                    <div class="col-8">
                                        <h5 class="card-title m-b-5">Shut up society</h5><span class="text-muted">Oct 07 | 5:06 | M.Murdock</span></div>
                                </div>
                                <div class="row m-b-20">
                                    <div class="col-4"><a href="javascript:void()"><img src="{{asset('images/vd6.jpg')}}" alt="alb" class="img-fluid"/></a></div>
                                    <div class="col-8">
                                        <h5 class="card-title m-b-5">Shut up society</h5><span class="text-muted">Oct 07 | 5:06 | M.Murdock</span></div>
                                </div>
                                <div class="row m-b-20">
                                    <div class="col-4"><a href="javascript:void()"><img src="{{asset('images/vd7.jpg')}}" alt="alb" class="img-fluid" /></a></div>
                                    <div class="col-8">
                                        <h5 class="card-title m-b-5">Shut up society</h5><span class="text-muted">Oct 07 | 5:06 | M.Murdock</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
@endsection