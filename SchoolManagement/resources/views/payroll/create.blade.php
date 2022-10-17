@extends('staff.layout')
@section('content')

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.min.js"></script>
    <style>
    .bigbox {
        border: none;
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 20px;
        background-color: #e9dfed;
        box-shadow: 3px 5px 2px #e1d3f5;
        width: 35%;
        display: flex;
        margin-left: 150px;
        margin-bottom: 50px;
    }

    .right {
        margin-left: 600px;
        margin-top: -450px;
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
<h2 class="heading"> Add
    New Payroll </h2>
<div class="bigbox">

    <form action="{{ url('payroll') }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}

        <div>
            <label>Staff's Name : </label></br>
            <!-- <input type="text" name="staff_name" id="staff_name" class="form-control" style="width: 400px;"
                value="{{old('staff_name')}}">
            <span style="color:red">
                @error('staff_name')
                {{$message}}
                @enderror
            </span> -->
            <select name="staff_name" id="staff_name" class="form-control" style="width: 400px;" required>
                <option value="None" disabled="true" selected="true">Select the Staff Name</option>
                @foreach($classname_array as $data)
                <option value="{{$data->name}}">{{$data->name}}</option>
                @endforeach
            </select>
            <div id="staffList"></div>
            <div>
                {{ csrf_field() }}
            </div>
        </div>
        <script>
        $(document).ready(function() {

            $('#staff_name').keyup(function() {
                var query = $(this).val();
                if (query != '') {
                    var _token = $('input[staff_name="_token"]').val();
                    $.ajax({
                        url: "{{ route('autocomplete.fetch') }}",
                        method: "GET",
                        data: {
                            query: query,
                            _token: _token
                        },
                        success: function(data) {
                            $('#staffList').fadeIn();
                            $('#staffList').html(data);
                        }
                    });
                }
            });

            $(document).on('click', 'li', function() {
                $('#staff_name').val($(this).text());
                $('#staffList').fadeOut();
            });

        });
        </script>
        </br>
        <!-- <label>Designation : </label></br>
        <input type="text" name="designation" id="designation" class="form-control" style="width: 400px;"
            value="{{old('designation')}}">
        <span style="color:red">
            @error('designation')
            {{$message}}
            @enderror
        </span></br> -->
        <label>Profile Picture : </label>
        <input class="form-control" name="photo" type="file" id="photo" style="width: 400px;" value="{{old('photo')}}"
            required></br>

        <label>Select Month :</label> </br>
        <!-- <input type="text" name="month" id="month"  class="form-control" style="width: 400px;"></br> -->
        <select name="month" id="month" class="form-control" style="width: 400px;" value="{{old('month')}}" required>
            <option value="None"> None </option>
            <option value="January"> January </option>
            <option value="February"> February </option>
            <option value="March"> March </option>
            <option value="April"> April </option>
            <option value="May"> May </option>
            <option value="June"> June </option>
            <option value="July"> July </option>
            <option value="August"> August </option>
            <option value="September"> September </option>
            <option value="October"> October </option>
            <option value="November"> November </option>
            <option value="December"> December </option>
        </select>
        <span style="color:red">
            @error('month')
            {{$message}}
            @enderror
        </span></br>
        <label>Year : </label></br>
        <input type="number" name="year" id="year" class="form-control" style="width: 400px;" value="{{old('year')}}">
        <span style="color:red">
            @error('year')
            {{$message}}
            @enderror
        </span></br>
        <label>Basic Salary : </label></br>
        <input type="number" name="salary" id="salary" class="form-control" style="width: 400px;"
            value="{{old('salary')}}">
        <span style="color:red">
            @error('salary')
            {{$message}}
            @enderror
        </span></br>

        <input type="submit" value="ADD PAYROLL" class="btn btn-success" style="width:50%; 
            font-size:23px; 
            font-weight:bold; 
            border-radius:10px; 
            background-color:#6EE56C; 
            color:#0A123D; 
            border:none;
            font-family:'Candara';
            margin-left:100px;"></br>
    </form>
</div>
<div class="right">
    <img src="/images/freelancer.png" width="500px" height="500px"
        style="border-radius: 10px; margin-top:-100px; margin-left:50px;" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
</div>
@stop