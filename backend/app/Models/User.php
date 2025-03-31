<?php

// backend/app/Http/Controllers/KnifeController.php
namespace App\Http\Controllers;

use App\Models\Knife;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class KnifeController extends Controller
{
    public function index()
    {
        return response()->json(Knife::all());
    }

    public function show($id)
    {
        return response()->json(Knife::findOrFail($id));
    }

    public function store(Request $request)
    {
        $knife = Knife::create($request->all());
        return response()->json($knife, Response::HTTP_CREATED);
    }

    public function update(Request $request, $id)
    {
        $knife = Knife::findOrFail($id);
        $knife->update($request->all());
        return response()->json($knife);
    }

    public function destroy($id)
    {
        Knife::destroy($id);
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
