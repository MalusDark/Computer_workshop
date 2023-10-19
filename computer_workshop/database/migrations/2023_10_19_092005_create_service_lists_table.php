<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('service_lists', function (Blueprint $table) {
            $table->id();

            $table->integer('categoryId');
            $table->string('carName');
            $table->string('serviceType');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('service_lists');
    }
};
