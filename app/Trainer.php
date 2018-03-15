<?php

namespace qadashboard;

use Illuminate\Database\Eloquent\Model;
use qadashboard\TrainerCertification;

class Trainer extends Model
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'trainers';
    public $fillable = ['name', 'phone_number', 'organization','certifications'];

    public function trainerCertification()
    {
    	return $this->belongsToMany();
    }
}





































