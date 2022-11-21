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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_name');
            $table->unsignedBigInteger('referrer_id');
            $table->string('customer_id')->nullable();
            $table->dateTime('date')->nullable();
            $table->string('business_name')->nullable();
            $table->string('business_address')->nullable();
            $table->tinyInteger('website')->default(0);
            $table->tinyInteger('software')->default(0);
            $table->string('software_name')->nullable();
            $table->string('software_installation_id')->nullable();
            $table->string('software_hosted_by')->nullable();
            $table->unsignedBigInteger('software_hosted_at')->default(0);
            $table->string('software_user_id')->nullable();
            $table->string('software_url')->nullable();
            $table->string('software_password')->nullable();
            $table->dateTime('installation_date')->nullable();
            $table->string('software_recurring_title')->nullable();
            $table->integer('software_recurring_quantity')->nullable();
            $table->decimal('software_recurring_amount')->nullable();
            $table->dateTime('software_recurring_starting_date')->nullable();
            $table->integer('software_status')->defult(0)->comment('0 => In-active, 1=>active');
            $table->string('website_category')->nullable();
            $table->string('website_installation_id')->nullable();
            $table->string('hosted_by')->nullable();
            $table->unsignedBigInteger('hosted_at')->default(0);
            $table->string('website_url')->nullable();
            $table->string('cPanel_id')->nullable();
            $table->string('website_password')->nullable();
            $table->string('domain_purchased_by')->nullable();
            $table->string('website_recurring_title')->nullable();
            $table->integer('website_recurring_quantity')->nullable();
            $table->decimal('website_recurring_amount')->nullable();
            $table->dateTime('website_recurring_starting_date')->nullable();
            $table->integer('website_status')->defult(0)->comment('0 => In-active, 1=>active');
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
        Schema::dropIfExists('sales');
    }
};