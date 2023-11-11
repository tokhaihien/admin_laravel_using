<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class e_invoices extends Model
{
    use HasFactory;
    protected $table = "e_invoices";
    use SoftDeletes;
}
