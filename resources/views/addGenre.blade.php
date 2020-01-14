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
                                <h5 class="card-title">Add geners</h5>
                                <form id ="genreForm" class="needs-validation form-horizontal m-t-40" novalidate>
                                    <div class="form-group row">
                                        <label class="col-md-12" for="genreName">Genre Name</label>
                                        <div class="col-md-12">
                                            <input type="text" autocomplete="off" id="genreName" name="genreName" class="form-control" required>
                                        </div>
                                    </div>
                                <input type="hidden" autocomplete="off" id="type" value="{{Utilities::$genreType}}" name="type" class="form-control" required/>
                                    <div class="form-group row">
                                        <label class="col-md-12" for="desc">Description</label>
                                        <div class="col-md-12">
                                            <textarea class="form-control" autocomplete="off" rows="3" id="desc"></textarea>
                                           
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
                                    <a type="submit" href="/{{str_replace('/add','',Request::path())}}" class="btn btn-inverse waves-effect waves-light">Cancel</a>
                                </form>
                                <script>
                                    // Example starter JavaScript for disabling form submissions if there are invalid fields
                                    (function() {
                                        'use strict';
                                        window.addEventListener('load', function() {
                                            // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                            var forms = document.getElementsByClassName('needs-validation');
                                            // Loop over them and prevent submission
                                            var validation = Array.prototype.filter.call(forms, function(form) {
                                                form.addEventListener('submit', function(event) {
                                                    event.preventDefault();
                                                        event.stopPropagation();
                                                    if (form.checkValidity() === true) {
                                                        var genreName=document.getElementsByName("genreName")[0].value;
                                                        var type=document.getElementsByName("type")[0].value;
                                                        ConfirmFormSubmission(genreName+" as genre",type);
                                                    }
                                                    form.classList.add('was-validated');
                                                }, false);
                                            });
                                        }, false);
                                    })();
                                    </script>
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

@endsection