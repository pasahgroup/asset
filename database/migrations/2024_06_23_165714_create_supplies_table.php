<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplies', function (Blueprint $table) {
               $table->bigIncrements('id'); 
$table->string('supply_name')->nullable();
$table->string('phone')->nullable();
$table->string('email')->nullable();
$table->string('location')->nullable();
$table->string('tin')->nullable();
$table->string('vrn')->nullable();

                    $table->string('status')->nullable();
                    $table->integer('user_id')->unsigned();                 
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
        Schema::dropIfExists('supplies');
    }
}
