<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('beranda_contents', function (Blueprint $table) {
            $table->text('original_photo_url')->nullable()->after('photo_url');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('beranda_contents', function (Blueprint $table) {
            $table->dropColumn('original_photo_url');
        });
    }
};
