<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PERTAMINA | EP CEPU</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{url('adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('adminlte/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{url('adminlte/bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('adminlte/dist/css/AdminLTE.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{url('adminlte/plugins/iCheck/square/blue.css')}}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo" style="margin-left: -50px;margin-top: -50px">
    <a href="#"><img src="{{url('public/adminlte/dist/pertamina-ep-cepu.png')}}" width="450" height="130"></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body" style="border-radius: 20px; margin-top:-10px">
    <p class="login-box-msg">Sign in to start your session<br><span style="font-size:17px;"><b>Administrator</b></span></p>
   @if(\Session::has('alert'))
        <div class="alert alert-danger">
            <div>{{Session::get('alert')}}</div>
        </div>
    @endif
    @if(\Session::has('alert-success'))
        <div class="alert alert-success">
            <div>{{Session::get('alert-success')}}</div>
        </div>
    @endif
    <form method="POST" action="{{ url('/loginPost') }}">
    {{ csrf_field() }}
      <div class="form-group has-feedback">
        <!--<input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>-->
        <input type="text" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
      </div>
      <div class="form-group has-feedback">
        <input id="password" type="password" class="form-control" placeholder="Password" name="password" required autocomplete="current-password">
      </div>
      <div class="row">

        <!-- /.col -->
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <!--<a href="#">I forgot my password</a><br>
    <a href="register.html" class="text-center">Register a new membership</a>-->

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="{{url('adminlte/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{url('adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- iCheck -->
<script src="{{url('adminlte/plugins/iCheck/icheck.min.js')}}"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
