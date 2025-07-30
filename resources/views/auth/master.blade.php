<!doctype html>
<html lang="en" class="light-theme">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="{{asset('dashboard_asset/assets/images/favicon-32x32.png')}}" type="image/png" />
  <!-- Bootstrap CSS -->
  <link href="{{asset('dashboard_asset/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{asset('dashboard_asset/assets/css/bootstrap-extended.css')}}" rel="stylesheet" />
  <link href="{{asset('dashboard_asset/assets/css/style.css')}}" rel="stylesheet" />
  <link href="{{asset('dashboard_asset/assets/css/icons.css')}}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <!-- loader-->
	<link href="{{asset('dashboard_asset/assets/css/pace.min.css')}}" rel="stylesheet" />

  <title>Snacked - Bootstrap 5 Admin Template</title>
</head>

<body>
  {!! Flasher::render() !!}
    @yield('content')
  <!--plugins-->
  {{-- <script src="{{asset('dashboard_asset/assets/js/jquery.min.js')}}"></script>
  <script src="{{asset('dashboard_asset/assets/js/pace.min.js')}}"></script> --}}


</body>

</html>