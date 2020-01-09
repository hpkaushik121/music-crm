<!DOCTYPE html>
<!-- saved from url=(0051)http://eliteadmin.themedesigner.in/demos/bt4/music/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="http://eliteadmin.themedesigner.in/demos/bt4/assets/images/favicon.png">
    <title>Elite Admin Template - The Ultimate Multipurpose admin template</title>
    <link rel="stylesheet" href="{{asset('css/jplayer.flat.css')}}" type="text/css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{asset('css/login-register-lock.css')}}" rel="stylesheet">
    <link href="{{asset('css/themify-icons.css')}}" rel="stylesheet">
    <link href="{{asset('css/ie7.css')}}" rel="stylesheet">

    <link href="{{asset('css/style.min.css')}}" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<style>
    @font-face {
	font-family: 'themify';
	src:url('fonts/themify.eot?-fvbane');
	src:url('fonts/themify.eot?#iefix-fvbane') format('embedded-opentype'),
		url('fonts/themify.woff?-fvbane') format('woff'),
		url('fonts/themify.ttf?-fvbane') format('truetype'),
		url('fonts/themify.svg?-fvbane#themify') format('svg');
	font-weight: normal;
	font-style: normal;
}

[class^="ti-"], [class*=" ti-"] {
	font-family: 'themify';
	speak: none;
	font-style: normal;
	font-weight: normal;
	font-variant: normal;
	text-transform: none;
	line-height: 1;

	/* Better Font Rendering =========== */
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
}
    </style>
<body >
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Elite admin</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->

    @yield('body')
    
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!--Custom JavaScript -->

    <script>
     
      $(window).on('load',function() {
          
        $(".preloader").fadeOut();
          });
          
          $(window).bind('beforeunload',function(){
            $(".preloader").fadeIn();
          });
      
          
              </script>
              
    <script type="text/javascript">
        $(function() {
            $(".preloader").fadeOut();
        });
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        });
        // ============================================================== 
        // Login and Recover Password 
        // ============================================================== 
        $('#to-recover').on("click", function() {
            $("#loginform").slideUp();
            $("#recoverform").fadeIn();
        });
    </script>
    
</body></html>