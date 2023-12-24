<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DetailTransaction extends Model
{
    use HasFactory;

    protected $fillable = [
      'id_transaction',
      'id_items',
        'status'
    ];

    public function Transactions()
    {
        return $this->hasOne(Transaction::class, 'id_transaction', 'id');
    }
    public function Products()
    {
        return $this->hasOne(Product::class, 'id_items', 'id');
    }
}
