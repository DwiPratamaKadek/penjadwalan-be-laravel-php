<?php

namespace App\Domains\Masterdata\LeaveType\Models;

use Illuminate\Database\Eloquent\Model;

class LeaveTypeModel extends Model
{
    protected $table -= 'leave_types';
    protected $fillable = [
        'name', 
        'description',
    ]
}
