<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('groups')){
            //テーブルが存在していればリターン
            return;
        }
        Schema::create('groups', function (Blueprint $table) {
            $table->Integer('id');
            $table->foreignId('accounts_id')->constrained('accounts')->onDelete('cascade');
            $table->char('groupid',3);
            $table->timestamps();
            $table->primary(['groupid','accounts_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('groups');
    }
}
