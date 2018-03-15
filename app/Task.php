<?php

namespace qadashboard;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    protected $fillable = ['name', 'description', 'facility', 'task_date'];
}
