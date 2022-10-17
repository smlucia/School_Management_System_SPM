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
        margin-top: 10px;
        margin-bottom: 60px;

    }

    .bigbox {
        border: none;
        border-radius: 10px;
        padding: 20px;
        margin-top: -50px;
        margin-bottom: 50px;
        background-color: #e9dfed;
        box-shadow: 3px 5px 2px #e1d3f5;
        width: 40%;
        height: 400px;
        margin-left: 100px;
    }

    .name{
        text-shadow: 2px 2px #e1d3f5;
        font-family: 'Candara';
        font-size:40px;
        font-weight:bold;
    }
    </style>
</head>

<h2 class="name">{{$payroll->staff_name}}</h2>
<div style="display: flex;">
    <img src="{{ $payroll->photo}}" width="350px" height="250px" style="border-radius:10%; margin-left:100px;" />
    <div class="bigbox">
        <div class="box">
            <p>
                <b>Month: </b>{{ $payroll->month }}
            </p>
        </div>
        <div class="box">
            <p>
                <b>Year: </b>{{ $payroll->year }}
            </p>
        </div>
        <div class="box">
            <p>
                <b>Basic Salary(Rs):</b>: </b>{{ $payroll->salary }}
            </p>
        </div>
        <h6>EARNINGS</h6>
        <div class="box">
            <p>
                <b>Allowance (Rs): </b> {{ $payroll->allowance }}
            </p>
        </div>
        <div class="box">
            <p>
                <b>Cost of Living (Rs): </b> {{ $payroll->cost }}
            </p>
        </div>
        <h6>DEDUCTION</h6>
        <div class="box">
            <p>
                <b>NTF(Rs):</b>{{ $payroll->ntf }}
            </p>
        </div>

        <div class="box">
            <p>
                <b>ETF:(Rs) </b>{{ $payroll->etf }}
            </p>
        </div>
    </div>
</div>
@endsection