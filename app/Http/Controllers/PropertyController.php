<?php

namespace App\Http\Controllers;

use App\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = DB::select('select p.id, p.community, p.parish, min(r.rent) as min_rent, max(r.rent) as max_rent, max(r.beds) as max_beds, r.bathroom, g.img_url
        from properties as p
        inner join rooms as r
        on p.id = r.property_id
        left join gallery as g
        on g.property_id = p.id
        group by p.id');

        return view('feed', ['properties' => $properties]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $properties = DB::select('select p.community, p.parish, p.id, p.list_date, g.img_url, p.description
        from properties as p
        inner join gallery as g
        on p.id = g.property_id
        where p.id = :id', ['id' => $id]);

        $rooms = DB::select('select * from rooms where property_id = :id', ['id' => $id]);

        $features = DB::select('select features.tag 
        from features 
        inner join property_feature
        on features.id = property_feature.feature_id
        where property_feature.property_id = :id', ['id' => $id]);

        $comments = DB::select('select comments.date, comments.comment, users.fname, users.lname, comments.rating
        from comments
        inner join users
        on comments.user_id = users.id
        where property_id = :id', ['id' => $id]);

        $owners = DB::select('select users.fname, users.lname, users.id
        from users
        inner join properties
        on users.id = properties.user_id
        where properties.id = :id', ['id' => $id]);

        $similars = DB::select('select p.id, p.community, p.parish, min(r.rent) as min_rent, max(r.rent) as max_rent, max(r.beds) as max_beds, r.bathroom, g.img_url
        from properties as p
        inner join rooms as r
        on p.id = r.property_id
        left join gallery as g
        on g.property_id = p.id
        group by p.id
        order by rand() limit 3');

        return view('feed.index', ['properties' => $properties, 'rooms' => $rooms, 'features' => $features, 'comments' => $comments, 'owners' => $owners, 'similars' => $similars]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Property $property)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property)
    {
        //
    }
}
