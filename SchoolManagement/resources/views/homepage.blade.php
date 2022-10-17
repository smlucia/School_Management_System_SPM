<!DOCTYPE html>
<html>
<head>
    <title>Laravel 9 Custom Auth Login and Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         .box{
            width: 30%;
            height: 370px;
            border: 1px solid whitesmoke;
            border-radius:5px;
            padding: 5px;
            padding-left: 7px;
            margin-bottom: 10px;
            margin-top: 100px;
            font-family:Arial, Helvetica, sans-serif;
            background-color: whitesmoke;
            margin-left: 40px;
            box-shadow: 2px 2px 3px #afaab5;
        }

        .left{
            margin-left: 60px;
            margin-top: 50px;
            margin-bottom: 50px;

        }
        .photo{
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .text{
            text-align: center;
            margin-top: 20px;
            color: #2F4F4F;
            font-family:Arial, Helvetica, sans-serif;

        }
        .btn{
            width: 100px;
            height: 30px;
            background-color:darkblue;
            border: none;
            border-radius: 7px;
            color: white;

        }
        input{
            border-radius: 4px;
            border:none;
            background-color: #d1d2e3;
            height: 25px;
            width: 70%;
        }
        a{
            text-decoration: none;
            color: #d1d2e3;
            font-size: 18px;
        }
    </style>
</head>
<body>
<body style="background-image:url('images/bg11.jpg')" class="photo">
<div style="display: flex;">
<img src="images/login2.jpg" width="500px" height="600px" class="left"/>
<div class="box ">

    <nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color: #0dcaf0;">
        <div class="container">
            <a class="navbar-brand mr-auto" href="#">Ellucian</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register-user') }}">Register</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('signout') }}">Logout</a>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
</body>
</html>