<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory, Uuids;

    protected $guarded = ['id'];

    public function category():BelongsTo {
        return $this->belongsTo(Category::class);
    }
}
