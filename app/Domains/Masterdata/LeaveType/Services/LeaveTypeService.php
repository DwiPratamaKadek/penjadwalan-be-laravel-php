<?php 

    namespace App\Domains\Masterdata\LeaveType\Services; 

    use App\Domains\Masterdata\LeaveType\Models\LeaveTypeModel;
    
    class LeaveTypeService
    {
        public function create(array $data){
            $data = LeaveTypeModel::create([
                'name' => $data['name'], 
                'description' => $data['description'], 
            ]);
            return $data; 
        }

        public function getAll(){
            $data = LeaveTypeModel::all();
            return $data;
        }

        public function update(array $data, $id){
            $data = LeaveTypeModel::find($id); 
            $data->update([
                'name' => $data['name'], 
                'description' => $data['description'], 
            ]);
            return $data; 
        }

        public function delete($id){
            $data = LeaveTypeModel::find($id); 
            $data->delete(); 
            return $data;
        }
    }


?>