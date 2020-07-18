@extends('layouts.no-footer-layout')

@section('title', 'Register')

@section('body-class','dynamic-bg')

@section('content')
<section class="d-flex justify-content-center p-md-5">
    <div class="px-5 pb-5 pt-3 p-md-5 bg-white shadow-lg" style="width: 500px;">
        <form>
            <div class="d-flex rounded-circle bg-primary mx-auto" style="width:120px; height:120px;"><i
                    class="fa fa-check mx-auto my-auto text-white" style="font-size:50px;"></i></div>
            <h4 class="text-center mb-5 mt-3">Interests Logged</h4>
            <div class="form-row mb-4">
                <div class="col-sm-12">
                    <p class="mt-3">You will receive notifications once we've found your match. Check our feed in the
                        meanwhile. </p>
                </div>
            </div><a href="/feed" class="btn btn-primary btn-block" style="margin-top: 12px;">Go to Feed</a>
        </form>
    </div>
</section>
@endsection