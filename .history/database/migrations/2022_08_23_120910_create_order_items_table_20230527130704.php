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

            $table->unsignedBigInteger('order_id');
            $table->foreign('order_id')
                ->references('id')
                ->on('orders')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->string('brand_name')
                ->nullable();

            $table->string('product_name')
                ->nullable();


            $table->string('group_name')
                ->nullable();
 

            $table->string('variant_name')
                    ->nullable();

            $table->integer('count')
                ->default(0);

            $table->string('amount')
                ->default(0);

            $table->string('total_amount')
                ->default(0);

            $table->string('value_tariff')
                ->nullable();

            $table->enum('type_tariff', [
                'AMOUNT',
                'PERCENT'
            ])->default('AMOUNT');
            
            $table->enum('warranty_period',
                HasWarranty::$WARRANTY_PERIODS
                )->default(HasWarranty::$WARRANTY_DEFAULT);

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
