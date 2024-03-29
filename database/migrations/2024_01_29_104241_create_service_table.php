<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service', function (Blueprint $table) {
            $table->id();
            $table->string('image_url');
            $table->string('titre');
            $table->text('description');
            $table->foreignId('id_categorie')->constrained('categorie');
            $table->foreignId('id_user')->constrained('users'); 
            $table->string('email_user');
            $table->string('tel_user');
            $table->decimal('price', 10, 2); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service');
    }
};
