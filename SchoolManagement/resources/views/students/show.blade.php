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

<h2 style="text-align: center; text-shadow: 2px 2px #e1d3f5">-- {{$students->name}} --</h2>

<div class="bigbox">
    <h3 style="margin-left: 30px;">Student Details</h3>
    <p class="card-text"><img src="{{ asset($students->photo) }}" width='100' height='100' class="img img-responsive"
            style="margin-left:80px; border-radius:50%; border: 1px solid;" />
    </p><br>

    <div class="box">
        <p>
            <b>Name: </b>{{ $students->name }}
        </p>
    </div>
    <div class="box">
        <p>
            <b>Address: </b>{{ $students->address }}
        </p>
    </div>
    <div class="box">
        <p>
            <b>Date of Birth: </b>{{ $students->DOB }}
        </p>
    </div>
    <div class="box">
        <p>
            <b>Gender: </b>{{ $students->gender }}
        </p>
    </div>
    <div class="box">
        <p>
            <b>Grade: </b>{{ $students->grade }}
        </p>
    </div>
    <div class="box">
        <p>
            <b>Registration Date: </b>{{ $students->reg_date }}
        </p>
    </div>

    <div class="right">
        <h3>Parent's Details</h3>
        <div class="box">
            <p>
                <b>Name: </b>{{ $students->parent_name}}
            </p>
        </div>

        <div class="box">
            <p>
                <b>Contact Number: </b>{{ $students->contact_no }}
            </p>
        </div>
        <div class="box">
            <p>
                <b>NIC: </b>{{ $students->nic }}
            </p>
        </div>
        <div class="box">
            <p>
                <b>Email: </b>{{ $students->email }}
            </p>
        </div>
        <div class="box">
            <p>
                <b>Occupation: </b>{{ $students->occupation }}
            </p>
        </div>

    </div>

</div>
@endsection