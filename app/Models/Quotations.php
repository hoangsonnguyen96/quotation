<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quotations extends Model
{
    use HasFactory;

    public $fillable = [
        'services',
        'unit',
        'quantity',
        'unit_price',
        'total',
        'demo',
        'created_by',
        'category_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'created_by');
    }

    public function categories()
    {
        return $this->belongsTo(Categories::class,'category_id');
    }

}
