
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>TEST</title>

  <!-- Bootstrap core CSS -->

  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/bootstrap-social.css') }}" rel="stylesheet">

  <link href="{{ asset('fonts/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  @yield('style')

  <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body class="nav-md">
  <div class="container body">


      <!-- page content -->
      <div class="right_col" role="main">

        @yield('content')

      </div>
      <!-- /page content -->

      　
  </div>

  <script src="{{ asset('js/bootstrap.min.js') }}"></script>

  <!-- bootstrap progress js -->
  <script src="{{ asset('js/progressbar/bootstrap-progressbar.min.js') }}"></script>
  <script src="{{ asset('js/nicescroll/jquery.nicescroll.min.js') }}"></script>

  <script src="{{ asset('js/custom.js') }}"></script>

  <!-- pace -->
  <script src="{{ asset('js/pace/pace.min.js') }}"></script>
  <!-- /footer content -->
  <!-- JavaScripts -->
  @yield('script')
</body>
</html>
