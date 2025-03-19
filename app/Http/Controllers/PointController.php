<?php

namespace App\Http\Controllers;

use App\Models\PointsModel;
use Illuminate\Http\Request;

class PointController extends Controller
{
    public function __construct()
    {
        $this->points = new PointsModel();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => 'Peta'
        ];

        return view('map', $data);
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
                'name' => 'required|unique:points,name',
                'description' => 'required',
                'geom_point' => 'required'
            ],
            [
                'name.required' => 'Markes needs to have a name',
                'name.unique' => 'Marker name already exists',
                'description.required' => 'Description is required',
                'geom_point.required' => 'Geometry is required'
            ],
        );

        $data = [
            'geom' => $request->geom_point,
            'name' => $request->name,
            'description' => $request->description,
        ];

        // dd($request->all());

        //Create data
        if ($this->points->create($data)) {
            return redirect()->route('map')->with('error', 'Error');
        }

        //Balikin tampilan ke peta
        return redirect()->route('map')->with('success', 'Marker has been added.');
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
