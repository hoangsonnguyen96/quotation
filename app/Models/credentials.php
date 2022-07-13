<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class credentials extends Model
{
    use HasFactory;

    public $fillable = [
        'images',
        'title',
        'description',
        'file',
        'created_by',
        'category_id'
    ];

    public function user(){
        return $this->belongsTo(User::class,'created_by');
    }
    public function category(){
        return $this->belongsTo(Categories::class,'category_id');
    }
}
