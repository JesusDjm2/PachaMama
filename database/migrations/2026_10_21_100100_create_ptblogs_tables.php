<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Blog portugués, en paralelo a enblogs/entags.
 * ptblogs cuelga de blogs mediante blog_id (1:1), igual que enblogs.
 */
return new class extends Migration {
    public function up(): void
    {
        Schema::create('pttags', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->unique();
            $table->string('slug')->unique();
            $table->timestamps();
        });

        Schema::create('ptblogs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('blog_id')->nullable()->unique()->constrained('blogs')->nullOnDelete();
            $table->string('nombre');
            $table->string('descripcion');
            $table->text('cuerpo');
            $table->string('img');
            $table->string('keywords');
            $table->string('slug');
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });

        Schema::create('ptblog_categoria', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('blog_id');
            $table->unsignedBigInteger('tag_id');
            $table->timestamps();
            $table->foreign('blog_id')->references('id')->on('ptblogs')->onDelete('cascade');
            $table->foreign('tag_id')->references('id')->on('pttags')->onDelete('cascade');
            $table->unique(['blog_id', 'tag_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ptblog_categoria');
        Schema::dropIfExists('ptblogs');
        Schema::dropIfExists('pttags');
    }
};
