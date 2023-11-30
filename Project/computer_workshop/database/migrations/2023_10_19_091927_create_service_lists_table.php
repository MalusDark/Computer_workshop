<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if(!Schema::hasTable('users')) {
            Schema::create('service_lists', function (Blueprint $table) {
                $table->id();
                $table->string('carName');
                $table->string('serviceType');
                $table->integer('time');
                $table->decimal('price');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('service_lists');
    }
};
