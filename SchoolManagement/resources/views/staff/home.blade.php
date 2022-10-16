@extends('staff.layout')
@section('content')
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/style.css">
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
    <div class="">
        <h1 style="text-align: center;"><b>Staff Management</b></h1>

    <div class="menu" style="margin-bottom: 100px; margin-top:40px; margin-left:100px;">
            <img src="images/team.png" width= '100' height='100' class="img img-responsive" style="margin-top: 20px;" />
            <h4
            style="margin-top:40px;">
            <b><a href="/staff">View Staff Members</a></b></h4>

</div>

<div class="menu" style="margin-bottom: 100px; margin-top:40px; margin-left:100px;">
            <img src="images/verify.png" width= '100' height='100' class="img img-responsive" style="margin-top: 20px;" />
            <h4
            style="margin-top:40px;">
            <b><a href="/staffCreate">Register New Member</a></b></h4>

</div>

<div class="menu" style="margin-bottom: 100px; margin-top:40px; margin-left:100px;">
            <img src="images/dashboard.png" width= '100' height='100' class="img img-responsive" style="margin-top: 20px;" />
            <h4
            style="margin-top:40px;">
            <b><a href="#">View Report</a></b></h4>

</div>



    </div>
</div>
</div>
</body>
@endsection
