<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDrugsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drugs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
             $table->string('image')->default('default.png');
            $table->integer('qtypack')->nullable();
            $table->integer('qtycarton');
            $table->float('price');
            $table->string('delivery')->nullable();
            $table->string('supplier');
            $table->string('voucher')->nullable();
            $table->date('expire_on')->nullable();
            $table->string('manufacturer');
            $table->date('produce_at');
            $table->string('destination')->nullable();
            $table->string('cost_carton')->nullable();
            $table->string('cost_pack')->nullable();
            $table->string('receipt_no')->nullable();
            $table->text('description');
            $table->integer('in_store')->nullable();
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
        Schema::dropIfExists('drugs');
    }
}
