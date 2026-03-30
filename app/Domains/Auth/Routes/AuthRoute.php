<?php 
    use Illuminate\Support\Facades\Route;
    use App\Domains\Auth\Controllers\AuthController;

    Route::prefix('auth')->group(function(){
        Route::post('/login', [AuthController::class, 'login']);
        Route::post('/register', [AuthController::class, 'register']);
    })

    
?> 