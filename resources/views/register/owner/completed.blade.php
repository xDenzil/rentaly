@extends('layouts.no-footer-layout')

@section('title', 'Registration Complete')

@section('body-class','dynamic-bg')

@section('content')
<section class="d-flex justify-content-center p-md-5">
    <div class="px-5 pb-5 pt-3 p-md-5 bg-white shadow-lg" style="width: 500px;">
        <form>
            <div class="d-flex rounded-circle bg-primary mx-auto" style="width:120px; height:120px;"><i
                    class="fa fa-check mx-auto my-auto text-white" style="font-size:50px;"></i></div>
            <h4 class="text-center mb-5 mt-3">Property Submitted</h4>
            <h6 class="text-primary font-weight-bold">Your Property ID is:</h6><input class="form-control" type="text"
                disabled="" placeholder="PQ-948273" style="background-color: #F2F9FF;">
            <div class="form-row mb-4">
                <div class="col-sm-12">
                    <p class="mt-3">You will receive SMS confirmation once an agent has approved your property. </p>
                </div>
            </div><button class="btn btn-primary btn-block" type="button" style="margin-top: 12px;">Finish</button>
        </form>
    </div>
</section>
@endsection