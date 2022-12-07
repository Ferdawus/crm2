<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_name');
            $table->string('product_name');
            $table->string('business_address')->nullable();
            $table->string('code')->nullable();
            $table->decimal('selling_price')->nullable();
            $table->decimal('unit')->nullable();
            $table->integer('product_status')->default(0)->comment('0 => In-active |1 => Active');
            $table->text('product_description')->nullable();
            $table->string('blank')->nullable();
            $table->string('blank1')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};