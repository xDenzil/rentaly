@extends('layouts.mainlayout')

@section('title', 'Feed')

@section('body-class','bg-light')

@section('content')
<div style="height:92vh; position: relative">
    <div style="height:100%">
        <iframe name="Framename" src="https://rentaly-vrroomdemo.herokuapp.com/" frameborder="0" scrolling="auto"
            class="frame-area" style="height:100%; width:100%;">
        </iframe>

        <div id="status-box" class="position-absolute bg-danger rounded text-white p-3"
            style="top:5%; left: 5%; cursor: pointer;" onclick="location.href='../feed/{{$prop_id}}'">
            <h4>Exit VR<i class="fa fa-times ml-3"></i></h4>
        </div>
    </div>
</div>

@endsection