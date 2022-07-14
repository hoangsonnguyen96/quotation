<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'created_by'
    ];

    public function user(){
        return $this->belongsTo(User::class,'created_by');
    }

    public function credential(){
        return $this->hasMany(Credentials::class,'category_id');
    }

    public function quotations(){
        return $this->hasOne(Quotations::class,'category_id');
    }

    public function listQuotations(){
        return $this->hasMany(ListQuotation::class,'category_id');
    }

}
