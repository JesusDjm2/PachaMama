<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Catálogo portugués, en paralelo a toursens (inglés).
 * tourspt cuelga de tours mediante tour_id, igual que toursens.
 */
return new class extends Migration {
    public function up(): void
    {
        Schema::create('ptcategories', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('link');
            $table->timestamps();
        });

        Schema::create('tourspt', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tour_id')->nullable()->constrained('tours')->onDelete('cascade');
            $table->string('nombre', 120)->unique();
            $table->string('descripcion', 250);
            $table->text('contenido');
            $table->text('resumen')->nullable();
            $table->text('detallado');
            $table->text('incluidos');
            $table->text('importante')->nullable();
            $table->string('ubicacion');
            $table->integer('precio');
            $table->integer('dias');
            $table->string('img');
            $table->longText('mapa')->nullable();
            $table->string('categoria');
            $table->string('keywords');
            $table->string('slug')->unique();
            $table->string('clase');
            $table->timestamps();
        });

        Schema::create('ptcategory_tourspt', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ptcategory_id')->constrained()->onDelete('cascade');
            $table->foreignId('tourspt_id')->constrained('tourspt')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ptcategory_tourspt');
        Schema::dropIfExists('tourspt');
        Schema::dropIfExists('ptcategories');
    }
};
