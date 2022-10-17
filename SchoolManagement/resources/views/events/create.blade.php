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
        height: 800px;
    }

    .right {
        margin-left: 500px;
        margin-top: -700px;
        margin-bottom: 100px;

    }

    label {

        font-weight: 600;
    }
    </style>
</head>
<h2 style="text-align: center; text-shadow: 2px 2px #e1d3f5">-- Add New Event --</h2>
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
                </div>

        </div>

        <input type="submit" value="Submit Event" class="btn btn-success"
            style="width:28%; font-size:18px; margin-left:550px; margin-bottom:20px;"></br>
    </form>


</div>

@stop


