<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    /**
     * Run the migrations.
     * 
     * Adds a single 'price' field for products that don't need 
     * separate sandwich/meal prices (e.g., sauces, drinks, salads).
     * 
     * Logic:
     * - If 'price' is set: display only this price (no labels)
     * - If 'sandwich_price' and/or 'meal_price' are set: display them with labels
     */
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->decimal('price', 10, 3)->nullable()->after('meal_price');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('price');
        });
    }
};
