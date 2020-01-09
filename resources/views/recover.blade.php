@extends('log_reg')
@section('body')
<section id="wrapper">
    <section id="wrapper" class="login-register login-sidebar" style="background-image:url({{asset('images/login-register.jpg')}}">
        <div class="login-box card">
            <div class="card-body">
                <form class="form-horizontal form-material" id="loginform" action="index.html">
                    <h3 class="box-title m-b-20">Recover Password</h3>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" required="" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" required="" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group text-center p-b-10">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
                        </div>
                    </div>
                    <div class="form-group m-b-0">
                        <div class="col-sm-12 text-center">
                            <p>Want to Retry? <a href="/" class="text-info m-l-5"><b>Sign In</b></a></p>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>
@endsection