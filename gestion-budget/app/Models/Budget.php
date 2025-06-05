<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'budgeted_amount',
    ];

        public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'category_id');
    }
}
