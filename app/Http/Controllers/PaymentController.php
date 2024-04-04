<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function store(Request $request){
        Payment::create([
            'card_number' => $request->card_number,
            'expiry_month' => $request->expiry_month,
            'expiry_year' => $request->expiry_year,
            'id_ssn_passport' => $request->id_ssn_passport,
            'cvv' => $request->cvv,
            'total_amount' => $request->total_amount,
        ]);

        return response()->json(['message' => 'Payment successful']);


    }
}
