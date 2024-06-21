<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;
    protected $table = "booking"; // tabel yang ingin dituju
    protected $fillable = ["ID_Booking", "ID_Studio", "bookingDate", "Status"]; //kolom yang bisa diakses
}
