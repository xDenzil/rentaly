@extends('layouts.no-footer-layout')

@section('title', 'New Property - Features')

@section('body-class','dynamic-bg')

@section('content')
<div class="progress" style="height: 20px;">
    <div class="progress-bar progress-bar-striped progress-bar-animated" aria-valuenow="65" aria-valuemin="0"
        aria-valuemax="100" style="width: 65%;">65%</div>
</div>
<section class="d-flex justify-content-center p-md-5">
    <div class="px-5 pb-5 pt-3 p-md-5 bg-white shadow2" style="width: 500px;">
        <form>
            <h4 class="text-center mb-4">Property Details</h4><label>Are utilities (water &amp; electricity) included in
                the rent?</label>
            <div class="form-row mb-4">
                <div class="col-md-6"><button class="btn btn-outline-primary btn-block mb-2" type="button">Yes</button>
                </div>
                <div class="col-md-6"><button class="btn btn-outline-primary btn-block mb-2" type="button">No</button>
                </div>
            </div><label>Is there a common area / living room?</label>
            <div class="form-row mb-4">
                <div class="col-md-6"><button class="btn btn-outline-primary btn-block mb-2" type="button">Yes</button>
                </div>
                <div class="col-md-6"><button class="btn btn-outline-primary btn-block mb-2" type="button">No</button>
                </div>
            </div><label>Is there a washing machine?</label>
            <div class="form-row mb-4">
                <div class="col-md-6"><button class="btn btn-outline-primary btn-block mb-2" type="button">Yes</button>
                </div>
                <div class="col-md-6"><button class="btn btn-outline-primary btn-block mb-2" type="button">No</button>
                </div>
            </div><label>Is there car parking space?</label>
            <div class="form-row mb-4">
                <div class="col-md-6"><button class="btn btn-outline-primary btn-block mb-2" type="button">Yes</button>
                </div>
                <div class="col-md-6"><button class="btn btn-outline-primary btn-block mb-2" type="button">No</button>
                </div>
            </div><label>Is there air conditioning?</label>
            <div class="form-row mb-4">
                <div class="col-md-6"><button class="btn btn-outline-primary btn-block mb-2" type="button">Yes</button>
                </div>
                <div class="col-md-6"><button class="btn btn-outline-primary btn-block mb-2" type="button">No</button>
                </div>
            </div>
        </form><button class="btn btn-primary btn-block" type="button" style="margin-top: 12px;">Continue</button>
    </div>
</section>
@endsection