<?php

    namespace App\Domains\Masterdata\Holiday\Controllers;

    use App\Domains\Masterdata\Holiday\Services\HolidayService;
    use Exception;
    use Illuminate\Http\Request;

class HolidayController
{
    protected $holidayService;

    public function __construct(HolidayService $holidayService)
    {
        $this->holidayService = $holidayService;
    }

    public function create(Request $request){
        try {
            $result = $this->holidayService->create($request);
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
            $result = $this->holidayService->getAll();
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
            $result = $this->holidayService->update($request, $id);
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
            $result = $this->holidayService->delete($id);
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
