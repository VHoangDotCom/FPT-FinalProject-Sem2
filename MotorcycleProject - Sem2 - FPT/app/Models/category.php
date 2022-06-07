<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\product;
class category extends Model
{
    protected $primaryKey = 'cate_id';
    protected $fillable=[

        'categoryName',
        'description',

    ];
    public function products(){
        return $this->hasMany(product::class,'cate_id');
    }
    public function children(){
        return $this->hasMany(category::class,'parent_id');
    }
    public function parent(){
        return $this->belongsTo(category::class,'cate_id');
    }
}
