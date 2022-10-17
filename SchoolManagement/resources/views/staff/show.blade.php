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
        margin-left: 500px;
        margin-top: -300px;
        margin-bottom: 50px;

    }

    .bigbox {
        border: none;
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 20px;
        background-color: #e9dfed;
        box-shadow: 3px 5px 2px #e1d3f5;
        width: 90%;
    }
    </style>
</head>


<h2 style="text-align: center; text-shadow: 2px 2px #e1d3f5">-- {{$staff->name}} --</h2>

<div class="bigbox">
    <p class="card-text"><img src="{{ asset($staff->photo) }}" width='200' height='200' class="img img-responsive"
            style="margin-left:80px; border-radius:50%; border: 1px solid;" />
    </p><br>

    <div class="box">
        <p>
            <b>Name: </b>{{ $staff->name }}
        </p>
    </div>
    <div class="box">
        <p>
            <b>National Identity Card: </b>{{ $staff->NIC }}
        </p>
    </div>
    <div class="box">
        <p>
            <b>Contact number: </b>{{ $staff->contact_no }}
        </p>
    </div>
    <div class="box">
        <p>
            <b>Address: </b>{{ $staff->address }}
        </p>
    </div>

    <div class="right">

        <div class="box">
            <p>
                <b>Date of Birth: </b>{{ $staff->DOB }}
            </p>
        </div>

        <div class="box">
            <p>
                <b>Gender: </b>{{ $staff->gender }}
            </p>
        </div>
        <div class="box">
            <p>
                <b>Email: </b>{{ $staff->Email }}
            </p>
        </div>
        <div class="box">
            <p>
                <b>First appoinment date: </b>{{ $staff->First_appoinment_date }}
            </p>
        </div>
        <div class="box">
            <p>
                <b>Designation: </b>{{ $staff->designation }}
            </p>
        </div>
        <div class="box">
            <p>
                <b>Type: </b>{{ $staff->type }}
            </p>
        </div>
        <div class="box">
            <p>
                <b>Distance from home to school: </b>{{ $staff->distance }} km
            </p>
        </div>
    </div>
</div>
@endsection