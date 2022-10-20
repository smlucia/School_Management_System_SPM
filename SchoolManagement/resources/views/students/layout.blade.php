<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="../staff/css/app.css">
    <style>
    /*nav*/
    .topnav {
        overflow: hidden;
        background-color: #020421;
        color: whitesmoke;
        height: 180px;
    }

    .topnav a {
        float: right;
        display: block;
        color: whitesmoke;
        text-align: center;
        padding: 35px 45px;
        text-decoration: none;
        font-size: 22px;
        font-family: Arial, Helvetica, sans-serif;
        border-bottom: 3px solid transparent;
    }

    .topnav a:hover {
        border-bottom: 3px solid white;
    }

    .topnav a.active {
        border-bottom: 3px solid white;
    }
<<<<<<< HEAD

    body {

        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        height: 100%
    }
=======
>>>>>>> dfe0bb1672516fa038637dee1a91896902bdaaa5
    </style>

    <title>Student Management System</title>
</head>

<<<<<<< HEAD
<body style="background-image: url('images/bg13.jpg');">
=======
<body>
>>>>>>> dfe0bb1672516fa038637dee1a91896902bdaaa5
    <header>

        <div class="topnav">
            <img class="headerlogo" src="/images/logo.png" width="220px" height="170px"
                style="margin-top: 10px; margin-left:30px;">
<<<<<<< HEAD
            <a class="/login" href="{{ route('signout') }}"
                style="font-family:'Candara';font-size:30px; font-weight:bold;">Logout</a>
            <a href="/studentHome" style="font-family:'Candara';font-size:30px; font-weight:bold;">Student</a>
            <a href="/staffHome" style="font-family:'Candara';font-size:30px; font-weight:bold;">Staff</a>
            <a href="/eventHome" style="font-family:'Candara';font-size:30px; font-weight:bold;">Events</a>
            <a href="/payrollHome" style="font-family:'Candara';font-size:30px; font-weight:bold;">Payroll</a>
            <a class="active" href="/homepage" style="font-family:'Candara';font-size:30px; font-weight:bold;">Home</a>
=======
                <a href="/studentHome">Student</a>
                <a href="/staffHome">Staff</a>
                <a href="/eventHome">Events</a>
                <a href="/payrollHome">Payroll</a>
                <a href="/adminHome">Admin</a>
                <a class="active" href="/homepage">Home</a>
                <a class="/login" href="/{{ route('signout') }}">logout</a>
>>>>>>> dfe0bb1672516fa038637dee1a91896902bdaaa5


        </div>
    </header><br><br>

    <div class="container">

        @yield('content')
    </div>

    <footer class="clearfix" style="padding: 20px; background-color:#020421; color:white;">
        <table style="width: 80%;" align="center">
            <tr>
                <td>
                    <p><b>Services</b><br> Student Management <br> Staff Management<br>Events Management<br>Payroll
                        Management<br></p>
                </td>
                <td>
                    <p><b>Contact Us</b><br>HotLine: +9411 2729568<br>Phone: +9411 2123789<br>E-mail:
                        ellucian.info@yahoo.com <br>
                </td>
                <td>
                    <p>Follow Us On,</p>
                    <div>
                        <a href="https://www.facebook.com/" target="blank"><img class="social" title="facebook"
                                src="/images/facebook.jpeg" alt="Facebook" width="30px"></a>
                        <a href="https://www.instagram.com/" target="blank"><img class="social" title="instagram"
                                src="/images/instagram.jpeg" alt="Instagram" width="30px"></a>
                        <a href="https://www.twitter.com/" target="blank"><img class="social" title="twitter"
                                src="/images/twitter.jpeg" alt="twitter" width="30px"></a>
                    </div>
                </td>
            </tr>
        </table>

        <hr width="100%">

        <p align="center">Copyright 2022 @Ellucian(PVT)LTD.
            <br>All rights reserved
            <br>Website Developed and Designed by B6-02-07 Project Group
        </p>
    </footer>
</body>

</html>