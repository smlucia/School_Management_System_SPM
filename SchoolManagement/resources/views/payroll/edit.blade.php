@extends('students.layout')
@section('content')

<head>
    <style>
    .bigbox {
        border: none;
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 20px;
        background-color: #e9dfed;
        box-shadow: 3px 5px 2px #e1d3f5;
        width: 70%;
        display: flex;
        margin-top:30px;
        margin-bottom:50px;
        margin-left: 170px;
    }

    .right {
        margin-left: 470px;
        margin-top: -425px;
        margin-bottom: 50px;

    }

    .text_name,
    .form-control {
        font-size: 20px;
    }

    .earn_deduct {
        font-size: 23px;
    }

    .heading {
        text-align: center;
        text-shadow: 2px 2px #e1d3f5;
        font-weight: bold;
        font-size: 50px;
        margin-bottom: 40px;
        font-family: 'Candara';
    }

    label {

        font-weight: 600;
    }
    </style>
</head>
<h2 class="heading"> Update Payroll Details </h2>
<div class="bigbox">

    <form action="{{ url('payroll/' .$payroll->id) }}" method="post" style="font-family:'Candara';">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$payroll->id}}" id="id" style="width: 400px;" />
        <label class="text_name" style="margin-top:30px;">Staff's Name : </label></br>
        <input type="text" name="staff_name" id="staff_name" value="{{$payroll->staff_name}}" class="form-control"
            style="width: 400px;" readonly></br>

        <label class="text_name">Select Month : </label></br>
        <input type="text" name="month" id="month" value="{{$payroll->month}}" class="form-control"
            style="width: 400px;" readonly></br>
        <label class="text_name">Year : </label></br>
        <input type="number" name="year" id="year" value="{{$payroll->year}}" class="form-control" style="width: 400px;"
            readonly></br>
        <label class="text_name">Basic Salary (Rs) :</label></br>
        <input type="number" name="salary" id="salary" value="{{$payroll->salary}}" class="form-control"
            style="width: 400px;" readonly></br>

        <div class="right">
            <h5 class="earn_deduct">EARNINGS</h5>
            <label class="text_name">Allowance (Rs) : </label></br>
            <input type="number" name="allowance" id="allowance" value="{{$payroll->allowance}}" class="form-control"
                style="width: 400px;" value="{{old('allowance')}}">
            <span style="color:red">
                @error('allowance')
                {{$message}}
                @enderror
            </span></br>
            <label class="text_name">Cost of Living (Rs) :</label></br>
            <input type="number" name="cost" id="cost" style="width: 400px;" value="{{$payroll->cost}}"
                class="form-control" value="{{old('cost')}}">
            <span style="color:red">
                @error('cost')
                {{$message}}
                @enderror
            </span></br>

            <h5 class="earn_deduct">DEDUCTIONS</h5>
            <label class="text_name">NTF (Rs) :</label></br>
            <input type="number" name="ntf" id="ntf" value="{{$payroll->ntf}}" class="form-control"
                style="width: 400px;" value="{{old('ntf')}}">
            <span style="color:red">
                @error('ntf')
                {{$message}}
                @enderror
            </span></br>
            <label class="text_name">ETF (Rs) :</label></br>
            <input type="number" name="etf" id="etf" value="{{$payroll->etf}}" class="form-control"
                style="width: 400px;" value="{{old('etf')}}">
            <span style="color:red">
                @error('etf')
                {{$message}}
                @enderror
            </span></br>
        </div>

        <input type="submit" value="UPDATE PAYROLL" class="btn btn-success"
            style="
            width:35%; 
            font-size:23px; 
            border-radius:10px; 
            font-weight:bold; 
            background-color:#6EE56C; 
            color:#0A123D; 
            border:none; 
            font-family:'Candara';
            margin-left:280px; 
            margin-top:-70px;"></br>
    </form>
</div>

@stop