<?php

namespace qadashboard;

use Illuminate\Database\Eloquent\Model;
use qadashboar\Auditor;
use qadashboard\Certification

class AuditorCertification extends Model
{
    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'auditor_certifications';

	/*
	 * Auditors with a certificate
	 */

	public function auditor()
	{
		$this->belongsToMany('Auditor');
	}

	/*
	 * Certificates that belong to an auditor
	 */

	public function certificate()
	{
		$this->belongsToMany('Auditor');
	}
}
