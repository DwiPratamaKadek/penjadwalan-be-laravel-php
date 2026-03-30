<?php 

    use Illuminate\Support\Facades\Route;
    use App\Domains\Masterdata\Shift\Controllers\ShiftController;

    Route::prefix('shifts')->group(function () {
        Route::post('/', [ShiftController::class, 'create']);
        Route::get('/', [ShiftController::class, 'getAll']);
        Route::put('/{id}', [ShiftController::class, 'update']);
        Route::delete('/{id}', [ShiftController::class, 'delete']);
    });  
?>
