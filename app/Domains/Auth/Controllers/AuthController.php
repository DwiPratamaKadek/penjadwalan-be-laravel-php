<?php

namespace App\Domains\Auth\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Domains\Auth\Services\AuthService;

class AuthController
{
    protected $AuthService ;
    public function __construct(AuthService $AuthService)
    {
        $this->AuthService = $AuthService;
    } 

    public function login(Request $request){
        try{
            $data = $request->only(['nameOrEmail', 'password']);
            $login = $this->AuthService->login($data);
            
            return response()->json([
                'message ' => 'Successfully', 
                'data' => $login 
            ], 200);

        }catch(Exception $error){
            return response()->json([
                'message' => 'Error',
                'error' => $error->getMessage()
            ], 500);
        }
    }
    
    public function register(Request $request) {
        try{
            $data = $request->only(['role_id', 'name', 'email', 'password' ]);
            $register = $this->AuthService->register($data);
            
            return response()->json([
                'message ' => 'Successfully', 
                'data' => $register
            ], 200);

        }catch(Exception $error){
            return response()->json([
                'message' => 'Error',
                'error' => $error->getMessage()
            ], 500);
        }
    }
}
