<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelsSpecEn extends Model
{
    //
    protected $fillable = [
        'id', 'model_id', 'trim_sortorder', 'trim_price', 'spec_trim_en', 'spec_sub_trim_en', 'spec_details_en'
    ];

    
    public function model()
    {
        return $this->belongsTo(Models::class);
    }
}
