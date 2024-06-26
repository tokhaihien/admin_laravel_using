<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class images extends Model
{
    use HasFactory;
    protected $table = "images";
    use SoftDeletes;
    protected $hidden = ['deleted_at','created_at','updated_at'];

    public function products(){
        return $this->belongsTo(producs::class);
    }
}
