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
        width: 90%;
        display: flex;
        height: 800px;
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
<h2 style="text-align: center; text-shadow: 2px 2px #e1d3f5">-- Update Event --</h2>
<div class="bigbox">

    <form action="{{ url('event/' .$events->id) }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        @method("PATCH")

        <label>Event Name:</label></br>
        <input type="text" name="event_name" value="{{$events->event_name}}" id="event_name" class="form-control"
            style="width: 400px;" value="{{old('event_name')}}">
        <span style="color:red">
            @error('event_name')
            {{$message}}
            @enderror
        </span></br>
        <label>Date:</label></br>
        <input type="date" name="e_date" value="{{$events->e_date}}" id="e_date" class="form-control"
            style="width: 400px;" value="{{old('e_date')}}"></br>
        <label>Time:</label></br>
        <input type="text" name="e_time" value="{{$events->e_time}}" id="e_time" class="form-control"
            style="width: 400px;" value="{{old('e_time')}}"></br>
        <label>Event Status:</label></br>
        <input type="text" name="e_status" value="{{$events->e_status}}" id="e_status" class="form-control"
            style="width: 400px;" value="{{old('e_status')}}"></br>
        <label>Event Coordinator:</label></br>
        <input type="text" name="coordinator" value="{{$events->coordinator}}" id="coordinator" class="form-control"
            style="width: 400px;" value="{{old('coordinator')}}">
        <span style="color:red">
            @error('coordinator')
            {{$message}}
            @enderror
        </span></br>
        <label>Event Type:</label>
        <input class="form-control" name="type" type="text" value="{{$events->type}}" id="type" style="width: 400px;"
            value="{{old('type')}}"> </br>
        <label>Location:</label></br>
        <input type="text" name="location" value="{{$events->location}}" id="location" class="form-control"
            style="width: 400px;" value="{{old('location')}}">
        <span style="color:red">
            @error('location')
            {{$message}}
            @enderror
        </span></br>
        <label>Total expence (Rs):</label></br>
        <input type="number" name="tot_expence" value="{{$events->tot_expence}}" id="tot_expence" class="form-control"
            style="width: 400px;" value="{{old('tot_expence')}}"></br>
        <label>Event Sample Picture:</label></br>
        <input class="form-control" name="photo" type="file" id="photo" value="{{$events->photo}}" style="width: 400px;"
            value="{{old('photo')}}">

        <div class="right">
            <img src="{{ $events->photo}}" width="380px" height="280px" style="border-radius: 10%;" />
        </div>
        <input type="submit" value="Update Event" class="btn btn-success"
            style="width:28%; font-size:18px; margin-left:540px; margin-top:150px;"></br>
    </form>
</div>
@stop