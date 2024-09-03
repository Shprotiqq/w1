<?php

use App\Models\CatalogMenu;
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
        Schema::create('catalog_menus', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(CatalogMenu::class)
                ->nullable()
                ->constrained()
                ->nullOnDelete()
                ->cascadeOnUpdate();

            $table->string('title');

            $table->string('link')->nullable();

            $table->string('scroll_to')->nullable();

            $table->integer('sorting')
                ->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catalog_menus');
    }
};
