<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if(!Schema::hasTable('users')) {
            Schema::create('services', function (Blueprint $table) {
                $table->id();

                $table->string('serviceName');
                $table->string('mainInfo');
                $table->text('allInfo');
                $table->string('image');
                $table->string('avto');
                $table->string('type');
                $table->integer('time');
                $table->decimal('price');

                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
