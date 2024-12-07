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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string("name",100)->unique();
            $table->integer("price");
            $table->integer("sale");
            $table->integer("count");
            $table->string("duration",50);
            $table->foreignId("category_id")->constrained("categories")->onDelete("cascade");
            $table->string("img",300);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
