<?php

namespace App\Models;

use App\Traits\UUids;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory, UUids;

    protected $guarded = ['id'];

    public function category():BelongsTo {
        return $this->belongsTo(Category::class);
    }

    public function transaction(): BelongsTo {
        return $this->belongsTo(Transaction::class);
    }
}
