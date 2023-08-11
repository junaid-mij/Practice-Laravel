<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Income extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','amount','description','date','category','payment_method'];

    function user():BelongsTo{
        return $this->belongsTo(User::class);
    }
}
