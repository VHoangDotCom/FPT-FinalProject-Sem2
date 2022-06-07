<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class feedback extends Model
{
    use HasFactory;
    public $fillable=([
        'feedbackCode',
        'name',
        'phone',
        'email',
        'address',
        'content',

    ]);
}
