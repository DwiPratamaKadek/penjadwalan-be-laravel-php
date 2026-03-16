<?php 

    use Illuminate\Support\Facades\Route;
    use App\Domains\Masterdata\Role\Controllers\RoleController;

    Route::prefix('roles')->group(function () {
        Route::post('/', [RoleController::class, 'create']);
        Route::get('/', [RoleController::class, 'getAll']);
        Route::put('/{id}', [RoleController::class, 'update']);
        Route::delete('/{id}', [RoleController::class, 'delete']);
    });


?>