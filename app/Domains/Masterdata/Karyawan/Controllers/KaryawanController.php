<?php

namespace App\Domains\Masterdata\Karyawan\Controllers;

use App\Domains\Masterdata\Karyawan\Services\KaryawanService;
use Illuminate\Http\Request;

class KaryawanController
{
    
    protected $karyawanService;
    
    public function __construct(KaryawanService $karyawanService){
    
        $this->karyawanService = $karyawanService;
    
    }   

    public function create(Request $data){
        try {
            $validate = $data->validate([
                'role_id' => 'required|integer|exists:roles,id',
                'name' => 'required|string|max:255', 
                'email' => 'required|string|email|max:255|unique:karyawans',
                'password' => 'required|string|min:8',  
            ]);
            dd($validate);
            $result = $this->karyawanService->create($validate);
            return response()->json([
                'message' => 'Successfully',
                'data' => $result
            ], 200);
        }catch (Exception $error){
            return response()->json([
                'message' => 'Failed',
                'data' => $error->getMessage()
            ], 500);
        }
    }

    public function getAll(){
        try {
            $data = $this->karyawanService->getAll();
            return response()->json([
                'message' => 'Successfully',
                'data' => $data
            ], 200);
        }catch (Exception $error){
            return response()->json([
                'message' => 'Failed',
                'data' => $error->getMessage()
            ], 500);
        }
    }

    public function update(data $data, $id){
        try {
            $validate = $data->validate([
                'role_id' => 'required|integer|exists:roles,id',
                'name' => 'required|string|max:255', 
                'email' => 'required|string|email|max:255|unique:karyawans,email',
                'password' => 'required|string|min:6'
            ]);
            $result = $this->karyawanService->update($data->all(), $id);
            return response()->json([
                'message' => 'Successfully',
                'data' => $result
            ], 200);
        }catch (Exception $error){
            return response()->json([
                'message' => 'Failed',
                'data' => $error->getMessage()
            ], 500);
        }
    }

    public function delete($id){
        try {
            $result = $this->karyawanService->delete($id);
            return response()->json([
                'message' => 'Successfully',
                'data' => $result
            ], 200);
        }catch (Exception $error){
            return response()->json([
                'message' => 'Failed',
                'data' => $error->getMessage()
            ], 500);
        }
    }
}
