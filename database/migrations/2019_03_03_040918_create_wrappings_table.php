<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWrappingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wrappings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('description')->nullable();
            $table->double('purchage_price', 10, 2)->nullable();
            $table->double('sell_price', 10, 2)->nullable();
            $table->double('tax', 5, 2)->nullable();
            $table->double('discount', 4, 2)->nullable();
            $table->unsignedInteger('stock')->nullable();
            $table->unsignedInteger('offer_id')->nullable();
            $table->string('type')->nullable();
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->unsignedInteger('action')->nullable();
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
        Schema::dropIfExists('wrappings');
    }
}
