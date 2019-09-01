<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelsSpecAr extends Model
{
    //

    protected $fillable = [
        'id', 'model_id', 'trim_sortorder', 'trim_price', 'spec_trim_en', 'spec_trim_ar', 'spec_sub_trim_en', 'spec_sub_trim_ar', 'spec_details_ar'
    ];

   

    public function model()
    {
        return $this->belongsTo(Models::class);
    }
}
