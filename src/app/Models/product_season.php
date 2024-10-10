<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_season extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];

    //public function product()
    //{
        //return $this->belongsTo(Product::class);
   // }
    //public function season()
    //{
       // return $this->belongsTo(Season::class);
   // }
}
