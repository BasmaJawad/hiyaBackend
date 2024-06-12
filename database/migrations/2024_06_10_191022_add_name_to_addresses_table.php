<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::table('addresses', function (Blueprint $table) {
            $table->string('name')->after('customer_id'); // Adds 'name' column after 'customer_id'
        });
    }

    public function down(): void
    {
        Schema::table('addresses', function (Blueprint $table) {
            $table->dropColumn('name'); 
        });
    }
};
