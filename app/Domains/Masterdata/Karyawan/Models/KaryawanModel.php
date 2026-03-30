<?php

namespace App\Domains\Masterdata\Karyawan\Models;

use App\Domains\Masterdata\Role\Models;
use Illuminate\Database\Eloquent\Model;

class KaryawanModel extends Model
{
    protected $table = 'karyawans';
    protected $fillable = [
        'role_id',
        'name',
        'email',
        'password',
        'hire_date'
    ];
    public function role(){
        return $this->belongsTo(RoleModel::class, 'role_id', 'id');
    }
}
