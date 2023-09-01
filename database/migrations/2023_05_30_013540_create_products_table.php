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
        Schema::create('products', function (Blueprint $tablePdct) {
            $tablePdct->id();
            $tablePdct->integer('product_code')->unique();
            $tablePdct->string('product_name');
            $tablePdct->text('product_desc');
            $tablePdct->float('cost_price');
            $tablePdct->float('sale_price');
            $tablePdct->integer('qnt');
            $tablePdct->integer('status');
            $tablePdct->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
