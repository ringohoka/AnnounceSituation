<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         if(Schema::hasTable('accounts')){
             //テーブルが存在していればリターン
             return;
         }
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->string('mail',255);
            $table->string('name',255);
            $table->string('pass');
            $table->Integer('situation');
            $table->timestamps();
            $table->softDeletes();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounts');
    }
}
