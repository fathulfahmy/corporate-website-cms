<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create("postdoctorals", function (Blueprint $table) {
            $table->id();
            $table->string("image")->nullable();
            $table->string("name");
            $table->string("email");
            $table->string("status");
            $table->json("qualifications");
            $table->json("research_areas");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("postdoctorals");
    }
};
