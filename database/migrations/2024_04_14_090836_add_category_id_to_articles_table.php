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
        Schema::table('articles', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id')->after('title')->nullable(); //creo la colonna category id dopo title
            $table->dropColumn('category'); //cancello la colonna category
            $table->foreign('category_id')->references('id')->on('categories'); //relaziono la category id con l'id della tabella categorie
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->dropForeign(['category_id']); //cancello prima la chiave secondaria
            $table->dropColumn('category_id'); //cancello la colonna category id
            $table->string('category', 50)->after('title')->nullable(); //rimetto l acolonna category dopo title
        });
    }
};
