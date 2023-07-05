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
        Schema::create('appliances', function (Blueprint $table) {
            $table->id();

            $table->string('brand_name')
                ->nullable();

            $table->string('product_name')
                ->nullable();

            $table->string('group_name')
                ->nullable();
 
            $table->string('variant_name')
                ->nullable();

            $table->string('image_after_url')
                ->nullable();

            $table->string('production_year');

            $table->enum('production_supporting', [
                'DOMESTIC',
                'IMPORTS'
            ])->default('DOMESTIC');

            $table->string('image_before_url')
                    ->nullable();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->string('warranty_serial')->nullable();

            $table->dateTime('warranty_expire_date')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appliances');
    }
};