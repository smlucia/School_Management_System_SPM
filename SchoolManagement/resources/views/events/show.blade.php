@extends('staff.layout')
@section('content')

<head>
    <style>
    input {
        margin: 8px;
        border: 2px solid;
        border-radius: 5px;
        padding-left: 10px;
        text-decoration: 2px solid;
    }

    .card_edit {
        width: 400px;
        border: 2px solid;
        border-radius: 5px;
        padding: 15px;
        background-color: #dadbe8;
        margin-left: 600px;
        margin-top: -100px;
        height: 500px;
    }

    .box {
        width: 350px;
        height: 35px;
        border: 1px solid;
        border-radius: 5px;
        padding: 5px;
        padding-left: 7px;
        margin-bottom: 10px;
        font-family: Arial, Helvetica, sans-serif;
        background-color: whitesmoke;
        margin-left: 30px;
        box-shadow: 2px 2px #afaab5;
    }

    .right {
<<<<<<< HEAD
        margin-left: 450px;
=======
        margin-left: 500px;
>>>>>>> dfe0bb1672516fa038637dee1a91896902bdaaa5
        margin-top: -300px;
        margin-bottom: 60px;

    }

    .bigbox {
        border: none;
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 20px;
        background-color: #e9dfed;
        box-shadow: 3px 5px 2px #e1d3f5;
<<<<<<< HEAD
        width: 70%;
        height: 500px;
        margin-left: 200px;
        margin-bottom: 50px;
        margin-top: 30px;
    }

    .name {
        text-shadow: 2px 2px #e1d3f5;
        font-family: 'Candara';
        font-size: 40px;
        font-weight: bold;
        text-align: center;
=======
        width: 90%;
        height: 500px;
>>>>>>> dfe0bb1672516fa038637dee1a91896902bdaaa5
    }
    </style>
</head>

<<<<<<< HEAD
<h2 class="name">{{$events->event_name}}</h2>
=======

<h2 style="text-align: center; text-shadow: 2px 2px #e1d3f5">-- {{$events->event_name}} --</h2>
>>>>>>> dfe0bb1672516fa038637dee1a91896902bdaaa5

<div class="bigbox">
    <h3 style="margin-left: 30px;">Event Details</h3>
    <br>

    <div class="box">
        <p>
            <b>Event Name: </b>{{ $events->event_name }}
        </p>
    </div>
    <div class="box">
        <p>
            <b>Event Status: </b>{{ $events->e_status }}
        </p>
    </div>
    <div class="box">
        <p>
            <b>Date: </b>{{ $events->e_date }}
        </p>
    </div>
    <div class="box">
        <p>
            <b>Time: </b>{{ $events->e_time }}
        </p>
    </div>
    <div class="box">
        <p>
            <b>Location: </b>{{ $events->location }}
        </p>
    </div>
    <div class="box">
        <p>
            <b>Event Type: </b>{{ $events->type }}
        </p>
    </div>


    <div class="box">
        <p>
            <b>Event Coordinator:</b>{{ $events->coordinator}}
        </p>
    </div>

    <div class="box">
        <p>
            <b>Total expences:(Rs) </b>{{ $events->tot_expence }}
        </p>
    </div>
    <div class="right">
        <img src="{{ $events->photo}}" width="350px" height="250px" style="border-radius:10%;" />
    </div>

</div>

@endsection