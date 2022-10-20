@extends('staff.layout')
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
        margin-bottom:50px;
        margin-top:30px;
        margin-left:165px;
    }

    .heading {
        text-align: center;
        text-shadow: 2px 2px #e1d3f5;
        font-weight: bold;
        font-size: 50px;
        margin-bottom: 40px;
        font-family: 'Candara';
    }

    .right {
        margin-left: 450px;
        margin-top: -455px;
        margin-bottom: 50px;

    }

    label {

        font-weight: 600;
    }
    </style>
</head>
<h2 class="heading"> Register New Staff Member</h2>
<div class="bigbox">


    <form action="{{ url('staff') }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}


        <label>Name : </label></br>
        <input type="text" name="name" id="name" class="form-control" style="width: 400px;" value="{{old('name')}}">
        <span style="color:red">
            @error('name')
            {{$message}}
            @enderror
        </span></br>
        <label>Gender : </label>
        <input type="radio" name="gender" id="gender" value="Male" value="{{old('gender')}}" required> Male
        <input type="radio" name="gender" id="gender" value="Female" value="{{old('gender')}}"> Female </br> </br>
        <label>DOB : </label></br>
        <input type="date" name="DOB" id="DOB" class="form-control" style="width: 400px;" value="{{old('DOB')}}"
            required></br>
        <label>Address : </label></br>
        <input type="text" name="address" id="address" class="form-control" style="width: 400px;"
            value="{{old('address')}}" required>
        <span style="color:red">
            @error('address')
            {{$message}}
            @enderror
        </span></br>
        <label>Contact Number : </label></br>
        <input type="text" name="contact_no" id="contact_no" class="form-control" style="width: 400px;"
            value="{{old('contact_no')}}" required>
        <span style="color:red">
            @error('contact_no')
            {{$message}}
            @enderror
        </span></br>
        <label>NIC : </label></br>
        <input type="text" name="NIC" id="NIC" class="form-control" style="width: 400px;" value="{{old('NIC')}}"
            required>
        <span style="color:red">
            @error('NIC')
            {{$message}}
            @enderror
        </span>

        <div class="right">
            <label>E-mail : </label></br>
            <input type="text" name="Email" id="Email" class="form-control" style="width: 400px;"
                value="{{old('Email')}}" required>
            <span style="color:red">
                @error('Email')
                {{$message}}
                @enderror
            </span></br>
            <label>F.A.D : </label></br>
            <input type="date" name="First_appoinment_date" id="First_appoinment_date" class="form-control"
                style="width: 400px;" value="{{old('First_appoinment_date')}}" required></br>
            <label>Designation : </label></br>
            <input type="text" name="designation" id="designation" class="form-control" style="width: 400px;"
                value="{{old('designation')}}" required>
            <span style="color:red">
                @error('designation')
                {{$message}}
                @enderror
            </span></br>
            <label>Type : </label></br>
            <select name="type" id="type" class="form-control" style="width: 400px;" value="{{old('type')}}" required>
                <option value="None"> None </option>
                <option value="Academic"> Academic </option>
                <option value="Non-Academic"> Non-Academic </option>
            </select> </br>
            <!-- <input type="text" name="type" id="type"  class="form-control" style="width: 400px;"></br> -->
            <label>Distance from home to school (km) : </label></br>
            <input type="number" name="distance" id="distance" class="form-control" style="width: 400px;"
                value="{{old('distance')}}" required>
            <span style="color:red">
                @error('distance')
                {{$message}}
                @enderror
            </span></br>
            <label>Profile Picture : </label>
            <input class="form-control" name="photo" type="file" id="photo" style="width: 400px;"
                value="{{old('photo')}}" required>
        </div>

        <input type="submit" value="REGISTER" class="btn btn-success" style="width:15%; 
            font-size:23px; 
            font-weight:bold; 
            border-radius:10px; 
            background-color:#6EE56C;
            color:#0A123D; 
            border:none; 
            width:25%;
            font-family:'Candara';
            font-weight:bold;
            font-size: 23px;
            margin-left:320px;"></br>

    </form>


</div>
@stop