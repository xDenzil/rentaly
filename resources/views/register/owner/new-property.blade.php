@extends('layouts.no-footer-layout')

@section('title', 'Register - Add Property')

@section('body-class','dynamic-bg')

@section('content')
<div class="progress" style="height: 20px;">
    <div class="progress-bar progress-bar-striped progress-bar-animated" aria-valuenow="50" aria-valuemin="0"
        aria-valuemax="100" style="width: 50%;">50%</div>
</div>
<section class="d-flex justify-content-center p-md-5">
    <div class="px-5 pb-5 pt-3 p-md-5 bg-white shadow2" style="width: 500px;">
        <form>
            <h4 class="text-center">Add Property</h4><label>Address</label>
            <div class="form-group"><input class="form-control mb-2" type="text" placeholder="Street/Road"></div>
            <div class="form-group"><input class="form-control mb-2" type="text" placeholder="Community/Town"></div>
            <div class="form-group"><input class="form-control mb-2" type="text" placeholder="Parish"></div>
        </form><button class="btn btn-primary btn-block" type="button" style="margin-top: 12px;">Continue</button>
    </div>
</section>
@endsection