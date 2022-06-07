<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\product;
class Review extends Model
{
    protected $primaryKey = 'rev_id';

    protected $fillable = [
        'user_id',
        'pro_id',
        'comment',
        'rate',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function product()
    {
        return $this->belongsTo(product::class, 'pro_id');
    }
}
