<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issues extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'task', 
		'userCreate',
		'userCurrent', 
		'description',
        'task',
		'userCreate',
		'userCurrent',
		'customer',
		'customerNumber',
        'customerName',
		'customerTel',
		'customerMail',
		'paused',
		'waitingForReply',
		'vip',
		'prio',
		'nextIssueID',
		'previousIssueID',
		'description',
		'descriptionInternal',
		'timeClosed',
		'timeInit',
		'timeEstimatedcallback',
		'timeCustomercallback'
    ];
}
