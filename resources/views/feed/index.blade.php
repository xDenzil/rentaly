@extends('layouts.mainlayout')

@section('title','Property Name')

@section('body-class','bg-light')

@section('content')

@foreach($properties as $property)
<section class="p-md-2">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-8 m-0 p-0">
                <div class="card rounded border-0 m-0 mb-4 m-md-2 m-lg-5">
                    <div class="position-relative">
                        <button class="btn btn-primary position-absolute rounded-circle mt-3 ml-3" type="button"
                            style="width: 40px; height: 40px;"><i class="fas fa-map-marker-alt"></i></button><span
                            class="position-absolute px-4 py-2 bg-primary text-white rounded"
                            style="bottom:0; right:15px; margin-bottom: -15px;">Listed:
                            {{$property->list_date}}</span><img class="card-img card-img d-block rounded-top"
                            src="../home_imgs/{{$property->img_url}}">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">{{$property->community}}, {{$property->parish}}</h4>
                        <h6 class="text-muted card-subtitle mb-2">Kingston</h6>
                        <p class="flex-shrink-1 card-text">{{$property->description}}</p>
                        <div class="d-flex flex-row flex-wrap">

                            @foreach($features as $feature)
                            <button class="btn btn-light border border-primary rounded m-2" type="button"
                                disabled="disabled">{{$feature->tag}}</button>
                            @endforeach

                        </div>
                        <h4 class="card-title mt-3">Current Available Rooms</h4>
                        <div class="d-flex flex-row flex-wrap">
                            @foreach($rooms as $room)
                            <div class="card rounded m-2 bg-primary text-white">
                                <div class="card-body">
                                    <p class="card-text m-0">
                                        @if($room->beds > 1)
                                        Shared Room
                                        @else
                                        Single Room
                                        @endif
                                    </p>
                                    <p class="card-text m-0">{{$room->bathroom}} Bathroom</p>
                                    <p class="card-text m-0">{{$room->kitchen}} Kitchen</p>
                                    <h4 class="card-title mt-2 font-weight-normal">
                                        ${{ number_format($room->rent, 2, '.', ',') }}</h4>
                                </div>
                            </div>
                            @endforeach

                        </div>
                        <h4 class="card-title mt-3">Photos</h4>
                        <div class="d-flex flex-row flex-wrap mb-2 p-2">
                            <img class="bg-light mr-2 mb-2 rounded" style="height: 120px; width: 120px;">
                            <img class="bg-light mr-2 mb-2 rounded" style="height: 120px; width: 120px;">
                            <img class="bg-light mr-2 mb-2 rounded" style="height: 120px; width: 120px;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 p-0 m-0">
                <div class="card rounded border-0 m-0 mb-4 m-md-2 m-lg-5"><button
                        class="btn btn-primary rounded-circle mt-3 ml-3" type="button"
                        style="width: 80px; height: 80px;"><i class="fas fa-user-circle"
                            style="font-size:2em;"></i></button>
                    <div class="card-body">
                        <h4 class="card-title">Mr. Francis</h4>
                        <h6 class="card-subtitle mb-2">876-123-4567</h6>
                        <div class="d-flex flex-row justify-content-between align-items-center"><button
                                class="btn btn-primary w-50 mr-2 rounded" type="button"><i
                                    class="fa fa-envelope"></i>&nbsp; Email</button><button
                                class="btn btn-primary w-50 rounded" type="button"><i class="fa fa-phone"></i>&nbsp;
                                Call</button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <h4 class="m-4">Comments</h4>
        <div class="row p-md-4">

            @if(count($comments)>1)
            @foreach($comments as $comment)
            <div class="col-sm-6 col-md-6 p-0">
                <div class="card rounded m-2 border-0">
                    <div class="card-body">
                        <div class="d-flex flex-row justify-content-between">
                            <h6>{{$comment->fname}} {{$comment->lname}}</h6><span class="text-primary">

                                @for($i = 0; $i < $comment->rating; $i++)
                                    <i class="fa fa-star mr-1"></i>
                                    @endfor

                                    @for($i = 5; $i > $comment->rating; $i--)
                                    <i class="fa fa-star-o mr-1"></i>
                                    @endfor
                        </div>
                        <h6 class="text-muted card-subtitle mb-2">{{$comment->date}}</h6>
                        <p class="flex-shrink-1 card-text">{{$comment->comment}}</p>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <p class="m-4">There aren't any comments on this property as yet.</p>
            @endif

        </div>
    </div>
    <div class="container">
        <h4 class="m-4">Similar Listings</h4>
        <div class="row p-md-4">
            <div class="col-sm-12 col-md-4">
                <div class="card rounded m-0 mb-2 border-0">
                    <div class="position-relative"><button
                            class="btn btn-primary position-absolute rounded-circle mt-3 ml-3" type="button"
                            style="width: 40px; height: 40px;"><i class="fas fa-map-marker-alt"></i></button><span
                            class="position-absolute px-4 py-2 bg-primary text-white rounded"
                            style="bottom:0; right:15px; margin-bottom: -15px;">$18,000 - $24,000</span><img
                            class="home-thumb card-img card-img w-100 d-block rounded-top" style="height: 150px;"></div>
                    <div class="card-body">
                        <h4 class="card-title">Mona Heights</h4>
                        <h6 class="text-muted card-subtitle mb-2">Kingston</h6>
                        <p class="flex-shrink-1 card-text">Single &amp; Shared Rooms</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="card rounded m-0 mb-2 border-0">
                    <div class="position-relative"><button
                            class="btn btn-primary position-absolute rounded-circle mt-3 ml-3" type="button"
                            style="width: 40px; height: 40px;"><i class="fas fa-map-marker-alt"></i></button><span
                            class="position-absolute px-4 py-2 bg-primary text-white rounded"
                            style="bottom:0; right:15px; margin-bottom: -15px;">$18,000 - $24,000</span><img
                            class="home-thumb card-img card-img w-100 d-block rounded-top" style="height: 150px;"></div>
                    <div class="card-body">
                        <h4 class="card-title">Mona Heights</h4>
                        <h6 class="text-muted card-subtitle mb-2">Kingston</h6>
                        <p class="flex-shrink-1 card-text">Single &amp; Shared Rooms</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="card rounded m-0 mb-2 border-0">
                    <div class="position-relative"><button
                            class="btn btn-primary position-absolute rounded-circle mt-3 ml-3" type="button"
                            style="width: 40px; height: 40px;"><i class="fas fa-map-marker-alt"></i></button><span
                            class="position-absolute px-4 py-2 bg-primary text-white rounded"
                            style="bottom:0; right:15px; margin-bottom: -15px;">$18,000 - $24,000</span><img
                            class="home-thumb card-img card-img w-100 d-block rounded-top" style="height: 150px;"></div>
                    <div class="card-body">
                        <h4 class="card-title">Mona Heights</h4>
                        <h6 class="text-muted card-subtitle mb-2">Kingston</h6>
                        <p class="flex-shrink-1 card-text">Single &amp; Shared Rooms</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endforeach

@endsection