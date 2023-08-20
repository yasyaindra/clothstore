<?php

namespace App\Models;

use App\Traits\UUids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory, UUids;

    protected $guarded = ['id'];

    public function category():BelongsTo {
        return $this->belongsTo(Category::class);
    }
}
