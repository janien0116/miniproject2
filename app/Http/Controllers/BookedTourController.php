<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookedTour;
use Illuminate\Support\Facades\Auth;

class BookedTourController extends Controller
{
    public function index()
    {
        $name = session('name');
        $data = BookedTour::where('name', '=', $name)->simplePaginate(3);
        return view('tour-history', ['booked_tours' => $data]);
    }

    public function store(Request $request){
        $bookedTour = new BookedTour();
        $bookedTour->Destination = $request->input('Destination');
        $bookedTour->FromDate = $request->input('FromDate');
        $bookedTour->ToDate = $request->input('ToDate');
        $bookedTour->BookedSeats = $request->input('BookedSeats');
        $bookedTour->PickupPoint = $request->input('PickupPoint');
        $bookedTour->PickupTime = $request->input('PickupTime');
        $bookedTour->Inclusions = $request->input('Inclusions');
        $bookedTour->Price = $request->input('Price');
        $bookedTour->BookedBy = $request->input('BookedBy');
        $bookedTour->name = $request->input('username');
        if ($bookedTour->save()) {
            return redirect()->route('payment');
        } else {
            return back()->withErrors([
                'error' => 'There was an error while booking the tour. Please try again.',
            ]);
        }
    }

    public function edit($id){
        $data = BookedTour::findOrFail($id);
        return view('edit-tour', ['booked_tour' => $data]);
    }

    public function update(Request $request, $id){
        $validated = $request->validate([
            "BookedSeats" => ['required'],
            "PickupPoint" => ['required'],
            "PickupTime" => ['required'],
            "BookedBy" => ['required'],
            "Price" => ['required'],
            "ToDate" => ['required']
        ]);
        $booked_tour = BookedTour::where('id', $id);
        if ($booked_tour->update($validated)) {
            return redirect()->route('tour_history');
        } else {
            return back()->withErrors([
                'error' => 'There was an error while updating the tour. Please try again.',
            ]);
        }
    }

    public function show($id){
        $data = BookedTour::findOrFail($id);
        return view('view-tour', ['booked_tour' => $data]);
    }
    
    function destroy(BookedTour $booked_tour){
        $booked_tour->delete();
        return redirect()->route('tour_history');
    }
    
}
