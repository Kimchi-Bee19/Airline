<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    //
    public function index(Flight $flight) {
        $tickets = Ticket::where('flight_id', $flight->id)->get();
        $countPassengers = Ticket::where('flight_id', $flight->id)->count();
        $countBoardings = Ticket::where('flight_id', $flight->id)
                        ->where('is_boarding', true)
                        ->count();
        return view("tickets", ['tickets' => $tickets, 'flight'=> $flight, 'passengers' => $countPassengers, 'boardings' => $countBoardings]);
    }

    public function create(Flight $flight) {
        return view("book", ['flight' => $flight]);
    }

    public function insert(Request $request) {
        $request->validate([
            'flight_id' => 'required',
            'passenger_name' => 'required|string|max:255',
            'passenger_phone' => 'required|string|max:14',
            'seat_number'=> 'required|string|size:3',

        ],[
            'passenger_name.required'=> 'Nama wajib diisi',
            'passenger_phone.required' => 'No HP wajib diisi',
            'seat_number.required'=> 'Seat number harus diisi',
            'seat_number.size'=> 'Seat number tidak valid'
        ]);
    
        if(!isset($request->flight_id)) {
            return redirect('/flights')->with('error', 'Flight tidak dapat ditemukan!');
        }
    
        $seatTaken = Ticket::where('flight_id', $request->flight_id)
                            ->where('seat_number', $request->seat_number)
                            ->exists();
    
        if ($seatTaken) {
            return redirect()->back()->with(['error' => 'Seat number sudah dipesan untuk flight ini!'])->withInput();
        }
    
        $ticket = new Ticket;
        $ticket->flight_id = $request->flight_id;
        $ticket->passenger_name = $request->passenger_name;
        $ticket->passenger_phone = $request->passenger_phone;
        $ticket->seat_number = $request->seat_number;
    
        $ticket->save();
    
        return redirect('/flights')->with('success', 'Ticket berhasil dipesan!');
    }

    public function update(Ticket $ticket) {
        if(!isset($ticket)) {
            return redirect()->back()->with('error', 'Ticket tidak dapat ditemukan!');
        }
        
        $ticket->update([
            'is_boarding' => true,
            'boarding_time' => now()
        ]);

        return redirect()->back()->with('success', 'Ticket berhasil di check in!');
    }

    public function delete(Ticket $ticket) {
        if(!isset($ticket)) {
            return redirect()->back()->with('error', 'Ticket tidak dapat ditemukan!');
        }

        $ticket->delete();
        return redirect()->back()->with('success','Ticket berhasil dihapus!');
    }

    public function countPasseneger(Ticket $ticket) {

    }
}
