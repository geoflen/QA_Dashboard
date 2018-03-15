<?php

namespace qadashboard;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'trainings';
    public $fillable = ['start_date', 'end_date', 'start_date','location','description'];
}




