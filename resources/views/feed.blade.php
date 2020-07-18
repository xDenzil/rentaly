@extends('layouts.mainlayout')

@section('title', 'Feed')

@section('body-class','bg-light')

@section('content')
<section>
    <div class="container mt-4 mt-md-5">
        <div class="card border-0 rounded">
            <div class="card-body">
                <form
                    class="d-flex flex-row justify-content-between flex-wrap flex-sm-wrap flex-md-wrap flex-lg-nowrap flex-xl-nowrap">
                    <a class="btn btn-primary m-2 rounded" href="/map"><i
                            class="fas fa-map-marker-alt text-white mr-2"></i>Find Near
                        Me</a><button class="btn btn-light m-2 rounded" type="button">Single Room</button><button
                        class="btn btn-light m-2 rounded" type="button">Shared Room</button>
                    <input class="form-control align-items-start m-2 rounded" type="text" placeholder="Where?">
                    <div class="input-group align-items-start m-2">
                        <div class="input-group-prepend"><span class="input-group-text rounded-left">$</span></div>
                        <input class="form-control rounded-right" type="text" placeholder="Min Price">
                    </div>
                    <div class="input-group align-items-start m-2">
                        <div class="input-group-prepend"><span class="input-group-text rounded-left">$</span></div>
                        <input class="form-control rounded-right" type="text" placeholder="Max Price">
                    </div>
                    <button class="btn text-white m-2 rounded sagi-green" type="button">Search Homes</button>
                </form>
            </div>
        </div>
    </div>
</section>
<section class="flex-fill p-md-5">
    <div class="container">
        <div class="row">

            @if(count($properties)>1)
            @foreach($properties as $property)
            <div class="col-sm-12 col-md-4 mb-0 mb-md-4">
                <div class="card rounded m-2 m-md-0 border-0" style="cursor: pointer;"
                    onclick="location.href='feed/{{$property->id}}'">
                    <div class=" position-relative"><a class="btn bg-white position-absolute rounded-circle mt-3 ml-3"
                            href="/map/{{$property->id}}" style="width: 40px; height: 40px;"><i
                                class="fas fa-map-marker-alt"></i></a><span
                            class="position-absolute px-4 py-2 bg-primary text-white rounded"
                            style="bottom:0; right:15px; margin-bottom: -15px;">${{$property->min_rent}} -
                            ${{$property->max_rent}}</span><img
                            class="home-thumb card-img card-img w-100 d-block rounded-top"
                            src="home_imgs/{{$property->thumb_img}}">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">{{$property->community}}</h4>
                        <h6 class="text-muted card-subtitle mb-2">{{$property->parish}}</h6>
                        <div class="d-flex flex-row justify-content-between align-items-center">
                            <p class="flex-shrink-1">
                                @if($property->max_beds > 1)
                                Single &amp; Shared Rooms
                                @else
                                Single Rooms Only
                                @endif

                            </p>
                            <div class="flex-shrink-0"><button class="btn btn-link" type="button"><i
                                        class="fas fa-share text-primary"></i></button><button class="btn btn-link"
                                    type="button"><i class="far fa-heart text-danger"></i></button></div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <p>No properties available.</p>
            @endif

        </div>
    </div>
</section>

@endsection