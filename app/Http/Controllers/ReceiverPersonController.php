<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\ReceiverPerson;
use App\Models\Region;
use Illuminate\Http\Request;
//use Psy\Util\Str;
use Illuminate\Support\Str;

class ReceiverPersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Driver $driver)
    {
        $regions = Region::all();
        $drivers = Driver::all();
        $receiverPeople = ReceiverPerson::sortable()
            ->where('driver_id', '=', $driver->id)
            ->orderBy('id', 'DESC')->paginate(100);
       return view('admin.receiver-people.index', compact('driver', 'receiverPeople','regions', 'drivers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Driver $driver)
    {
        $regions = Region::all();
//        dd($regions);
        return view('admin.receiver-people.index', compact('regions', 'driver'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {

        $request->validate([
            'full_name' => 'required',
            'passport' => 'required|unique:receiver_people',
            'birthdate' => 'required',
            'phone' => 'required',
            'address_id' => 'required',
        ]);

        $cleanedPhoneNumber = preg_replace('/[^0-9]/', '', $request->phone);
        $receiverPerson = new ReceiverPerson();
        $receiverPerson->full_name =Str::title(Str::words($request->full_name, 2, ''));
        $receiverPerson->passport = strtoupper($request->passport);
        $receiverPerson->birthdate = $request->birthdate;
        $receiverPerson->phone =$cleanedPhoneNumber ;
        $receiverPerson->address_id = $request->address_id;
        $receiverPerson->driver_id = $id;
        $receiverPerson->save();

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
    public function edit($driverId, $receiverId)
    {
        // Retrieve the receiver person's data based on driverId and receiverId
        $receiver = ReceiverPerson::where('driver_id', $driverId)
            ->findOrFail($receiverId);

        // Return the data as JSON
        return response()->json($receiver);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($driver_id, $receiverId, Request $request)
    {
        $receiver = ReceiverPerson::where('driver_id', $driver_id)->findOrFail($receiverId);

        $request->validate([
            'full_name' => 'required',
            'passport' => 'required',
            'birthdate' => 'required',
            'phone' => 'required',
            'address_id' => 'required',
        ]);

        $receiver->update([
            'full_name' => $request->input('full_name'),
            'passport' => $request->input('passport'),
            'birthdate' => $request->input('birthdate'),
            'phone' => $request->input('phone'),
            'address_id' => $request->input('address_id'),
            'driver_id' => $driver_id
        ]);

        return response()->json(['message' => 'Receiver person updated successfully']);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($driverId, ReceiverPerson $receiver)
    {
        // Your delete logic here
        $receiver->delete();
        return redirect()->route('admin.driver-receiver.index', ['driver' => $driverId]);
    }

    public function moveDriverReceivers(Request $request)
    {
//        dd($request->all());

        $request->validate([
            'driver_id' => 'required|exists:drivers,id',
            'selected_ids' => 'required|array',
        ]);

//        dd($request->all());
        // Get the selected project ID and invoice IDs from the form
        $driverID = $request->input('driver_id');
        $selectedReceiverIDs = $request->input('selected_ids');

//        dd($driverID);
        // Update the invoices with the new project ID
        ReceiverPerson::whereIn('id', $selectedReceiverIDs)->update(['driver_id' => $driverID]);

//        dd('ad');
        // Redirect back with a success message or handle the response as needed
        return redirect()->back()->with('success', 'Invoislar utkazildi.');
    }

}
