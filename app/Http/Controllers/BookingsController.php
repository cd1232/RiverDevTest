<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use App\Http\Requests\StoreBooking;

class BookingsController extends Controller
{
    public function show()
    {
        return Booking::orderBy('created_at', 'desc')->take(4)->get();
    }

    public function store(StoreBooking $request)
    {
        $validated = $request->validated();

        $booking = new Booking;
        $booking->name = $validated['name'];
        $booking->day_booked = $validated['dayPicked'];
        $booking->time_booked = $validated['timePicked'];
        $booking->message = $validated['message'];

        $booking->save();

        return $booking;
    }
}
