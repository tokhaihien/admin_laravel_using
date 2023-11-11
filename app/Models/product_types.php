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
    protected $hidden = ['deleted_at','created_at','updated_at','id'];

    public function products(){
        return $this->hasMany(products::class)->with('images');
    }
}
