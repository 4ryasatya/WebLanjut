<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PolylinesModel;

class PolylineController extends Controller
{

    public function __construct()
    {
        $this->polylines = new PolylinesModel();
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
                'name' => 'required|unique:polyline,name',
                'image' => 'nullable | mimes: jpeg,png,jpg,gif,svg|max:2000'
            ],
            [
                'name.required' => 'Polyline needs to have a name',
                'name.unique' => 'Polyline name already exists',
                'description.required' => 'Description is required',
                'geom_polyline.required' => 'Geometry is required'
            ],
        );

        // Get image File
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name_image = time() . "_polyline." . strtolower($image->getClientOriginalExtension());
            $image->move('storage/images', $name_image);
        } else {
            $name_image = null;
        }

        $data = [
            'geom' => $request->geom_polyline,
            'name' => $request->name,
            'description' => $request->description,
            'images' => $name_image,
        ];

        $this->polylines->create($data);
        return redirect()->route('map')->with('success', 'Polyline has been added.');
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
