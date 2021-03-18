<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('reference');
            $table->dateTime('date_time');
            $table->decimal('amount');
            $table->decimal('tax');
            $table->enum('category', ['report', 'confirmed', 'declared']);
            // foreign keys
            $table->foreignId('endorsed_id')->constrained();
            $table->foreignId('instrument_id')->constrained();
            $table->foreignId('transaction_type_id')->constrained();
            $table->foreignId('account_id')->constrained();
            $table->foreignId('total_id')->constrained();
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
        Schema::dropIfExists('transactions');
    }
}
