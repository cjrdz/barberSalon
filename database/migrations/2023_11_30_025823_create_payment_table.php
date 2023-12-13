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
        Schema::create('payment', function (Blueprint $table) {
            
            $table->id('id_payment');
            $table->double('cost');
            $table->string('paymentmethod', 20);
            $table->bigInteger('fk_service')->unsigned();
            $table->bigInteger('fk_user')->unsigned();

            $table->foreign('fk_user')
            ->references('id')->on('users')
            ->onDelete('cascade')
             ->onUpdate('cascade');;

            $table->foreign('fk_service')
            ->references('id_service')->on('service')
            ->onDelete('cascade')
             ->onUpdate('cascade');;

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment');
    }
};
