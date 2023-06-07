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
            $table->string('mobile', 11)->unique();
            $table->string('password');
            $table->string('verify_code')
                ->nullable();
            $table->timestamp('code_expired_at')
                ->nullable();
            $table->enum('status', [
                    'STATUS_UNCONFIRMED',
                    'STATUS_CONFIRMED',
                    'STATUS_PENDING'
                ])->nullable()->default('STATUS_PENDING');
            $table->enum('role', [
                    'ROLE_ADMIN',
                    'ROLE_MANEGER',
                    'ROLE_CONTRIBUTOR',
                    'ROLE_CUSTOMER'
                ])->default('ROLE_CUSTOMER');
                
            $table->longText('message_from_admin')
                ->nullable();

            $table->boolean('profile_completed')
                ->default(false);

            $table->longText('performance_report')
                ->nullable();

            $table->rememberToken();
            $table->timestamps();
        });


        $user = new User;
        $user->fullname = 'Admin';
        $user->mobile = '09121779471';
        $user->password = '09121779471';
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
