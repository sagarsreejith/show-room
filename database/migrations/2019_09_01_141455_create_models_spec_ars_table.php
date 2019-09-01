<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelsSpecArsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('models_spec_ars', function (Blueprint $table) {
            $table->engine = 'MyISAM';
		
		    $table->bigIncrements('id');
		    $table->integer('model_id');
		    $table->integer('trim_sortorder')->default(0);
		    $table->integer('trim_price')->default(0);
		    $table->text('spec_trim_en');
		    $table->string('spec_trim_ar', 100);
		    $table->text('spec_sub_trim_en');
		    $table->string('spec_sub_trim_ar', 100);
		    $table->longText('spec_details_ar');
		
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
        Schema::dropIfExists('models_spec_ars');
    }
}
