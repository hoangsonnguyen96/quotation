<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class credentials extends Model
{
    use HasFactory;

    public $fillable = [
        'images',
        'description',
        'created_by',
    ];

    public function user(){
        return $this->belongsTo(User::class,'created_by');
    }
}
