<?php

namespace qadashboard;

use Illuminate\Database\Eloquent\Model;
use qadasboard\AuditorCertification

class Certification extends Model
{
    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'certifications';

	/**
	 * Get Auditors with this certification
	 */ 

	public function auditorCertification()
	{
		return $this->hasMany('AuditorCertification')
	}
}
