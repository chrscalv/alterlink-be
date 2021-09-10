<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AlterLink;

class AlterLinkController extends Controller
{
    public function index()
    {
        return response()->json(AlterLink::all(), 200);
    }

    public function show()
    {
        //
    }

    public function store(Request $request)
    {
        $alterlink = AlterLink::create([
            'title'     => $request->title,
            'user_id'   => $request->user_id
        ]);

        return response()->json([
            'status'    => (bool)$alterlink,
            'message'   => $alterlink ? 'Success Created Alterlink Page' : 'Error Creating Alterlink Page'
        ]);
    }

    public function update(Request $request)
    {
        //
    }

    public function destroy()
    {
        //
    }
}
