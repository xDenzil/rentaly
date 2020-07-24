@extends('layouts.mainlayout')

@section('title','View Property')

@section('body-class','bg-light')

@section('content')

@foreach($properties as $property)
<section class="p-md-2">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-8 m-0 p-0">
                <div class="card rounded border-0 m-0 mb-4 m-md-2 m-lg-5">
                    <div class="position-relative">
                        <a class="btn btn-primary position-absolute rounded-circle mt-3 ml-3"
                            href="/map/{{$property->id}}" style="width: 40px; height: 40px;"><i
                                class="fas fa-map-marker-alt"></i></a><span
                            class="position-absolute px-4 py-2 sagi-green text-white rounded"
                            style="bottom:0; right:15px; margin-bottom: -15px;">Listed:
                            {{$property->list_date}}</span>

                        @if($property->vr == 1)
                        <a href="https://rentaly-vrroomdemo.herokuapp.com"
                            class="position-absolute px-4 bg-danger py-2 text-white rounded"
                            style="bottom:0; right:15px; margin-bottom: -60px; text-decoration:none;">VR</a>
                        @endif

                        <img class="card-img card-img d-block rounded-top" src="../home_imgs/{{$property->thumb_img}}">
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

                            @foreach($galleries as $gallery)
                            <img id="myImg" class="fit mr-2 mb-2 rounded" src="../home_imgs/{{$gallery->img_url}}">
                            @endforeach

                            <!-- The Modal -->
                            <div id="myModal" class="modal">

                                <!-- The Close Button -->
                                <span class="close">&times;</span>

                                <!-- Modal Content (The Image) -->
                                <img class="modal-content" id="img01">

                            </div>



                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 p-0 m-0">
                <div class="card rounded border-0 m-0 mb-4 m-md-2 m-lg-5"><button
                        class="btn btn-primary rounded-circle mt-3 ml-3 mx-auto" type="button"
                        style="width: 80px; height: 80px;"><i class="fas fa-user-circle"
                            style="font-size:2em;"></i></button>
                    @foreach($owners as $owner)
                    <div class="card-body">
                        <p class="m-0 p-0 text-primary">Owner</p>
                        <h4 class="card-title">{{$owner->fname}} {{$owner->lname}}</h4>
                        <h6 class="card-subtitle mb-2">{{$owner->id}}</h6>
                        <div>
                            <a class="btn btn-primary btn-block mr-2 rounded"
                                href="https://wa.me/{{$owner->id}}?text=Good%20Day%2C%20I%20saw%20your%20property%20on%20Rentaly%20and%20I%27m%20interested%20in%20viewing."
                                target="_blank"><i class="fa fa-whatsapp"></i>&nbsp; Whatsapp</a>

                            <a class="btn btn-primary btn-block mr-2 rounded text-white" href="tel:{{$owner->id}}"
                                target="_blank"><i class="fa fa-phone"></i>&nbsp;
                                Call</a></div>
                    </div>
                    @endforeach
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
                            <h6>{{$comment->fname}} {{$comment->lname}}</h6><span class="text-warning">

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

            @foreach($similars as $similar)
            <div class="col-sm-12 col-md-4">
                <div class="card rounded m-0 mb-2 border-0" style="cursor: pointer;"
                    onclick="location.href='/feed/{{$similar->id}}'">
                    <div class="position-relative"><a href="/map/{{$similar->id}}"
                            class="btn btn-light position-absolute rounded-circle mt-3 ml-3"
                            style="width: 40px; height: 40px;"><i
                                class="fas fa-map-marker-alt text-primary"></i></a><span
                            class="position-absolute px-4 py-2 sagi-green text-white rounded"
                            style="bottom:0; right:15px; margin-bottom: -15px;">${{$similar->min_rent}} -
                            ${{$similar->max_rent}}</span><img
                            class="home-thumb card-img card-img w-100 d-block rounded-top"
                            src="../home_imgs/{{$similar->thumb_img}}" style="height: 200px;"></div>
                    <div class="card-body">
                        <h4 class="card-title">{{$similar->community}}</h4>
                        <h6 class="text-muted card-subtitle mb-2">{{$similar->parish}}</h6>
                        <p class="flex-shrink-1 card-text">
                            @if($similar->max_beds > 1)
                            Single &amp; Shared Rooms
                            @else
                            Single Rooms Only
                            @endif
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endforeach



<script>
    // Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}

</script>

@endsection