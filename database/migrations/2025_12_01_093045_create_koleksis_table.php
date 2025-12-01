<?php

// database/migrations/xxxx_create_koleksis_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('koleksis', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->text('deskripsi');
            $table->integer('tahun_perolehan')->nullable();
            $table->string('kondisi')->default('Baik');
            $table->string('foto')->nullable(); // Kolom baru untuk nama file foto
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('koleksis');
    }
};