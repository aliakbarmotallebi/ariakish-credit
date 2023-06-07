<?php

use App\Models\Traits\HasWarranty;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    
    use HasWarranty;
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();

            $table->string('brand_name')
                ->nullable();

            $table->string('product_name')
                ->nullable();


            $table->string('group_name')
                ->nullable();
 

            $table->string('variant_name')
                    ->nullable();

            $table->string('cost_amount')
                ->nullable();

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
        Schema::dropIfExists('order_items');
    }
};
