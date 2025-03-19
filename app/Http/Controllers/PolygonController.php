<?php

namespace App\Http\Controllers;

use App\Models\PolygonModel;
use Illuminate\Http\Request;

class PolygonController extends Controller
{
    public function __construct()
    {
        $this->polygon = new PolygonModel();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|unique:polygon,name',
            ],
            [
                'name.required' => 'Polygon needs to have a name',
                'name.unique' => 'Polygon name already exists',
                'description.required' => 'Description is required',
                'geom_polygon.required' => 'Geometry is required'
            ],
        );

        $data = [
            'geom' => $request->geom_polygon,
            'name' => $request->name,
            'description' => $request->description,
        ];

        $this->polygon->create($data);
        return redirect()->route('map')->with('success', 'Polygon has been added.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
