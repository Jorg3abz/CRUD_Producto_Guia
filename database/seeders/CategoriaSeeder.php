<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
    }
    public function up(): void
{
    Schema::table('productos', function (Blueprint $table) {
        $table->foreign('categoria_id')->references('id')->onDelete('cascade')->on('categorias');
    });
}

public function down(): void
{
    Schema::table('productos', function (Blueprint $table) {
        $table->dropForeign(['categoria_id']);
    });
}
}
