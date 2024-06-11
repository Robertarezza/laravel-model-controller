<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

//questo si usa se mettiamo un nome model diveso dal nome database 
    /**
     * The table associated with the model.
     *
     *@var string
     */
    //protected $table = 'my_flights';
}
