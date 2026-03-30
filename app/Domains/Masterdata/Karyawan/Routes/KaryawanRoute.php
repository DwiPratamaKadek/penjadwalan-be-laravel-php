<?php 

    use Illuminate\Support\Facades\Route;
    use App\Domains\Masterdata\Karyawan\Controllers\KaryawanController;

    Route::prefix('karyawans')->group(function () {
        Route::post('/', [KaryawanController::class, 'create']);
        Route::get('/', [KaryawanController::class, 'getAll']);
        Route::put('/{id}', [KaryawanController::class, 'update']);
        Route::delete('/{id}', [KaryawanController::class, 'delete']);
    });  
?>
