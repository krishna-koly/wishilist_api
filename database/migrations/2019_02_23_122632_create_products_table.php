<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('description')->nullable();
            $table->text('message')->nullable();
            $table->double('purchage_price', 10, 2)->nullable();
            $table->double('sell_price', 10, 2)->nullable();
            $table->double('tax', 5, 2)->nullable();
            $table->double('discount', 4, 2)->nullable();
            $table->unsignedInteger('stock')->default(0);
            $table->unsignedInteger('views')->default(0);
            $table->unsignedInteger('offer_id')->default(0);
            $table->unsignedInteger('sub_category_id')->nullable();
            $table->unsignedInteger('brand_id')->nullable();
            $table->unsignedInteger('type')->nullable();
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->unsignedInteger('status')->nullable();
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
        Schema::dropIfExists('products');
    }
}
