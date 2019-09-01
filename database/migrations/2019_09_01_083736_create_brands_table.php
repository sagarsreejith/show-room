<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brands', function (Blueprint $table) {
		
		    $table->bigIncrements('brands_id');
		    $table->string('brands_url', 50)->default('');
		    $table->string('brands_name_en', 100);
		    $table->string('brands_name_ar', 100);
		    $table->text('brands_desc_en');
		    $table->text('brands_desc_ar');
		    $table->string('brands_hotline', 25);
		    $table->text('brands_image');
		    $table->text('brands_logo');
		    $table->boolean('brands_status');
		    $table->integer('brands_sort_order');
		    $table->longText('brands_working_hours');
		    $table->longText('brands_friday_working_hours');
		    $table->boolean('brands_offer')->default(false);
		    $table->text('brands_address');
		    $table->text('brands_latitude');
		    $table->text('brands_longitude');
		    $table->boolean('brands_available')->default(false);
		
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
        Schema::dropIfExists('brands');
    }
}
