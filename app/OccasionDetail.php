<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OccasionDetail extends Model
{
    //

    protected $fillable = ['title', 'sub_title', 'description', 'photo', 'photo_alt_text', 'active', 'sl_no'];

    public function occasion() {
        return $this->belongsTo('App\Occasion', 'occasion_id', 'id');
    }
}
