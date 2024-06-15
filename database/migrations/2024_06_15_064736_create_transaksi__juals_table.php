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
        Schema::create('transaksi__juals', function (Blueprint $table) {
            $table->id()->from(100);
            $table->bigInteger('idStaff');
            $table->bigInteger('idCustomer');
            $table->timestamp('tanggalPemesanan');
            $table->dateTime('tanggalJthTempo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi__juals');
    }
};
