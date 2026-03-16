<?php 

    use Illuminate\Support\Facades\Route;
    use App\Domains\Masterdata\Holiday\Controllers\HolidayController;

    Route::prefix('holidays')->group(function () {
        Route::post('/', [HolidayController::class, 'create']);
        Route::get('/', [HolidayController::class, 'getAll']);
        Route::put('/{id}', [HolidayController::class, 'update']);
        Route::delete('/{id}', [HolidayController::class, 'delete']);
    });  
?>
