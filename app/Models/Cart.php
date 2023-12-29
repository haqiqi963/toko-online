<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Cart extends Model
{
    use HasFactory;

    protected $fillable=[
      'id_user',
      'id_items',
        'quantity',
        'price',
        'status',
    ];

    public function products(): hasOne
    {
        return $this->hasOne(Product::class, 'id', 'id_items');
    }
}
