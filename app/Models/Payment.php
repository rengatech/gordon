<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'card_number',
        'expiry_month',
        'expiry_year',
        'id_ssn_passport',
        'cvv',
        'total_amount',
    ];
}
