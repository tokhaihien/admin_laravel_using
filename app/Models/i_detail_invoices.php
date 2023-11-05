<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class i_detail_invoices extends Model
{
    use HasFactory;
    protected $table = "i_detail_invoices";
    use SoftDeletes;
}
