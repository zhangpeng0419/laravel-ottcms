<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category', function(Blueprint $table)
    {
        $table->increments('cate_id');
        $table->string('cate_name');
		 $table->string('cate_title');
		   $table->string('cate_keywords');
		 $table->string('cate_description');
            $table->integer('cate_view');
        $table->integer('cate_order');
		    $table->integer('cate_pid');
			
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
        //
    }
}
