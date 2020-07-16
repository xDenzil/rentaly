@extends('layouts.mainlayout')

@section('title', 'Page Title')

@section('content')

<section
    style="height: 100vh;background-color: #F1F9FF;background-image: url(&quot;assets/img/main-splash2.jpg&quot;);background-size: cover;background-repeat: no-repeat;">
    <div class="container text-white" style="padding-top: 10vh;"><span class="mb-3 display-4 px-2">Connecting
            students&nbsp;<br></span><span class="mb-3 display-4 px-2">and rooms,&nbsp;<br></span><span
            class="mb-3 display-4 px-2">without the hassle.&nbsp;<br></span><button
            class="btn btn-primary btn-lg px-5 mt-4" type="button" style="background-color: #84BD00; border: none;">Get
            Started</button></div>
</section>

<section style="background-color: black;">
    <div class="row d-flex flex-row">
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 bg-primary" style="position: relative; margin-top:-100px;">
            <div class="row d-flex flex-row">
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 bg-primary"
                    style="position: relative; margin-top:-100px;"></div>
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 p-5 bg-white">
                    <div class="container">
                        <h2>For Home Owners</h2>
                        <div class="row p-3">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 p-0">
                                <p>Have your rooms rented as quickly as it becomes available, no more lengthy gaps
                                    between finding students.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 text-white p-5" style="background-color: #84BD00;">
            <div class="container">
                <h2>For Students</h2>
                <div class="row p-3">
                    <div class="col-12 p-0">
                        <p>Find the exact room you're looking for, with little to no effort. Get updates as soon as a
                            match is found.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection