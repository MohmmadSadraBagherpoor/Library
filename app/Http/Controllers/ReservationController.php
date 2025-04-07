<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Reservation;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function reservation(Request $request)
    {
        $book = Book::where('id', $request->book_id)->first();
        $total = $book->total_copies - 1;

        if ($total > 0){
            $book->total_copies = $book->total_copies - 1;
            $book->save();

            Reservation::updateOrCreate([
                'book_id' => $request->book_id,
                'member_id' => $request->member_id,
                'reservation_date' => Carbon::now()
            ]);
            dd('done');
        }
        else{
            return redirect()->back()->withErrors(['error' => 'Not Valid']);
        }
    }
}
