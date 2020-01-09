@extends('welcome')
@section('pageBody')
    <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Add geners</h5>
                                <form class="form-material form-horizontal m-t-40">
                                    <div class="form-group row">
                                        <label class="col-md-12" for="example-text">Genre Name</label>
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
                                    <div class="form-group row">
                                        <label class="col-md-12" for="desc">Description</label>
                                        <div class="col-md-12">
                                            <textarea class="form-control" rows="3" id="desc"></textarea>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
                                    <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
@endsection