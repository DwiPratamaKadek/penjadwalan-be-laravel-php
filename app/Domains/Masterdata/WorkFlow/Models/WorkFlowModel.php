<?php

namespace App\Domains\Masterdata\WorkFlow\Models;

use Illuminate\Database\Eloquent\Model;

class WorkFlowModel extends Model
{
    protected $table = 'work_flows';
    protected $fillable = [
        'work_date',
        'max_hour_per_day',
        'max_hour_per_week',
        'max_night_hour_per_week',
    ];
}
