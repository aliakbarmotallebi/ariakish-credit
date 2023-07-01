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
        Schema::create('request_repairs', function (Blueprint $table) {
            $table->id();
            $table->longText('message')->nullable();
            $table->string('cost_amount')
                ->nullable();
            $table->unsignedBigInteger('appliance_id');
            $table->foreign('appliance_id')
                ->references('id')
                ->on('appliances')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('request_repairs');
    }
};
