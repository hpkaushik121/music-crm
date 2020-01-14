@extends('welcome')
@section('css')
<link href="{{asset('css/file-upload.css')}}" rel="stylesheet">
<link href="{{asset('css/sweetalert2.min.css')}}" rel="stylesheet">
@endsection
@section('pageBody')
    <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Add Song</h5>
                                <form id="audioForm" class="form-material form-horizontal m-t-40">
                                    <div class="form-group row">
                                        <label class="col-md-12" for="example-text">Song Name</label>
                                        <div class="col-md-12">
                                            <input type="text" id="example-text" name="example-text" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-12">Genre</label>
                                        <div class="col-sm-12">
                                            <select class="form-control"  multiple="multiple" data-placeholder="Choose">
                                                <option>Select Genre</option>
                                                <option>Hip-Hop</option>
                                                <option>EDM</option>
                                            </select>
                                        </div>
                                    </div>
                                <div class="form-group row">
                                    <label class="col-sm-12">Singer</label>
                                    <div class="col-sm-12">
                                        <select class="form-control"  multiple="multiple" data-placeholder="Choose">
                                            <option>Select Singer</option>
                                            <option>Hip-Hop</option>
                                            <option>EDM</option>
                                        </select>
                                    </div>
                                </div>
                                    <div class="form-group row">
                                        <label class="col-md-12" for="example-text">Album Name</label>
                                        <div class="col-sm-12">
                                            <select class="form-control"  multiple="multiple" data-placeholder="Choose">
                                                <option>Select Singer</option>
                                                <option>Hip-Hop</option>
                                                <option>EDM</option>
                                            </select>
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
                                            <label class="col-sm-12">Audio Cover</label>
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
                                    <button type="button" id="sa-confirm" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
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

<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script type="text/javascript" src="{{asset('js/jasny-bootstrap.js')}}"></script>
<script type="text/javascript" src="{{asset('js/sweetalert2.all.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/sweet-alert.init.js')}}"></script>
<script>

$("#sa-confirm").click(function () {
    alert("Asdfasf");
});
   
</script>

@endsection