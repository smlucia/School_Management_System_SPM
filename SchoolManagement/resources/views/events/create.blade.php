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
        width: 75%;
        display: flex;
        height: 800px;
        margin-bottom:50px;
        margin-top:30px;
        margin-left:150px;
    }

    .right {
        margin-left: 500px;
        margin-top: -700px;
        margin-bottom: 100px;

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
<h2 class="heading"> Add New Event </h2>
<div class="bigbox">

    <form action="{{ url('event') }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}

        <label>Event Name :</label></br>
        <input type="text" name="event_name" id="event_name" class="form-control" style="width: 400px;"
            value="{{old('event_name')}}">
        <span style="color:red">
            @error('event_name')
            {{$message}}
            @enderror
        </span></br>
        <label>Event Status :</label></br>
        <select name="e_status" id="e_status" class="form-control" style="width: 400px;" value="{{old('e_status')}}"
            required>
            <option value="None"> None </option>
            <option value="New"> New </option>
            <option value="Cancelled"> Cancelled </option>
            <option value="Completed"> Completed </option>
        </select> </br>
        <label>Date :</label></br>
        <input type="date" name="e_date" id="e_date" class="form-control" style="width: 400px;"
            value="{{old('e_date')}}" required></br>
        <label>Time :</label></br>
        <input type="text" name="e_time" id="e_time" class="form-control" style="width: 400px;" placeholder="10:00 AM"
            value="{{old('e_time')}}" required></br>
        <label>Event Coordinator :</label></br>
        <input type="text" name="coordinator" id="coordinator" class="form-control" style="width: 400px;"
            value="{{old('coordinator')}}" required>
        <span style="color:red">
            @error('coordinator')
            {{$message}}
            @enderror
        </span></br>
        <label>Event Type :</label></br>
        <select name="type" id="type" class="form-control" style="width: 400px;" value="{{old('type')}}" required>
            <option value="None"> None </option>
            <option value="Sports Related"> Sports Related </option>
            <option value="Education"> Education </option>
            <option value="Other"> Other </option>
        </select> </br>
        <label>Location : </label></br>
        <input type="text" name="location" id="location" class="form-control" style="width: 400px;"
            value="{{old('location')}}" required>
        <span style="color:red">
            @error('location')
            {{$message}}
            @enderror
        </span></br>
        <label>Total Expence (Rs) : </label></br>
        <input type="number" name="tot_expence" id="tot_expence" class="form-control" style="width: 400px;"
            value="{{old('tot_expence')}}" required></br>
        <label>Event Picture : </label>
        <input class="form-control" name="photo" type="file" id="photo" style="width: 400px;" value="{{old('photo')}}"
            required>

        <div class="right">
            <img src="/images/IMG_1616.JPG" width="400px" height="600px"
                style="border-radius: 10px; box-shadow:3px 4px 3px grey" />
            </br>
            <input type="submit" value="SUBMIT EVENT" class="btn btn-success" style="width:50%; 
                font-size:23px; 
                font-weight:bold; 
                border-radius:10px; 
                background-color:#6EE56C; 
                color:#0A123D;
                border:none; 
                width:60%;
                margin-left:100px;
                font-family:'Candara'; 
                margin-bottom:20px;
                margin-top:40px;" /></br>
        </div>

</div>


</form>


</div>
@stop