@extends('layouts.mainlayout')

@section('title', 'Property Name')

@section('body-class','bg-light')

@section('content')
<section class="flex-fill p-md-5">
    <div class="container d-flex flex-row justify-content-between flex-wrap">
        <div class="row">
            <div class="col-sm-12 col-md-4 p-0 m-0">
                <div class="card rounded border-0 m-0 mb-4 m-md-2 m-lg-5"><button
                        class="btn btn-primary rounded-circle mt-3 ml-3" type="button"
                        style="width: 80px; height: 80px;"><i class="fas fa-user-circle"
                            style="font-size:2em;"></i></button>
                    <div class="card-body">
                        <h4 class="card-title">Denzil Williams</h4>
                        <h6 class="card-subtitle mb-2">Member since&nbsp;</h6><span class="d-block mb-2"><a
                                href="#">Notifications</a></span><span class="d-block mb-2"><a href="#">Change Email /
                                Password</a></span><span class="d-block mb-2"><a href="#">Upgrade Account</a></span>
                        <span class="d-block mb-2"><a href="#">Logout</a></span>
                        <div class="d-flex flex-row justify-content-between align-items-center"><button
                                class="btn btn-primary w-50 mr-2 rounded mt-2" type="button">&nbsp;Pay Rent</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-8 m-0 p-0">
                <div class="card rounded border-0 m-0 mb-4 m-md-2 m-lg-5">
                    <div class="card-body">
                        <h4 class="card-title">Match Settings</h4>
                        <h6 class="text-muted card-subtitle mb-2">New listings with these characters will be
                            automatically sent to you.</h6>
                        <div class="d-flex flex-row flex-wrap"><button
                                class="btn btn-light border border-primary rounded m-2" type="button"
                                disabled="disabled">Utilities Included</button><button
                                class="btn btn-light border border-primary rounded m-2" type="button"
                                disabled="disabled">Washing Machine</button>
                            <button class="btn btn-light active border border-primary rounded m-2" type="button"
                                disabled="disabled">Common Area</button><button
                                class="btn btn-light active border border-primary rounded m-2" type="button"
                                disabled="disabled">Single Bathroom</button><button
                                class="btn btn-light active border border-primary rounded m-2" type="button"
                                disabled="disabled">Single Room</button></div><button
                            class="btn btn-primary w-50 rounded m-2" type="button">Update Filters</button>
                    </div>
                </div>
                <div class="card rounded border-0 m-0 mb-4 m-md-2 m-lg-5">
                    <div class="card-body">
                        <h4 class="card-title">For You</h4>
                        <h6 class="text-muted card-subtitle mb-2">Updated as at 7/17/20 3:05:09</h6>
                        <div class="row p-2">
                            <div class="col-sm-12 col-md-6 p-0">
                                <div class="card rounded m-2"><span
                                        class="position-absolute bg-warning px-2 text-white rounded small"
                                        style="top:0; right:15px; margin-top: 15px;">New</span>
                                    <div class="card-body">
                                        <h4 class="card-title">Mona Heights</h4>
                                        <h6 class="text-muted card-subtitle mb-2">Kingston</h6>
                                        <p class="flex-shrink-1 card-text">$20,000 - $32,000</p><button
                                            class="btn btn-primary rounded" type="button">View Property</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 p-0">
                                <div class="card rounded m-2">
                                    <div class="card-body">
                                        <h4 class="card-title">Tavern</h4>
                                        <h6 class="text-muted card-subtitle mb-2">Kingston</h6>
                                        <p class="flex-shrink-1 card-text">$18,000 - $22,000</p><button
                                            class="btn btn-primary rounded" type="button">View Property</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection