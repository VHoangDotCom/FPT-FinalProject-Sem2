<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;
use App\Models\product;

class Checkout extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'name',
        'email',
        'description',
        'phone',
        'city',
        'district',
        'ward',
        'address',
        'method',
        'pay_method',
        'total',
        'quantity',
        'status',
        'card_name',
        'card_number',
        'expiration',
        'secure_code',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function orders()
    {
        return $this->hasMany(Checkout::class, 'id');
    }
}
