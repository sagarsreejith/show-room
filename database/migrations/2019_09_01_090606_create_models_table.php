<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('models', function (Blueprint $table) {
            $table->engine = 'InnoDB';
		
		    $table->bigIncrements('models_id');
		    $table->boolean('models_type')->default(0);
		    $table->string('models_name_en', 100);
		    $table->string('models_name_ar', 100);
		    $table->integer('models_price')->default(0);
		    $table->integer('models_brand_id');
		    $table->integer('models_sort_order')->default(0);
		    $table->text('models_image');
		    $table->text('models_year');
		    $table->text('models_desc_en');
		    $table->text('models_desc_ar');
		    $table->longText('models_information_en');
		    $table->longText('models_information_ar');
		    $table->boolean('models_isinitial')->default(0);
		    $table->text('models_color');
		    $table->integer('models_view')->default(0);
		    $table->boolean('models_status')->default(0);
		    $table->string('models_test_drive_price', 20);
		    $table->text('models_exterior_image');
		    $table->text('models_interior_image');
		    $table->boolean('models_testdrive_available')->default(1);
		    $table->boolean('models_testdrive_atshowroom')->default(0);
		    $table->boolean('models_testdrive_bydelivery')->default(0);
		    $table->boolean('models_interior_available')->default(0);
		    $table->boolean('models_editspec')->default(1);
		    $table->text('models_specs_doc');
		    $table->boolean('models_comingsoon_month')->default(0);
		
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
        Schema::dropIfExists('models');
    }
}
