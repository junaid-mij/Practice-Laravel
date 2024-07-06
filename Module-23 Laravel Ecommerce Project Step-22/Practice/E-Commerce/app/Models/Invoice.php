<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = [
        'total',
        'discount',
        'vat',
        'payable',
        'cus_details',
        'sub_details',
        'tran_id',
        'val_id',
        'delivery_status',
        'payment_status',

        'user_id'
    ];
}
