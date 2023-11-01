<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class products extends Model
{
    use HasFactory;
    protected $table = "products";
    use SoftDeletes;

    public function images(){
        return $this->hasMany(images::class);
    }

    public function product_types(){
        return $this->belongsTo(product_types::class);
    }
}
