<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compte extends Model
{
    use HasFactory;
    protected $fillable = [
        'users_id',
        'account_name',
        'balance',
    ];

    
     public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
