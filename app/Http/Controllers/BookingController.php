<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{

    public function index()
    {
        $bookings = Booking::latest()->paginate(5);

        return view('bookings.index',compact('bookings'))->with('i',(request()->input('page',1)-1)*5);
    }


    public function create()
    {
        return view('bookings.create');
    }


    public function store(Request $request)
    {
        $request->validate([

            'departure_date' => 'required',
            'pickup_point' => 'required',
            'destination' => 'required',
            'name' => 'required',
            'ic_no' => 'required',
        ]);

        Booking::create($request->all());

        return redirect()->route('bookings.index')->with('success','Booking created successfully.');
    }


    public function show(Booking $booking)
    {
        //
    }


    public function edit(Booking $booking)
    {
        return view('bookings.edit',compact('booking'));
    }


    public function update(Request $request, Booking $booking)
    {
        $request->validate([

        ]);

        $booking->update($request->all());

        return redirect()->route('bookings.index')->with('success','Booking Updated Successfully');
    }


    public function destroy(Booking $booking)
    {
        $booking->delete();

        return redirect()->route('bookings.index')->with('success','Booking Deleted Successfully.');
    }
}
