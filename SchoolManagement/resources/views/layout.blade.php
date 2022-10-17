<html>
<head>
    <title>Laravel 9 Custom Auth Login and Registration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <style> 
    .photo{
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    .left{
        margin-left: 60px;
        margin-top: 50px;
        margin-bottom: 50px;
    }
    .container{
        padding: 5px;
        padding-left: 7px;
        margin-bottom: 100px;
        margin-right: -50px;
        margin-top: -550px;
    }
    </style>
</head>
<img src="images/login2.jpg" width="500px" height="600px" class="left"/>
<body style="background-image:url('images/bg11.jpg')" class="photo">
<div class="container" style="padding:50px;">
    @yield('content')
</div>
</body>
</html>