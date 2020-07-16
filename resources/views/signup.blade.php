@extends('layouts.mainlayout')

@section('title','Sign Up')

@section('body-class','dynamic-bg')

@section('content')

<div class="progress" style="height: 20px;">
    <div class="progress-bar progress-bar-striped progress-bar-animated" aria-valuenow="35" aria-valuemin="0"
        aria-valuemax="100" style="width: 35%;">35%</div>
</div>
<section class="d-flex justify-content-center p-md-5">
    <div class="px-5 pb-5 pt-3 p-md-5 bg-white shadow2" style="width: 500px;">
        <form>
            <h4 class="text-center">What are you loooking for?</h4>
            <div class="form-group text-center"><button class="btn btn-outline-primary m-2" type="button"
                    data-toggle="button" aria-pressed="false">Gated Community</button><button
                    class="btn btn-outline-primary m-2" type="button" data-toggle="button" aria-pressed="false">Common
                    Area</button>
                <button class="btn btn-outline-primary m-2" type="button">Air Conditioning</button><button
                    class="btn btn-outline-primary m-2" type="button">Utilities Included</button><button
                    class="btn btn-outline-primary m-2" type="button">Washing Machine</button><button
                    class="btn btn-outline-primary m-2" type="button">Single Room</button><button
                    class="btn btn-outline-primary m-2" type="button">Shared Room</button><button
                    class="btn btn-outline-primary m-2" type="button">Private Bathroom</button><button
                    class="btn btn-outline-primary m-2" type="button">Private Kitchen</button><button
                    class="btn btn-outline-primary m-2" type="button">Car Parking</button></div>
        </form>
        <p class="text-center small">Get email updates when new listings <br>match your criteria. <br>These can be
            adjusted later.</p><button class="btn btn-primary btn-block" type="button"
            style="margin-top: 50px;">Skip</button>
    </div>
</section>

@endsection