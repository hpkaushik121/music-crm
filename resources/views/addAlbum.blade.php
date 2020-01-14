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
                                <h5 class="card-title">ALBUM DETAILS</h5>
                                <form class="form-material form-horizontal m-t-30">
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-md-12" for="albname">Album Name</label>
                                            <div class="col-md-12">
                                                <input type="text" id="albname" name="albname" class="form-control" placeholder="enter album name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-md-12" for="albartist">Album Artist</label>
                                            <div class="col-md-12">
                                                <input type="text" id="albartist" name="albartist" class="form-control" placeholder="enter artist name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-md-12" for="ardate">Album Release Date</label>
                                            <div class="col-md-12">
                                                <input type="text" id="ardate" name="ardate" class="form-control mydatepicker" placeholder="enter date here">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-md-12" for="duration">Album Duration</label>
                                            <div class="col-md-12">
                                                <input type="text" id="duration" name="duration" class="form-control" placeholder="total time of the album">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-12">Album Cover</label>
                                            <div class="col-sm-12">
                                                <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                    <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
                                                    <input type="file" name="..."> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-12">Album Genre</label>
                                            <div class="col-sm-12">
                                                <select class="form-control">
                                                    <option>Select Genre</option>
                                                    <option>Edm</option>
                                                    <option>Rock</option>
                                                    <option>Indie Pop</option>
                                                    <option>Instrumental</option>
                                                    <option>Metal</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-12">Album Songs</label>
                                            <div class="col-sm-12">
                                                <select multiple="" class="form-control">
                                                    <option>Song of ice and fire</option>
                                                    <option>no love</option>
                                                    <option>a sky full of clouds</option>
                                                    <option>sensible truth</option>
                                                    <option>cyclone</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-md-12">Description</label>
                                            <div class="col-md-12">
                                                <textarea class="form-control" rows="3"></textarea>
                                            </div>
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