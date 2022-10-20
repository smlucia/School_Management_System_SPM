<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="../staff/css/app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/style.css">

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

    body {
        font-family: Arial, Helvetica, sans-serif;

        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        height: -300%
    }

    .size {
        width: 300px;
        height: 300px;
    }

    .img {
        width: 100%;
        height: 180px;
    }

    .photo {
        filter: blur(2px);
        margin-top: 10px;
    }

    .centered {
        position: absolute;
        top: 80%;
        left: 30%;
        transform: translate(-50%, -50%);
    }

    .text {
        font-size: 40px;
        color: whitesmoke;
        text-decoration: solid;
        text-shadow: 2px 2px 3px lightslategray;
        text-align: center;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;

    }

    .sizel {
        width: 00px;
        height: 50%;
        margin-left: 5px;
    }
    </style>

    <title>Student Management System</title>
</head>

<body>
    <header>

        <div class="topnav">
            <img class="headerlogo" src="/images/logo.png" width="220px" height="170px"
                style="margin-top: 10px; margin-left:30px;">
            <a class="/login" href="{{ route('signout') }}"
                style="font-family:'Candara';font-size:30px; font-weight:bold;">Logout</a>
            <a href="/studentHome" style="font-family:'Candara';font-size:30px; font-weight:bold;">Student</a>
            <a href="/staffHome" style="font-family:'Candara';font-size:30px; font-weight:bold;">Staff</a>
            <a href="/eventHome" style="font-family:'Candara';font-size:30px; font-weight:bold;">Events</a>
            <a href="/payrollHome" style="font-family:'Candara';font-size:30px; font-weight:bold;">Payroll</a>
            <a class="active" href="/" style="font-family:'Candara';font-size:30px; font-weight:bold;">Home</a>

        </div>
    </header>

    <img src="images/bg6.jpg" width="100%" height="500px" class="photo" />
    <div class="centered">
        <b>
            <h4 class="text textbox">Do Something Today That Your </br>Future Self Will Thank</br>You For !
                </h1>
        </b>
    </div>
    <div class="container">


        <div class="row">
            <div>

                <div class="menu size" style="margin-bottom: 100px; margin-top:40px; margin-left:170px;">
                    <img src="images/staff_m.png" width='200' height='150' class="img img-responsive" />
                    <h4 style="margin-top:20px;">
                        <b><a href="/staffHome">Staff </br> Management</a></b>
                    </h4>
                    <h6>Handled by: IT20103040</h6>

                </div>

                <div class="menu size" style="margin-bottom: 100px; margin-top:40px; margin-left:170px;">
                    <img src="images/student_m.jpg" width='200' height='150' class="img img-responsive" />
                    <h4 style="margin-top:20px;">
                        <b><a href="/studentHome">Student</br> Management</a></b>
                    </h4>
                    <h6>Handled by: IT20246778</h6>

                </div>

                <div class="menu size" style="margin-bottom: 100px; margin-top:40px; margin-left:170px;">
                    <img src="images/event_m.jpg" width='200' height='150' class="img img-responsive" />
                    <h4 style="margin-top:20px;">
                        <b><a href="eventHome">Events</br> Management</a></b>
                    </h4>
                    <h6>Handled by: IT20252540</h6>

                </div>

                <div class="menu size" style="margin-bottom: 100px; margin-top:40px; margin-left:170px; ">
                    <img src="images/payroll_m.jpg" width='200' height='150' class="img img-responsive" />
                    <h4 style="margin-top:20px;">
                        <b><a href="/payrollHome">Payroll </br>Management</a></b>
                    </h4>
                    <h6>Handled by: IT20085858</h6>

                </div>



            </div>
        </div>
    </div>
</body>

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