<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    use HasFactory;


    protected $fillable = [
        'sku',
        'name_product',
        'type_id',
        'category_id',
        'price',
        'discount',
        'quantity',
        'quantity_out',
        'img_product',
        'is_active',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

//    public function product(): HasOne
//    {
//        return $this->hasOne(Cart::class, '', 'id');
//    }


}
