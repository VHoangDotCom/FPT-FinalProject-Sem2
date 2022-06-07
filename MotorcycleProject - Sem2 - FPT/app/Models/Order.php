<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable = [
        'checks_id',
        'pro_name',
        'quantity',
        'total_price',
    ];

    public function checkout()
    {
        return $this->belongsTo(Order::class, 'id');
    }

    public function product()
    {
        return $this->belongsTo(product::class, 'pro_id');
    }
    public function topProducts()
    {
        return $this->hasMany(Order::class);
    }
}
