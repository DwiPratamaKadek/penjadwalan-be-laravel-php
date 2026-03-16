<?php

namespace App\Domains\Masterdata\Holiday\Models;

use Illuminate\Database\Eloquent\Model;

class HolidayModel extends Model
{
    protected $table = 'holidays';
    protected $fillable = [
        'name',
        'holiday_date',
    ];
}
