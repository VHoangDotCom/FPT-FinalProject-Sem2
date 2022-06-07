<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\product;
class Thumbnail extends Model
{
    protected $primaryKey = 'thumb_id';
    protected $table = 'thumb_images';

    protected $fillable = [
        'pro_id',
        'thumb_image',
    ];

    public function product()
    {
        return $this->belongsTo(product::class, 'pro_id');
    }
}
