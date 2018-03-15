<?php

namespace qadashboard;

use Illuminate\Database\Eloquent\Model;
use qadashboard\AuditorCertification;

class Auditor extends Model
{
    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'auditors';

	public function auditorCertification()
	{
		return $this->belongsToMany('AuditorCertification');
	}
}




