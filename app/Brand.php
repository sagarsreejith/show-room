<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    //
    protected $fillable = [
        'brands_id', 'brands_url', 'brands_name_en', 'brands_name_ar', 'brands_desc_en', 'brands_desc_ar', 'brands_hotline', 'brands_image', 'brands_logo', 'brands_status', 'brands_sort_order', 'brands_working_hours', 'brands_friday_working_hours', 'brands_offer', 'brands_address', 'brands_latitude', 'brands_longitude', 'brands_available'
    ];

    public function models()
    {
        return $this->hasMany(Models::class, 'models_brand_id', 'id');
    }
}
