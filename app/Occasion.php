<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Occasion extends Model
{

    public function occasionDetails() {
        return $this->hasMany('App\OccasionDetail', 'occasion_id', 'id');
        //return $this->hasMany('\App\OccasionDetail', 'occasion_details', 'occasion_id', 'id');
    }

	// public function clientSurveyQuestion() {
	// 	return $this->hasMany('App\ClientSurveyQuestion', 'client_survey_id', 'id');
	// }
}
