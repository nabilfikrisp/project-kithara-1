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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('status')->default(0);
            $table->integer('total_harga');
            $table->foreignId('user_id');
            $table->foreignId('service_id');
            $table->string('merk_gitar');
            $table->string('tipe_gitar');
            $table->string('delivery_by');
            $table->string('pickup_by')->nullable();
            $table->string('payment_type');
            $table->string('bukti_bayar')->nullable();
            $table->string('no_resi');
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
        Schema::dropIfExists('orders');
    }
};
