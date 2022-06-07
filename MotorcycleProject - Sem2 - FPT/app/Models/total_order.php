<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class total_order extends Model
{
    use HasFactory;
    public $fillable=([
        'status',
        'orderDetail_ID',
    ]);
}
