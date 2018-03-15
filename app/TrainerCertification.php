<?php

namespace qadashboard;

use Illuminate\Database\Eloquent\Model;
use qadashboar\Trainer;
use qadashboard\Certification

class TrainerCertification extends Model
{
    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'trainer_certifications';

	/*
	 * Trainers with a certification type
	 */

	public function trainer()
	{
		$this->belongsToMany('Trainer');
	}

	/*
	 * Certificates that belong to a trainers
	 */

	public function certification()
	{
		$this->belongsToMany('Certification');
	}
}
