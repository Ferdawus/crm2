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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name');
            $table->string('phone')->nullable();
            $table->string('business_name')->nullable();
            $table->string('business_address')->nullable();
            $table->string('alternative_contact_name')->nullable();
            $table->string('alternative_number')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('facebook')->nullable();
            $table->string('other_social_media')->nullable();
            $table->decimal('opening_balance')->nullable();
            $table->string('picture_attachment')->nullable();
            $table->integer('customer_status')->default(0)->comment('0 => In-active |1 => Active');
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
        Schema::dropIfExists('customers');
    }
};