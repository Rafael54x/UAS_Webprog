<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carousell extends Model
{
    use HasFactory;

    // Specify the table if necessary (default is "carousells")
    protected $table = 'carousells';

    // Define the fillable fields
    protected $fillable = ['carousell'];
}
