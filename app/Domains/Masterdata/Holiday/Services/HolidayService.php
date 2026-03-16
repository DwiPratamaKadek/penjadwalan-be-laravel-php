<?php

    namespace App\Domains\Masterdata\Holiday\Services;

    use App\Domains\Masterdata\Holiday\Models\HolidayModel;
    use Illuminate\Http\Request;

    class HolidayService
    {
        public function create(Request $data){
            $request = HolidayModel::create([
                'name' => $data->name,
                'holiday_date' => $data->holiday_date,
            ]);
            return $request;
        }
        
        public function getAll(){
            $data = HolidayModel::all();
            return $data;
        }

         public function update(Request $data, $id){
            $result = HolidayModel::find($id);
            $result->update([
                'name'=> $data['name'],
                'holiday_date' => $data['holiday_date'],
            ]);
            return $result;
        }

        public function delete($id){
            $result = HolidayModel::find($id);
            $result->delete();
            return $result;
        }
    }
?>