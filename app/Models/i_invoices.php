<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class i_invoices extends Model
{
    use HasFactory;
    protected $table = "i_invoices";
    use SoftDeletes;

    public function suppliers(){
        return $this->belongsTo(suppliers::class);
    }
}
