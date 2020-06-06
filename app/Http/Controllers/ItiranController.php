<?php

namespace App\Http\Controllers;

use App\Api;
use Illuminate\Http\Request;

class ItiranController extends Controller
{
    public function index()
    {
        $items = Api::all();
        return response()->json($items);
    }
    public function store(Request $request)
    {
        $api = new Api;
        $api->name = $request->name;
        $api->main = $request->main;
        $article->save();
        return response()->json();
    }
}
