<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('products', function (Blueprint $t) {
            $t->decimal('old_price', 12, 2)->nullable()->after('price'); // prix barré (promotion)
            $t->string('sizes')->nullable()->after('old_price');          // ex : « L, XL, XXL, 3XL, 4XL »
        });
    }

    public function down(): void
    {
        Schema::table('products', fn (Blueprint $t) => $t->dropColumn(['old_price', 'sizes']));
    }
};
