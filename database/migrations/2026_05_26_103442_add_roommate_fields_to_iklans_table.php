<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {

        Schema::table('iklans', function (Blueprint $table) {

            $table->string('gender')->nullable();
            $table->string('umur')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->string('roommate')->nullable();
            $table->string('habit1')->nullable();
            $table->string('habit2')->nullable();

        });

    }

    public function down(): void
    {

        Schema::table('iklans', function (Blueprint $table) {

            $table->dropColumn([
                'gender',
                'umur',
                'pekerjaan',
                'roommate',
                'habit1',
                'habit2'
            ]);

        });

    }

};