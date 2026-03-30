<?php 

    namespace App\Domains\Masterdata\Shift\Services;

    use App\Domains\Masterdata\Shift\Models\ShiftModel;
    use Illuminate\Http\Request;

    class ShiftService {

         public function create(Request $data){
            $request = ShiftModel::create([
                'name' => $data->name,
                'start_time' => $data->start_time,
                'end_time' => $data->end_time,
            ]);
            return $request;
        }
        
        public function getAll(){
            $data = ShiftModel::all();
            return $data;
        }

         public function update(Request $data, $id){
            $result = ShiftModel::find($id);
            $result->update([
                'name'=> $data['name'],
                'start_time' => $data['start_time'],
                'end_time' => $data['end_time'],
            ]);
            return $result;
        }

        public function delete($id){
            $result = ShiftModel::find($id);
            $result->delete();
            return $result;
        }
    }
?>