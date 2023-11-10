<?php

namespace App\Http\Controllers;

use App\Models\SenderPerson;
use Illuminate\Http\Request;

class SenderPersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $senderPeople = SenderPerson::sortable()->orderBy('id', 'DESC')->paginate(200);
        return view('admin.sender-people.index', compact('senderPeople'));
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
        $request->validate([
            'full_name' => 'required',
        ]);
        $senderPerson = new SenderPerson();
        $senderPerson->full_name=$request->full_name;
        $senderPerson->save();

        return response()->json([
            'status' => 200
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(SenderPerson $senderPerson)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SenderPerson $sender_person)
    {
        return response()->json([
            'status' => 200,
            'sender_person' => $sender_person,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SenderPerson $sender_person)
    {
        $sender_person->full_name = $request->full_name;

        $sender_person->update();
        return response()->json([
            'status' => 200
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SenderPerson $sender_person)
    {
//        dd($sender_person);
        $sender_person->delete();
        return redirect()->route('admin.sender-people.index');
    }
}
