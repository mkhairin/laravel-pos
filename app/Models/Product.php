<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'image_url'
    ];

    public function transactionDetails(): HasMany
    {
        return $this->hasMany(TransactionDetail::class);
    }
}
