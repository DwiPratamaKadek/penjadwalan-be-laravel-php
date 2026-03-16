<?php

namespace App\Domains\Masterdata\Karyawan\Models;

use Illuminate\Database\Eloquent\Model;

class KaryawanModel extends Model
{
    protected $table = 'karyawans';
    protected $fillable = [
        'nama',
        'email',
        'password',
        'role',
    ];
    public function role(){
        return $this->belongsTo(RoleModel::class, 'role', 'id');
    }
}
