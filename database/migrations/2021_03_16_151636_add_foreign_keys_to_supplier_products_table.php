<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSupplierProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('supplier_products', function (Blueprint $table) {
            $table->foreign('product_id', 'supplier_products_ibfk_1')->references('id')->on('products')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('supplier_id', 'supplier_products_ibfk_2')->references('id')->on('suppliers')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('supplier_products', function (Blueprint $table) {
            $table->dropForeign('supplier_products_ibfk_1');
            $table->dropForeign('supplier_products_ibfk_2');
        });
    }
}
