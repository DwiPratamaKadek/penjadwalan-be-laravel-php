<?php 

    use Illuminate\Support\Facades\Route;
    use App\Domains\Masterdata\LeaveType\Controllers\LeaveTypeController;

    Route::prefix('leavetypes')->group(function () {
        Route::post('/', [LeaveTypeController::class, 'create']);
        Route::get('/', [LeaveTypeController::class, 'getAll']);
        Route::put('/{id}', [LeaveTypeController::class, 'update']);
        Route::delete('/{id}', [LeaveTypeController::class, 'delete']);
    });  
?>
