<?php

use App\Models\User;
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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('fullname')
                ->nullable();
            $table->string('code')->nullable();
            $table->string('mobile', 11)->unique();
            $table->string('mobile_second', 11)->nullable();
            $table->string('referral_code')->nullable();
            $table->string('verify_code')->nullable();
            $table->timestamp('code_expired_at')->nullable();
            $table->string('password');
            $table->string('tel', 15)->nullable();
            $table->string('national_id_number', 10)->nullable();
            $table->longText('national_card_image_url')->nullable();
            $table->string('postal_code', 10)->nullable();
            $table->longText('address')->nullable();
            $table->enum('status', [
                    'STATUS_UNCONFIRMED',
                    'STATUS_CONFIRMED',
                    'STATUS_NEW',
                    'STATUS_PENDING'
                ])->default('STATUS_NEW');
            $table->enum('role', [
                    'ROLE_ADMIN',
                    'ROLE_CUSTOMER'
                ])->default('ROLE_CUSTOMER');
            $table->rememberToken();
            $table->timestamps();
        });


        $user = new User;
        $user->fullname = 'Admin';
        $user->code = 'admin';
        $user->mobile = '09121779471';
        $user->password = '123456789';
        $user->role = 'ROLE_ADMIN';
        $user->status = 'STATUS_CONFIRMED';

        $user->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
