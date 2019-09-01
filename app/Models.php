<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Models extends Model
{
    //

    protected $fillable = [
        'id', 
        'models_type', 
        'models_name_en', 
        'models_name_ar', 
        'models_price', 
        'models_brand_id', 
        'models_sort_order', 
        'models_image', 
        'models_year', 
        'models_desc_en', 
        'models_desc_ar', 
        'models_information_en', 
        'models_information_ar', 
        'models_isinitial', 
        'models_color', 
        'models_view', 
        'models_status', 
        'models_test_drive_price', 
        'models_exterior_image', 
        'models_interior_image', 
        'models_testdrive_available', 
        'models_testdrive_atshowroom', 
        'models_testdrive_bydelivery', 
        'models_interior_available', 
        'models_editspec', 
        'models_specs_doc', 
        'models_comingsoon_month'
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function arabicSpec()
    {
        return $this->hasMany(ModelsSpecAr::class, 'model_id', 'id');
    }

    public function englishSpec()
    {
        return $this->hasMany(ModelsSpecAr::class, 'model_id', 'id');
    }
}
