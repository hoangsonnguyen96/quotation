<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    public $fillable = [
        'images',
        'created_by',
        'link'
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'created_by');
    }
}
