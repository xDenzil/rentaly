<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function show($listing_id)
    {
        //$listing = .\DB::table('properties')->where('id', $id)->first();

        return view('listing');
    }
}
