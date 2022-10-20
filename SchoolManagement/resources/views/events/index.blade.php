@extends('students.layout')
@section('content')

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="">
                <div class="">
                    <div class="">
                        <h2 style="text-align: center;">Details of The Events</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/event/create') }}" class="btn btn-success btn-sm" title="Add New Student">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br />
                        <br />
                    </div>

                    <form action="" class="d-flex" style="margin: -15px;">
                        <div class="form-group">

                            <input type="search" name="search" id="" class="form-control me-2"
                                placeholder="Search by event name " value="{{$search}}" style="margin: 3px;">

                        </div>
                        <button class="btn"
                            style="margin: 5px; background-color:navy; border: #66b3ff; color:white; width:100px; height:37px; text-align:center;">Search</b></button>
                        <a href="{{route('event.index')}}">
                            <button class="btn btn-primary" type="button"
                                style="margin: 5px; background-color:#99ccff; color:white; border:#99ccff; width:100px; height:37px; text-align:center;">Reset</b></button>
                        </a>
                    </form>
                    <br></br></br></br>

                    @foreach($events as $item)

                    <div class="card">
                        <img src="{{ asset($item->photo) }}" width='80' height='80' class="img img-responsive"
                            style="margin-top: 20px;margin-bottom:9px;border-radius:10%; border: 1px solid" />
                        <h5><b>{{ $item->event_name }}</b></h5>
                        <p class="title">{{ $item->e_date}}</p>
                        <p>{{ $item->e_time }}</p>

                        <a href="{{ url('/event/' . $item->id) }}" title="View Event"><i class="fa fa-search"
                                aria-hidden="true"></i></a>
                        <form method="POST" action="{{ url('/event' . '/' . $item->id) }}" accept-charset="UTF-8"
                            style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" onclick="return confirm(&quot;Confirm delete?&quot;)">Delete </button>
                        </form>
                        <a href="{{ url('/event/' . $item->id . '/edit') }}" title="Edit Event"><i class="fa fa-pencil"
                                aria-hidden="true"></i></a>

                    </div>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    @endsection