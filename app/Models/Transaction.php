<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaction extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function product(): HasMany {
        return $this->hasMany(Product::class, 'id', 'product_id');
    }

    public function order(): BelongsTo {
        return $this->belongsTo(Order::class);
    }
}
