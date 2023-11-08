<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class suppliers extends Model
{
    use HasFactory;
    protected $table = "suppliers";
    use SoftDeletes;

    public function i_invoices(){
        return $this->hasMany(i_invoices::class);
    }
}
