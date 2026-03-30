<?php

namespace App\Domains\Masterdata\Shift\Models;

use Illuminate\Database\Eloquent\Model;

class ShiftModel extends Model
{
    protected $table = 'shifts';
    protected $fillable = [
        'name', 
        'start_time',
        'end_time',
    ];
}
