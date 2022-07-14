<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListQuotation extends Model
{
    use HasFactory;

    public $fillable = [
        'name',
        'file',
        'category_id',
        'created_by',
        'description'
    ];

    public function category()
    {
        return $this->belongsTo(Categories::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class,'created_by');
    }
}
