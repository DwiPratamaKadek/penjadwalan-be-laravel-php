<?php

use Illuminate\Support\Facades\Route;

 Route::prefix('api/v1')->group(function () {
        require base_path('app/Domains/Masterdata/Role/Routes/RoleRoute.php');
        require base_path('app/Domains/Masterdata/Holiday/Routes/HolidayRoute.php');
    });

