@extends('students.layout')
@section('content')

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/style.css">

    <style>
    .heading {
        text-align: center;
        text-shadow: 2px 2px #e1d3f5;
        font-weight: bold;
        font-size: 50px;
        margin-bottom: 40px;
        font-family: 'Candara';
    }

    #add_btn {
        font-family: 'Candara';
        font-size: 18px;
        margin-left: -28px;
    }

    #search_reset_btn {
        border: none;
        width: 100px;
        height: 37px;
        text-align: center;
        font-family: 'Candara';
        margin: 5px;
        font-size: 18px;
        font-weight: bold;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="">
                <div class="">
                    <div class="">
                        <h2 class="heading">Details of the Students</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/student/create') }}" class="btn btn-success btn-sm" title="Add New Student"
                            id="add_btn">
                            <i class="fa fa-plus" aria-hidden="true" style="margin-left:10px;"></i> Add New
                        </a>
                        <br />
                        <br />
                    </div>

                    <form action="" class="d-flex" style="margin: -15px;">
                        <div class="form-group">

                            <input type="search" name="search" id="" class="form-control me-2"
                                placeholder="Search by Index No " value="{{$search}}"
                                style="margin: 3px; font-family:'Candara'; font-size:18px;">
                        </div>
                        <button class="btn" id="search_reset_btn"
                            style="background-color:navy;color:white; margin-left:20px;">
                            SEARCH
                            </b>
                        </button>
                        <a href="{{route('student.index')}}">
                            <button class="btn btn-primary" type="button" id="search_reset_btn"
                                style="background-color:#99ccff;color:#0A123D;">
                                RESET
                                </b>
                            </button>
                        </a>
                    </form>
                    <br></br></br></br>


                    @foreach($students as $item)

                    <div class="card" style="margin-left:50px; margin-top:20px;">
                        <img src="{{ asset($item->photo) }}" width='80' height='80' class="img img-responsive"
                            style="margin-top: 20px;margin-bottom:9px;border-radius:50%; border: 1px solid" />
                        <h5><b>{{ $item->name }}</b></h5>
                        <p class="title">{{ $item->index }}</p>
                        <p>{{ $item->address }}</p>

                        <a href="{{ url('/student/' . $item->id) }}" title="View Student"><i class="fa fa-search"
                                aria-hidden="true"></i></a>
                        <form method="POST" action="{{ url('/student' . '/' . $item->id) }}" accept-charset="UTF-8"
                            style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" onclick="return confirm(&quot;Confirm delete?&quot;)">Delete </button>
                        </form>
                        <a href="{{ url('/student/' . $item->id . '/edit') }}" title="Edit Student"><i
                                class="fa fa-pencil" aria-hidden="true"></i></a>

                    </div>

                    @endforeach

                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    @endsection