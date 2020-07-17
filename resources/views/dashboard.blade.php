@extends('layouts.mainlayout')

@section('title','My Properties')

@section('body-class','bg-light')

@section('content')
<section class="d-flex flex-fill justify-content-center p-md-5">
    <div class="container mt-3 mt-md-0 p-0 p-md-4">
        <div class="d-flex flex-row flex-fill justify-content-between p-4 p-md-4 bg-white rounded-top mx-2 mt-3">
            <div class="mr-4">
                @foreach($properties as $property)
                <h4>Property:&nbsp; {{$property->id}}</h4>
                <h6 class="mb-2">{{$property->community}}, {{$property->parish}}</h6>
                @endforeach
            </div>
            <div class="d-flex flex-row flex-shrink-1 align-items-center flex-wrap mr-3"><button
                    class="btn btn-primary btn-light m-2 mr-md-4" type="button">&nbsp;Edit Property</button><button
                    class="btn btn-primary btn-primary m-2 mr-md-0" type="button"><i class="fas fa-plus"></i>&nbsp;New
                    Room</button><a href="#collapse-1" class="m-2 mr-md-4" data-toggle="collapse" aria-expanded="false"
                    aria-controls="collapse-1" role="button"><i class="fas fa-angle-down ml-2"
                        style="font-size:30px;"></i></a></div>
        </div>
        <div class="row pt-4 pt-md-0 rounded-bottom mx-2 collapsed" id="collapse-1" style="background-color: #d5e6f9;">

            @foreach($rooms as $room)
            <div class="col-sm-12 col-md-6 px-4 pb-2 p-md-4">
                <div class="card d-flex flex-row flex-grow-1 flex-wrap m-2 border-0 rounded shadow-sm"
                    style="border-bottom: 3px solid #2780e3;">
                    <div class="card-body">
                        <div class="d-flex flex-row justify-content-between">
                            <div class="d-flex">
                                <h4>Room {{$room->room_number}}</h4>
                            </div>
                            <h4>${{$room->rent}}</h4>
                        </div>

                        @if($room->status == "occupied")
                        <h4 class="card-title p-2 text-danger text-uppercase"
                            style="border-left: 10px solid red; margin-left: -20px; background-color: rgba(255, 0, 0, 0.05);">
                            Occupied</h4>
                        @else
                        <h4 class="card-title p-2 text-primary text-uppercase"
                            style="border-left: 10px solid #2780E3; margin-left: -20px; background-color: rgba(39, 128, 227, 0.05);">
                            VACANT</h4>
                        @endif


                        <div class="d-flex flex-row justify-content-between">
                            <p>{{$room->beds}} Bedroom</p>
                            <p>/</p>
                            <p>{{$room->bathroom}} Bath</p>
                            <p>/</p>
                            <p>{{$room->kitchen}} Kitchen</p>
                        </div>
                        <form>
                            <div class="form-row">
                                <div class="col-6"><button class="btn btn-primary btn-block btn-light mr-4"
                                        type="button">
                                        @if($room->status == "occupied")
                                        Mark Vacant
                                        @else
                                        Mark Occupied
                                        @endif


                                    </button></div>
                                <div class="col-6"><button class="btn btn-primary btn-block" type="button">Edit
                                        Details</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


@endsection