<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateForeignKeyPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //aggiorno la tabella posts, aggiungendo la colonna "category_id" di riferimento alla categoria del post
        Schema::table('posts', function (Blueprint $table) {
            $table->unsignedBigInteger("category_id")->nullable()->after("slug");

            
            $table->foreign("category_id") //dichiaro la colonna "category_id" come chiave esterna
                    ->references("id")     //che si riferirà alla tabella "id"
                    ->on("categories")     //della tabella categories.
                    ->onDelete("set null");//Stabilisco che se cancello una categoria, setterò a null i post con quella categoria (senza cancellare gli elemento automaticamente)

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //dato che il metodo up crea una nuova tabella e stabilisce la foreign key,
        //il metodo down dovrà rimuovere la key e cancellare la colonna creata
        Schema::table('posts', function (Blueprint $table) {

            $table->dropForeign("posts_category_id_foreign");

            $table->dropColumn("category_id");
        });
    }
}
