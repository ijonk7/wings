<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class TransactionDetail extends Model
{
    use HasFactory;

    protected $table = 'transaction_detail';

    public function product(): HasOne
    {
        return $this->hasOne(Product::class, 'product_code', 'product_code');
    }
}
