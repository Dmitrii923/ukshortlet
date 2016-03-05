<!DOCTYPE html>



<html>



<head>



    <meta charset="utf-8">



    <meta http-equiv="X-UA-Compatible" content="IE=edge">



    <title>Uk Shortlets</title>

<link rel="icon" type="image/x-icon" href="{{url('/')}}/assets/sitelogo.png" >



    <meta name="viewport" content="width=device-width, initial-scale=1">



    <link rel="stylesheet" href="{{url('/')}}/assets/dist/css/adminlte.min.css">
  <link rel="shortcut icon" href="{{url('/')}}/assets/front/images/footer-logo-2.jpg" type="image/x-icon">  
    



    <link rel="stylesheet" href="https://cdn.lineicons.com/1.0.1/LineIcons.min.css">



    <link rel="shortcut icon" href="{{url('/')}}/assets/front/images/logo.png" />



<!--    <script src='https://www.google.com/recaptcha/api.js'></script> -->



    <style>



        body::after {



            content: "";



            background: blue;



            z-index: -1;



        }



    </style>



</head>







<body class="hold-transition login-page" style="">



    <div class="login-box">



        <div class="login-logo">



            <h3>Welcome</h3><h3>UK Shortlets</h3>



        </div>



        <div class="card">



            <div class="card-body login-card-body">



                <p class="login-box-msg">Sign in to start your session</p>







                 <form method="POST" action="{{ route('login.custom') }}">

                            @csrf

                            <div class="form-group mb-3">

                                <input type="text" placeholder="Email" id="email" class="form-control" name="email" required

                                    autofocus>

                                @if ($errors->has('email'))

                                <span class="text-danger">{{ $errors->first('email') }}</span>

                                @endif

                            </div>



                            <div class="form-group mb-3">

                                <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))

                                <span class="text-danger">{{ $errors->first('password') }}</span>

                                @endif

                            </div>



                            <div class="form-group mb-3">

                                <div class="checkbox">

                                    <span>
                                        <a href="{{url('/')}}/createowneraccount">New User ? Sign up here</a>
                                    </span>

                                </div>

                            </div>



                            <div class="d-grid mx-auto">

                                <button type="submit" class="btn btn-primary btn-block btn-flat mt-3">Signin</button>



                            </div>

                        </form>





            </div>



        </div>



    </div>







    <script src="{{url('/')}}/assets/plugins/jquery/jquery.min.js"></script>



    <script src="{{url('/')}}/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>



</body>



</html>







