<?php

namespace App\Domains\Masterdata\Role\Models;

use Illuminate\Database\Eloquent\Model;

class RoleModel extends Model
{
    protected $table = 'roles';

    protected $fillable = [
        'name',
        'description',
    ];

    public function karyawans(){
        return $this->hasMany(KaryawanModel::class, 'role', 'id');
    }
}
