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
        height: 750px;
        margin-bottom:50px;
        margin-left:180px;
        margin-top:30px;
    }

    .right {
        margin-left: 470px;
        margin-top: -600px;
        margin-bottom: 50px;

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
<h2 class="heading"> Update Student Details</h2>
<div class="bigbox">
    <form action="{{ url('student/' .$students->id) }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        @method("PATCH")

        <h3>Student Details</h3>
        <label>Name</label></br>
        <input type="text" name="name" value="{{$students->name}}" id="name" class="form-control" style="width: 400px;"
            value="{{old('name')}}">
        <span style="color:red">
            @error('name')
            {{$message}}
            @enderror
        </span></br>
        <label>Index Number</label></br>
        <input type="text" name="index" value="{{$students->index}}" id="index" class="form-control"
            style="width: 400px;" readonly></br>
        <label>Address</label></br>
        <input type="text" name="address" value="{{$students->address}}" id="address" class="form-control"
            style="width: 400px;" value="{{old('address')}}">
        <span style="color:red">
            @error('address')
            {{$message}}
            @enderror
        </span></br>
        <label>DOB</label></br>
        <input type="date" name="DOB" value="{{$students->DOB}}" id="DOB" class="form-control" style="width: 400px;"
            readonly></br>
        <label>Gender</label></br>
        <input type="text" name="gender" value="{{$students->gender}}" id="gender" class="form-control"
            style="width: 400px;" readonly></br>
        <label>Profile Picture</label>
        <input class="form-control" name="photo" type="file" value="{{$students->photo}}" id="photo"
            style="width: 400px;">
        <label>Grade</label></br>
        <input type="number" name="grade" value="{{$students->grade}}" id="grade" class="form-control"
            style="width: 400px;"></br>
        <label>Registration Date</label></br>
        <input type="date" name="reg_date" value="{{$students->reg_date}}" id="reg_date" class="form-control"
            style="width: 400px;" readonly></br>

        <div class="right">
            <h3>Parent Details</h3>
            <label>Name </label></br>
            <input type="text" name="parent_name" value="{{$students->parent_name}}" id="parent_name"
                class="form-control" style="width: 400px;" value="{{old('parent_name')}}">
            <span style="color:red">
                @error('parent_name')
                {{$message}}
                @enderror
            </span></br>
            <label>Contact Number</label></br>
            <input type="text" name="contact_no" value="{{$students->contact_no}}" id="contact_no" class="form-control"
                style="width: 400px;" value="{{old('contact_no')}}">
            <span style="color:red">
                @error('contact_no')
                {{$message}}
                @enderror
            </span></br>
            <label>NIC</label></br>
            <input type="text" name="nic" value="{{$students->nic}}" id="nic" class="form-control" style="width: 400px;"
                value="{{old('nic')}}">
            <span style="color:red">
                @error('nic')
                {{$message}}
                @enderror
            </span></br>
            <label>Email</label></br>
            <input type="text" name="email" value="{{$students->email}}" id="email" class="form-control"
                style="width: 400px;" value="{{old('email')}}">
            <span style="color:red">
                @error('email')
                {{$message}}
                @enderror
            </span></br>
            <label>Occupation</label></br>
            <input type="text" name="occupation" value="{{$students->occupation}}" id="occupation" class="form-control"
                style="width: 400px;">
            <span style="color:red">
                @error('occupation')
                {{$message}}
                @enderror
            </span></br>

        </div>

        <input type="submit" value="UPDATE STUDENT" class="btn btn-success"
        style="width:15%; 
            font-size:18px; 
            font-weight:bold; 
            border-radius:10px; 
            background-color:#6EE56C;
            color:#0A123D; 
            font-family:'Candara';
            border:none; 
            width:35%;
            font-weight:bold;
            font-size: 23px;
            margin-left:530px;
            margin-top:-20px;"></br>

    </form>
</div>
@stop