<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Expense extends Model
{
    protected $fillable = [
        'user_id',
        'category_id',
        'amount',
        'date',
        'description',
    ];
    public function category() : BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
