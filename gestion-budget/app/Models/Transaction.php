<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'account_id',
        'date',
        'amount',
        'type',
        'category_id',
        'description',
    ];

        public function account()
    {
        return $this->belongsTo(Compte::class);
    }
    
    public function category()
    {
        return $this->belongsTo(Categorie::class);
    }
}
