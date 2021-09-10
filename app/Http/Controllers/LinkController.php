<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Link;
use App\Models\AlterLink;

class LinkController extends Controller
{
    public function index()
    {
        return response()->json(Link::all(), 200);
    }

    public function show()
    {
        //
    }

    public function store(Request $request)
    {
        $link = Link::create([
            'link'            => $request->title,
            'url'             => $request->url,
            'alterlink_id'    => $request->alterlink_id,
            'user_id'         => $request->user_id
        ]);

        return response()->json([
            'status'    => (bool)$link
        ]);
    }

    public function update(Request $request, $id)
    {
        $link = Link::find($id);
        $link->title        = $request['title'];
        $link->url          = $request['url'];
        $link->alterlink_id = $request['alterink_id'];
        $link->save();

        return response()->json([
            'status'    => (bool)$link
        ]);
    }

    public function destroy()
    {
        //
    }
}
