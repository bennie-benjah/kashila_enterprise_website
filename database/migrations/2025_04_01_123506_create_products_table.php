<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // database/migrations/xxxx_xx_xx_create_products_table.php

public function up()
{
    Schema::create('products', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->foreignId('category_id')->constrained()->onDelete('cascade');
        $table->decimal('price', 10, 2);
        $table->integer('stock');
        $table->text('description')->nullable();
        $table->string('image')->nullable();
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('products');
}

};
