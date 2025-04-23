<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periode_De_Budget extends Model
{
    use HasFactory;
    protected $fillable = [
        'users_id',
        'start_date',
        'end_date',
    ];
}
