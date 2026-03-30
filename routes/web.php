<?php

use Illuminate\Support\Facades\Route;

 Route::prefix('api/v1')->group(function () {
        require base_path('app/Domains/Masterdata/Role/Routes/RoleRoute.php');
        require base_path('app/Domains/Masterdata/Holiday/Routes/HolidayRoute.php');
        require base_path('app/Domains/Masterdata/Shift/Routes/ShiftRoute.php');
        require base_path('app/Domains/Masterdata/Karyawan/Routes/KaryawanRoute.php');
        require base_path('app/Domains/Masterdata/LeaveType/Routes/LeaveTypeRoute.php');
        require base_path('app/Domains/Auth/Routes/AuthRoute.php');
    });

