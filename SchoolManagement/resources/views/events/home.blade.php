@extends('staff.layout')
@section('content')
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/style.css">


</head>
<div >

<div class="container">

<div class="row">
    <div class="">
    <h1 style="text-align: center;"><b>Events Management</b></h1>

    <div class="menu" style="margin-bottom: 100px; margin-top:40px; margin-left:100px;">
            <img src="images/people.png" width= '100' height='100' class="img img-responsive"
            style="margin-top: 20px; border-radius:5px;font-family: Arial, Helvetica, sans-serif;" />
            <h4
            style="margin-top:40px;">
            <b><a href="/event">View </br> Events</a></b></h4>
</div>

<div class="menu" style="margin-bottom: 100px; margin-top:40px; margin-left:100px;">
            <img src="images/event.png" width= '100' height='100' class="img img-responsive"
             style="margin-top: 20px; border-radius:5px;" />
            <h4
            style="margin-top:40px;">
            <b><a href="/eventCreate">Add</br> New Event</a></b></h4>

</div>

<div class="menu" style="margin-bottom: 100px; margin-top:40px; margin-left:100px;">
            <img src="images/dashboard.png" width= '100' height='100' class="img img-responsive" style="margin-top: 20px;" />
            <h4
            style="margin-top:40px;">
            <b><a href="/getEventDetails">View</br> Report</a></b></h4>
</div>
</div>
</div>
</div>
</div>
@endsection
