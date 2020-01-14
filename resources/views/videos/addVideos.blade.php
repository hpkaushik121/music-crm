@extends('welcome')
@section('css')
<link href="{{asset('css/file-upload.css')}}" rel="stylesheet">
@endsection
@section('pageBody')
    <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Add Video</h5>
                                <form class="form-material form-horizontal m-t-40">
                                    <div class="form-group row">
                                        <label class="col-md-12" for="example-text">Genre Name</label>
                                        <div class="col-md-12">
                                            <input type="text" id="example-text" name="example-text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-12" for="example-text">Artists Name</label>
                                        <div class="col-md-12">
                                            <input type="text" id="example-text" name="example-text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-12" for="example-text">Album Name</label>
                                        <div class="col-md-12">
                                            <input type="text" id="example-text" name="example-text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-12" for="slug">Url Slug</label>
                                        <div class="col-md-12">
                                            <input type="text" id="slug" name="slug" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-12">Video Cover</label>
                                            <div class="col-sm-12">
                                                <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                    <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
                                                    <input type="file" name="..."> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-12" for="desc">Description</label>
                                        <div class="col-md-12">
                                            <textarea class="form-control" rows="3" id="desc"></textarea>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
                                    <a type="submit" href="/{{str_replace('/add','',Request::path())}}" class="btn btn-inverse waves-effect waves-light">Cancel</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
@endsection
@section('js')
<script type="text/javascript" src="{{asset('js/jasny-bootstrap.js')}}"></script>
@endsection