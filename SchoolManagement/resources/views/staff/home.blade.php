@extends('staff.layout')
@section('content')
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/style.css">

    <style>
        .heading{
            text-align: center;
            text-shadow: 2px 2px #e1d3f5;
            font-weight:bold; 
            font-size:50px; 
            margin-bottom:40px;
            margin-left:-250px;
            font-family: 'Candara';
        }

        .sub-container{
            margin-left:90px;
        }
    </style>
</head>
<body style=
            "font-family: Arial, Helvetica, sans-serif;
            background-image: url('images/bg.jpg');
            background-repeat:no-repeat;
            background-size:contain;
            background-position:center;
            height:-300%">

<div class="container">
<div class="row">
    <div class="sub-container">
        <h1 class="heading"><b>Staff Management</b></h1>

    <div class="menu" style="margin-bottom: 100px; margin-top:40px; margin-left:100px;">
            <img src="images/team.png" width= '100' height='100' class="img img-responsive" style="margin-top: 20px;" />
            <h4
            style="margin-top:40px;">
            <b><a href="/staff" style="font-size:23px; font-weight:bold; font-family:'Candara';">View <br> Staff Members</a></b></h4>

</div>

<div class="menu" style="margin-bottom: 100px; margin-top:40px; margin-left:100px;">
            <img src="images/registered.png" width= '100' height='100' class="img img-responsive" style="margin-top: 20px;" />
            <h4
            style="margin-top:40px;">
            <b><a href="/staffCreate" style="font-size:23px; font-weight:bold; font-family:'Candara';">Register New Member</a></b></h4>

</div>

<div class="menu" style="margin-bottom: 100px; margin-top:40px; margin-left:100px;">
            <img src="images/dashboard.png" width= '100' height='100' class="img img-responsive" style="margin-top: 20px;" />
            <h4
            style="margin-top:40px;">
            <b><a href="/getDetails" style="font-size:23px; font-weight:bold; font-family:'Candara';">View Report</a></b></h4>
</div>
    </div>
</div>
</div>
</body>
@endsection
