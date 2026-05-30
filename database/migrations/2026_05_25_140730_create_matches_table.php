<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {

        Schema::create('matches', function (Blueprint $table) {

            $table->id();

            $table->unsignedBigInteger('user1_id');

            $table->unsignedBigInteger('user2_id');

            $table->boolean('user1_confirm')->default(false);

            $table->boolean('user2_confirm')->default(false);

            $table->timestamp('expired_at')->nullable();

            $table->string('status')->default('pending');

            $table->timestamps();

        });

    }

    public function down(): void
    {

        Schema::dropIfExists('matches');

    }

};