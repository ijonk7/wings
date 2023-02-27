<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class TransactionHeader extends Model
{
    use HasFactory;

    protected $table = 'transaction_header';

    public function transactionDetails(): HasMany
    {
        return $this->hasMany(TransactionDetail::class, 'document_code', 'document_code');
    }
}
