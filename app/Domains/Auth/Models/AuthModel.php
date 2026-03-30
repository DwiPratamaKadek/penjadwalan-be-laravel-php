<?php

namespace App\Domains\Auth\Models;

use Laravel\Sanctum\HasApiTokens; 
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use App\Domains\Masterdata\Role\Models\RoleModel;

class AuthModel extends Authenticatable
{
    use HasApiTokens, Notifiable; 

    protected $table = 'karyawans'; 

    protected $fillable = [
        'role_id',
        'name',
        'email',
        'password',
        'hire_date'
    ];

    // protected $hidden = [
    //     'password',
    // ];

    // protected $casts = [
    //     'password' => 'hashed',
    // ];

    public function role(){
        return $this->belongsTo(RoleModel::class, 'role_id', 'id');
    }
}
