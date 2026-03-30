<?php

namespace App\Domains\Masterdata\Shift\Controllers;

use App\Domains\Masterdata\Shift\Services\ShiftService;
use Illuminate\Http\Request;

class ShiftController 
{
    protected $shiftService;

    public function __construct(ShiftService $shiftService)
    {
        $this->shiftService = $shiftService;
    }

    public function create(Request $request) {
        try {
            $data = $this->shiftService->create($request);
            return response()->json([
                'message' => 'Successfully', 
                'data' => $data
            ],200);
        }catch(Exception $error){
            return respond()->json([
                'message' => 'Error',
                'error' => $error->getMessage()
            ],500);

        }
    }

    public function getAll(Request $request) {
        try {
            $data = $this->shiftService->getAll($request);
            return response()->json([
                'message' => 'Successfully', 
                'data' => $data
            ],200);
        }catch(Exception $error){
            return respond()->json([
                'message' => 'Error',
                'error' => $error->getMessage()
            ],500);

        }
    }

    public function update(Request $request, $id) {
        try {
            $data = $this->shiftService->update($request, $id);
            return response()->json([
                'message' => 'Successfully', 
                'data' => $data
            ],200);
        }catch(Exception $error){
            return respond()->json([
                'message' => 'Error',
                'error' => $error->getMessage()
            ],500);

        }
    }

    public function delete($id) {
        try {
            $data = $this->shiftService->delete($id);
            return response()->json([
                'message' => 'Successfully', 
                'data' => $data
            ],200);
        }catch(Exception $error){
            return respond()->json([
                'message' => 'Error',
                'error' => $error->getMessage()
            ],500);

        }
    }
}
