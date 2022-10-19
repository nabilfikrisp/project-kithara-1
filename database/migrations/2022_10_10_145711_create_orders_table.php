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
            $table->integer('kode_unik')->nullable();
            $table->foreignId('user_id');
            $table->foreignId('service_id');
            $table->string('merk_gitar');
            $table->string('tipe_gitar');
            $table->string('delivery_by');
            $table->string('pickup_by');
            $table->string('payment_type');
            $table->string('bukti_bayar');
            $table->string('status_pembayaran');
            $table->string('no_resi');
            $table->integer('status_proses');
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
