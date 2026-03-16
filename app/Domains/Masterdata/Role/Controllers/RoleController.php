<?php

namespace App\Domains\Masterdata\Role\Controllers;

use App\Domains\Masterdata\Role\Services\RoleService;
use Illuminate\Http\Request;

class RoleController
{

    protected $roleService;

    public function __construct(RoleService $roleService)
    {
        $this->roleService = $roleService;
    }

    public function create(Request $request){
        try {

            $result = $this->roleService->create($request);
            return response()->json([
                'message' => 'Successfully',
                'data' => $result
            ], 200);
        }catch(Exception $error){
            return response()->json([
                'message' => 'Error',
                'error' => $error->getMessage()
            ], 500);
        }
    }

    public function getAll(){
        try{
            $result = $this->roleService->getAll();
            return response()->json([
                'message' => 'Successfully',
                'data' => $result
            ], 200);
        }catch(Exception $error){
            return response()->json([
                'message' => 'Error',
                'error' => $error->getMessage()
            ], 500);
        }
    }

    public function update(Request $request, $id){
         try{
            $result = $this->roleService->update($request, $id);
            return response()->json([
                'message' => 'Successfully',
                'data' => $result
            ], 200);
        }catch(Exception $error){
            return response()->json([
                'message' => 'Error',
                'error' => $error->getMessage()
            ], 500);
        }
       
    }

    public function delete($id){
         try{
            $result = $this->roleService->delete($id);
            return response()->json([
                'message' => 'Successfully',
                'data' => $result
            ], 200);
        }catch(Exception $error){
            return response()->json([
                'message' => 'Error',
                'error' => $error->getMessage()
            ], 500);
        }
    }

}
