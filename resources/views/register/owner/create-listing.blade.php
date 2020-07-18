@extends('layouts.no-footer-layout')

@section('title', 'Register')

@section('body-class','dynamic-bg')

@section('content')
<div class="progress" style="height: 20px;">
    <div class="progress-bar progress-bar-striped progress-bar-animated" aria-valuenow="90" aria-valuemin="0"
        aria-valuemax="100" style="width: 90%;">90%</div>
</div>
<section class="d-flex justify-content-center p-md-5">
    <div class="px-5 pb-5 pt-3 p-md-5 bg-white shadow2" style="width: 500px;">
        <form>
            <h4 class="text-center mb-5">Listing Details</h4>
            <h6 class="text-primary font-weight-bold">Description (optional)</h6>
            <p>A short paragraph about the listing, visible to all viewers. </p><textarea
                class="form-control"></textarea>
            <div class="form-row mb-4">
                <div class="col-sm-12">
                    <h6 class="text-primary font-weight-bold mt-3">Pictures</h6>
                    <p>Photos of room(s) or amenities. At least 1 required. </p>
                </div>
                <div class="col-sm-12 d-flex flex-row justify-content-between">
                    <div class="flex-fill bg-light border mr-2">
                        <p class="m-2">X</p>
                    </div>
                    <div class="flex-fill bg-light border mr-2">
                        <p class="m-2">X</p>
                    </div>
                    <div class="flex-fill bg-light border">
                        <p class="m-2">X</p>
                    </div>
                </div>
                <div class="col-sm-12 mt-4">
                    <div class="custom-file"><input type="file" id="validatedCustomFile"
                            class="custom-file-input"><label class="custom-file-label" for="validatedCustomFile">Select
                            File</label></div>
                </div>
            </div><button class="btn btn-primary btn-block mb-2" type="button"><i class="fas fa-plus mr-2"></i>Add
                Photos</button><button class="btn btn-primary btn-block" type="button"
                style="margin-top: 12px;">Continue</button>
        </form>
    </div>
</section>
@endsection