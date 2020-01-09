@extends('welcome')
@section('pageBody')
     <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Interactive demo</h4>
                                <h6 class="card-subtitle">Just put this to any tag <code>data-toggle="tooltip" title="Default tooltip"</code></h6>
                                <div class="button-box">
                                    <button type="button" class="btn btn-secondary btn-outline" data-toggle="tooltip" data-placement="top" title="Tooltip on top">Tooltip on top</button>
                                    <button type="button" class="btn btn-secondary btn-outline" data-toggle="tooltip" data-placement="right" title="" data-original-title="Tooltip on right">Tooltip on right</button>
                                    <button type="button" class="btn btn-secondary btn-outline" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tooltip on bottom">Tooltip on bottom</button>
                                    <button type="button" class="btn btn-secondary btn-outline" data-toggle="tooltip" data-placement="left" title="" data-original-title="Tooltip on left">Tooltip on left</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Interactive demo</h4>
                                <h6 class="card-subtitle">Just put this to any tag <code>data-container="body" title="Popover title" data-toggle="popover" data-placement="top" data-content="..."</code></h6>
                                <div class="button-box">
                                    <button type="button" class="btn btn-secondary" data-container="body" title="Popover title" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                        Popover on top
                                    </button>
                                    <button type="button" class="btn btn-secondary" data-container="body" title="Popover title" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                        Popover on right
                                    </button>
                                    <button type="button" class="btn btn-secondary" data-container="body" title="Popover title" data-toggle="popover" data-placement="bottom" data-content="Vivamus
                                        sagittis lacus vel augue laoreet rutrum faucibus.">
                                        Popover on bottom
                                    </button>
                                    <button type="button" class="btn btn-secondary" data-container="body" title="Popover title" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                        Popover on left
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
@endsection