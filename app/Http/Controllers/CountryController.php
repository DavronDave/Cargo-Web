<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $countries = Country::sortable()->orderBy('id', 'DESC')->paginate(10);
        return view('admin.countries.index', compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.countries.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:countries,name',
            'emblem' => ['image', 'mimes:jpg,png,jpeg,gif,svg,webm'],
        ]);

        $country = Country::create($request->except('emblem'));

        if($request->hasFile('emblem')){
            $uploadedFile = $request->file('emblem');
            $country->emblem = $country->uploadImage($uploadedFile, 'emblem', 'countries');
        }

        return response()->json([
            'status' => 200
        ]);
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
    public function edit(Country $country)
    {
        $emblem = asset($country->emblem);
        return response()->json([
            'status' => 200,
            'country' => $country,
            'emblem' => $emblem
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Country $country)
    {
        if($request->has('emblem')){
            $country->emblem = $country->uploadImage($request->emblem, 'emblem', 'countries', $country->emblem);
        }

        $country->update($request->except(['emblem']));
        return response()->json([
            'status' => 200
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Country $country)
    {
        if(file_exists($country->emblem)){
            unlink($country->emblem);
        }
        $country->delete();
        return redirect()->route('admin.countries.index');
    }
}
