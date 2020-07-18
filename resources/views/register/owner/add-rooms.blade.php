@extends('layouts.no-footer-layout')

@section('title', 'New Property - Add Rooms')

@section('body-class','dynamic-bg')

@section('content')
<div class="progress" style="height: 20px;">
    <div class="progress-bar progress-bar-striped progress-bar-animated" aria-valuenow="75" aria-valuemin="0"
        aria-valuemax="100" style="width: 75%;">75%</div>
</div>
<section class="d-flex justify-content-center p-md-5">
    <div class="px-5 pb-5 pt-3 p-md-5 bg-white shadow2" style="width: 500px;">
        <form>
            <h4 class="text-center">Add Rooms</h4>
            <p class="mt-3">Add details for each room, this is to allow rooms to be de-listed or re-listed separately
                when occupied or vacant. </p><label><i class="fas fa-bed mr-2 text-primary"></i>Beds</label><input
                class="form-control mb-4 border-primary" type="number" value="1" min="1" max="4"><label><i
                    class="fas fa-bath mr-2 text-primary"></i>Bathroom</label>
            <div class="form-row mb-4">
                <div class="col-md-6"><button class="btn btn-outline-primary btn-block mb-2"
                        type="button">Private</button></div>
                <div class="col-md-6"><button class="btn btn-outline-primary btn-block mb-2"
                        type="button">Shared</button></div>
            </div><label><i class="fas fa-utensils mr-2 text-primary"></i>Kitchen</label>
            <div class="form-row mb-4">
                <div class="col-md-6"><button class="btn btn-outline-primary btn-block mb-2"
                        type="button">Private</button></div>
                <div class="col-md-6"><button class="btn btn-outline-primary btn-block mb-2"
                        type="button">Shared</button></div>
            </div>
            <div class="form-row mb-4">
                <div class="col"><label><i class="fas fa-dollar-sign mr-2 text-primary"></i>Cost</label><input
                        class="form-control border-primary" type="number"></div>
            </div><button class="btn btn-primary btn-block mb-2" type="button"><i class="fas fa-plus mr-2"></i>Add
                Room</button><button class="btn btn-primary btn-block" type="button"
                style="margin-top: 12px;">Continue</button>
        </form>
    </div>
</section>
@endsection