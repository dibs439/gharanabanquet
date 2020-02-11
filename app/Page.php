<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{

    public function contentBlock() {
        return $this->hasMany('App\ContentBlock', 'page_id', 'id');
        //return $this->hasMany('\App\OccasionDetail', 'occasion_details', 'occasion_id', 'id');
    }

}
