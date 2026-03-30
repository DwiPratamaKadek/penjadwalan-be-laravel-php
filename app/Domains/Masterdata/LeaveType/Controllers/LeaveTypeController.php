<?php

namespace App\Domains\Masterdata\LeaveType\Controllers;

use App\Domains\Masterdata\LeaveType\Services\LeaveTypeService; 
use Illuminate\Http\Request;

class LeaveTypeController
{
    protected $LeaveTypeService;
    public function __construct(LeaveTypeService $LeaveTypeService)
    {
        $this->LeaveTypeService = $LeaveTypeService;
    }

    public function create(Request $data){
        try{
            $validate = $data->validate([
                'name' => 'required|string|max:255', 
                'description' => 'required|string|max:255',
            ]);
            $result = $this->LeaveTypeService->create($validate); 
            return response()->json([
                'message' => 'Successfully',
                'data' => $result
            ], 200);
        }catch(Exception $error){
            return response()->json([
                'message' => 'Error',
                'error' => $error->getMessage()
            ], 500);
        };
    }

    public function getAll(){
        try{
            $data = $this->LeaveTypeService->getAll();
            return response()->json([
                'message' => 'Successfully', 
                'data' => $data
            ],200);
        }catch(Exception $error){
            return respond()->json([
                'message' => 'Error', 
                'error' => $error->getMessage()
            ],500);
        };
    }

    public function update(Request $data, $id){
        try{
            $validate = $data->validate([
                'name' => 'required|string|max:255', 
                'description' => 'required|string|max:255',
            ]);
            $result = $this->LeaveTypeService->update($validate, $id);
            return response()->json([
                'message' => 'Successfully', 
                'data' => $result
            ],200);
        }catch(Exception $error){
            return respond()->json([
                'message' => 'Error', 
                'error' => $error->getMessage()
            ],500);
        };
    }

    public function delete($id){
        try{
            $data = $this->LeaveTypeService->delete($id);
            return response()->json([
                'message' => 'Successfully', 
                'data' => $data
            ],200);
        }catch(Exception $error){
            return respond()->json([
                'message' => 'Error', 
                'error' => $error->getMessage()
            ],500);
        };
    }
}
