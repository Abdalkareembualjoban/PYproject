<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('membership_id')->constrained();
            $table->foreignId('client_id')->constrained();
            $table->date('membership_start_date');
            $table->date('membership_end_date');
            $table->integer('price');
            $table->string('days_complete',45);
            $table->string('days_remaining',45);
            $table->boolean('paid')->default(true);
             
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
        Schema::dropIfExists('invoices');
    }
}
