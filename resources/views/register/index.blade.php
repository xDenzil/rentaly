@extends('layouts.no-footer-layout')

@section('title', 'Register')

@section('body-class','dynamic-bg')

@section('content')
<div class="progress" style="height: 20px;">
    <div class="progress-bar progress-bar-striped progress-bar-animated" aria-valuenow="15" aria-valuemin="0"
        aria-valuemax="100" style="width: 15%;">15%</div>
</div>
<section class="d-flex justify-content-center p-md-5">
    <div class="px-5 pb-5 pt-3 p-md-5 bg-white shadow2" style="width: 500px;">
        <div class="progress d-none">
            <div class="progress-bar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" role="progressbar"></div>
        </div>
        <form action="/register/u/interests" method="GET">
            <h4 class="text-center">Create an Account</h4><label>I am a..</label>
            <div class="form-row mb-2">
                <div class="col-md-6"><button class="btn btn-primary btn-block mb-2" type="button">I am a
                        student</button></div>
                <div class="col-md-6"><button class="btn btn-outline-primary btn-block mb-2" type="button">I am a Home
                        Owner</button></div>
            </div><label>Personal</label>
            <div class="form-group"><input class="form-control mb-2" type="text" placeholder="First Name"></div>
            <div class="form-group"><input class="form-control mb-2" type="text" placeholder="Last Name"></div>
            <label>Account</label>
            <div class="form-group"><input class="form-control mb-2" type="text" placeholder="Email Address"></div>
            <div class="form-group"><input class="form-control mb-2" type="text" placeholder="Password"></div>
            <div class="form-group"><input class="form-control mb-2" type="text" placeholder="Confirm Password"></div>
        </form>
        <p class="text-center small">By creating an account you agree to our<br>Terms of Service and Privacy Policy.</p>
        <a href="/register/u/interests" class="btn btn-primary btn-block" style="margin-top: 12px;">Continue</a>
    </div>
</section>

@endsection