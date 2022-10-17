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
        width: 90%;
        display: flex;
        height: 700px;
    }

    .right {
        margin-left: 500px;
        margin-top: -600px;
        margin-bottom: 50px;

    }

    label {

        font-weight: 600;
    }
    </style>
</head>
<h2 style="text-align: center; text-shadow: 2px 2px #e1d3f5">-- Register New Student --</h2>
<div class="bigbox">
    <form action="{{ url('student') }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}

        <h3>Student Details</h3>
        <label>Name : </label></br>
        <input type="text" name="name" id="name" class="form-control" style="width: 400px;" value="{{old('name')}}">
        <span style="color:red">
            @error('name')
            {{$message}}
            @enderror
        </span></br>
        <label>Index Number : </label></br>
        <input type="text" name="index" id="index" class="form-control" style="width: 400px;" value="{{old('index')}}"
            required>
        <span style="color:red">
            @error('index')
            {{$message}}
            @enderror
        </span></br>
        <label>Address : </label></br>
        <input type="text" name="address" id="address" class="form-control" style="width: 400px;"
            value="{{old('address')}}" required>
        <span style="color:red">
            @error('address')
            {{$message}}
            @enderror
        </span></br>
        <label>DOB : </label></br>
        <input type="date" name="DOB" id="DOB" class="form-control" style="width: 400px;" value="{{old('DOB')}}"
            required></br>
        <label>Gender : </label>
        <input type="radio" name="gender" id="gender" value="Male" value="{{old('gender')}}" required> Male
        <input type="radio" name="gender" id="gender" value="Female" value="{{old('gender')}}"> Female </br> </br>
        <!-- <input type="text" name="gender" id="gender"  class="form-control" style="width: 400px;"></br> -->
        <label>Profile Picture : </label>
        <input class="form-control" name="photo" type="file" id="photo" style="width: 400px;" value="{{old('photo')}}"
            required> </br>
        <label>Grade : </label></br>
        <!-- <input type="number" name="grade" id="grade"  class="form-control" style="width: 400px;"></br> -->
        <select name="grade" id="grade" class="form-control" style="width: 400px;" value="{{old('grade')}}" required>
            <option value="None"> None </option>
            <option value="1"> 1 </option>
            <option value="2"> 2 </option>
            <option value="3"> 3 </option>
            <option value="4"> 4 </option>
            <option value="5"> 5 </option>
            <option value="6"> 6 </option>
            <option value="7"> 7 </option>
            <option value="8"> 8 </option>
            <option value="9"> 9 </option>
            <option value="10"> 10 </option>
            <option value="11"> 11 </option>
            <option value="12"> 12 </option>
            <option value="13"> 13 </option>
        </select> </br>
        <label>Registration Date : </label></br>
        <input type="date" name="reg_date" id="reg_date" class="form-control" style="width: 400px;"
            value="{{old('reg_date')}}" required></br>

        <div class="right">
            <h3>Parent Details</h3>
            <label>Name : </label></br>
            <input type="text" name="parent_name" id="parent_name" class="form-control" style="width: 400px;"
                value="{{old('parent_name')}}" required>
            <span style="color:red">
                @error('parent_name')
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
            <input type="text" name="nic" id="nic" class="form-control" style="width: 400px;" value="{{old('nic')}}"
                required>
            <span style="color:red">
                @error('nic')
                {{$message}}
                @enderror
            </span></br>
            <label>Email : </label></br>
            <input type="text" name="email" id="email" class="form-control" style="width: 400px;"
                value="{{old('email')}}">
            <span style="color:red">
                @error('email')
                {{$message}}
                @enderror
            </span></br>
            <label>Occupation : </label></br>
            <input type="text" name="occupation" id="occupation" class="form-control" style="width: 400px;"
                value="{{old('occupation')}}" required></br>

        </div>

        <input type="submit" value="Register Student" class="btn btn-success"
            style="width:28%; font-size:18px; margin-left:550px;"></br>

    </form>
</div>

@stop