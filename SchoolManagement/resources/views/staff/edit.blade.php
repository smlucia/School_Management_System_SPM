@extends('staff.layout')
@section('content')
<head>
    <style>
           .bigbox {
            border:none;
            border-radius: 10px;
            padding:20px;
            margin-bottom:20px;
            background-color: #e9dfed;
            box-shadow: 3px 5px 2px #e1d3f5;
            width: 90%;
            display: flex;
}
.right{
            margin-left: 500px;
            margin-top: -510px;
            margin-bottom: 50px;

        }
        label{

            font-weight: 600;
        }
    </style>
</head>
<h2 style="text-align: center; text-shadow: 2px 2px #e1d3f5">-- Update Member Details--</h2>
<div class="bigbox">

      <form action="{{ url('staff/' .$staff->id) }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$staff->id}}" id="id" style="width: 400px;" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$staff->name}}" class="form-control" style="width: 400px;" value="{{old('name')}}">
        <span style="color:red">
            @error('name')
            {{$message}}
            @enderror
        </span></br>
        <label>Contact Number</label></br>
        <input type="text" name="contact_no" id="contact_no" value="{{$staff->contact_no}}" class="form-control" style="width: 400px;" value="{{old('contact_no')}}">
        <span style="color:red">
            @error('contact_no')
            {{$message}}
            @enderror
        </span></br>
        <label>NIC</label></br>
        <input type="text" name="NIC" id="NIC" value="{{$staff->NIC}}" class="form-control" style="width: 400px;" readonly></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$staff->address}}" class="form-control" style="width: 400px;" value="{{old('address')}}">
        <span style="color:red">
            @error('address')
            {{$message}}
            @enderror
        </span></br>
        <label>DOB</label></br>
        <input type="text" name="DOB" id="DOB" value="{{$staff->DOB}}" class="form-control" style="width: 400px;" readonly></br>
        <label>Gender</label></br>
        <input type="text" name="gender" id="gender" value="{{$staff->gender}}" class="form-control" style="width: 400px;" readonly></br>


        <div class="right">
        <label>Email</label></br>
        <input type="text" name="Email" id="Email" value="{{$staff->Email}}" class="form-control" style="width: 400px;" value="{{old('Email')}}">
        <span style="color:red">
            @error('Email')
            {{$message}}
            @enderror
        </span></br>
        <label>F.A.D</label></br>
        <input type="text" name="First_appoinment_date" id="First_appoinment_date" style="width: 400px;" value="{{$staff->First_appoinment_date}}" class="form-control" readonly></br>
        <label>Desigantion</label></br>
        <input type="text" name="designation" id="designation" value="{{$staff->designation}}" class="form-control" style="width: 400px;" value="{{old('designation')}}">
        <span style="color:red">
            @error('designation')
            {{$message}}
            @enderror
        </span></br>
        <label>Type</label></br>
        <input type="text" name="type" id="type" value="{{$staff->type}}" class="form-control" style="width: 400px;" value="{{old('type')}}"></br>
        <label>Distance from home to school (km)</label></br>
        <input type="text" name="distance" id="distance" value="{{$staff->distance}}" class="form-control" style="width: 400px;" value="{{old('distance')}}">
        <span style="color:red">
            @error('distance')
            {{$message}}
            @enderror
        </span></br>
        <label>Profile Picture</label>
        <input class="form-control" name="photo" type="file" id="photo" value="{{$staff->photo}}" style="width: 400px;" value="{{old('photo')}}">
        </div>


        <input type="submit" value="Update Details" class="btn btn-success" style="width:28%; font-size:18px; margin-left:150px;"></br>
    </form>
    </div>

@stop
