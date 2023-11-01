<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class product_types extends Model
{
    use HasFactory;
    protected $table = "product_types";
    use SoftDeletes;

    public function products(){
        return $this->hasMany(products::class);
    }
}
