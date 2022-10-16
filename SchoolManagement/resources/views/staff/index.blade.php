@extends('staff.layout')
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
                        <h2 style="text-align: center;">Details of The Staff Members</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/staff/create') }}" class="btn btn-success btn-sm"
                            title="Add New Staff member">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br />
                        <br />
                    </div>

                    <form action="" class="d-flex" style="margin: -15px;">
                        <div class="form-group">

                            <input type="search" name="search" id="" class="form-control me-2"
                                placeholder="Search by name " value="{{$search}}" style="margin: 3px;">

                        </div>
                        <button class="btn"
                            style="margin: 5px; background-color:navy; border: #66b3ff; color:white; width:100px; height:37px; text-align:center;">Search</b></button>
                        <a href="{{route('staff.index')}}">
                            <button class="btn btn-primary" type="button"
                                style="margin: 5px; background-color:#99ccff; color:white; border:#99ccff; width:100px; height:37px; text-align:center;">Reset</b></button>
                        </a>
                    </form>
                    <br></br></br></br>

                    @foreach($staff as $item)

                    <div class="card">
                        <img src="{{ asset($item->photo) }}" width='80' height='80' class="img img-responsive"
                            style="margin-top: 20px;margin-bottom:9px;border-radius:50%; border: 1px solid" />
                        <h5><b>{{ $item->name }}</b></h5>
                        <p class="title">{{ $item->contact_no }}</p>
                        <p>{{ $item->Email }}</p>

                        <a href="{{ url('/staff/' . $item->id) }}" title="View Student"><i class="fa fa-search"
                                aria-hidden="true"></i></a>
                        <form method="POST" action="{{ url('/staff' . '/' . $item->id) }}" accept-charset="UTF-8"
                            style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" onclick="return confirm(&quot;Confirm delete?&quot;)">Delete </button>
                        </form>
                        <a href="{{ url('/staff/' . $item->id . '/edit') }}" title="Edit Staff"><i class="fa fa-pencil"
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