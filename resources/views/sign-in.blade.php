@extends('layouts.no-footer-layout')

@section('title', 'Sign In')

@section('body-class','dynamic-bg')

@section('content')
<section class="d-flex justify-content-center p-md-5">
    <div class="px-5 pb-5 pt-3 p-md-5 bg-white shadow2" style="width: 500px;">
        <div class="progress d-none">
            <div class="progress-bar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" role="progressbar"></div>
        </div>
        <form method="POST" action="/signin">
            @csrf
            <h4 class="text-center mb-4">Sign In</h4>
            <div class="form-group"><input class="form-control mb-2" name="user-phone" type="text"
                    placeholder="Email or Phone Number">
            </div>
            <div class="form-group"><input class="form-control mb-2" name="user-password" type="text"
                    placeholder="Password"></div>
            <button class="btn btn-primary btn-block" type="submit" style="margin-top: 12px;">Sign In</button>
            <p class="text-center small mt-4">For got your password? <a href="#">Click Here</a></p>
        </form>

    </div>
</section>

@endsection