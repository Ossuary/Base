<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMembers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('members')->insert(array(
            'name'=>'Pedro Rodrigues',
            'email'=>'pedrompsrodrigues@gmail.com',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ));
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('members')->where('name','=','Pedro Rodrigues')->delete();
        DB::table('members')->where('name','=','Bruna Guerreiro')->delete();

    }
}
