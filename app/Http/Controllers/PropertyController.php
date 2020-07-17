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
        $properties = DB::select('select p.id, p.community, p.parish, min(r.rent) as min_rent, max(r.rent) as max_rent, max(r.beds) as max_beds, r.bathroom, g.img_url, p.thumb_img
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
        $properties = DB::select('select p.community, p.parish, p.id, p.list_date, p.description, p.thumb_img
        from properties as p
        where p.id = :id', ['id' => $id]);

        $rooms = DB::select('select * from rooms where status = :status and property_id = :id', ['id' => $id, 'status' => 'vacant']);

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

        $galleries = DB::select('select * from gallery where property_id = :id', ['id' => $id]);

        $similars = DB::select('select p.id, p.community, p.parish, min(r.rent) as min_rent, max(r.rent) as max_rent, max(r.beds) as max_beds, r.bathroom, p.thumb_img
        from properties as p
        inner join rooms as r
        on p.id = r.property_id
        where p.id <> :id
        group by p.id
        order by rand() limit 3', ['id' => $id]);

        return view('feed.index', [
            'properties' => $properties, 'rooms' => $rooms, 'features' => $features,
            'comments' => $comments, 'owners' => $owners, 'similars' => $similars, 'galleries' => $galleries
        ]);
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

    public function manage($user_id)
    {
        $rooms = DB::select('select (@cnt := @cnt + 1) AS room_number, bathroom, kitchen, rent, rooms.status, beds, users.id, properties.id as prop_id
        from rooms
        CROSS JOIN (SELECT @cnt := 0) as dummy
        inner join properties 
        on rooms.property_id = properties.id
        inner join users
        on users.id = properties.user_id
        where user_id = :uid', ['uid' => $user_id]);

        $properties = DB::select('select * from properties where user_id = :id', ['id' => $user_id]);

        return view('dashboard', ['rooms' => $rooms, 'properties' => $properties]);
    }
}
