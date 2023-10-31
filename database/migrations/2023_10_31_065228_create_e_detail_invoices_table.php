<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('e_detail_invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('e_invoices_id');
            $table->integer('products_id');
            $table->integer('quantity');
            $table->float('e_price');
            $table->float('total');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('e_detail_invoices');
    }
};
