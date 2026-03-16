<?php 

    namespace App\Domains\Masterdata\Role\Services;

    use App\Domains\Masterdata\Role\Models\RoleModel;
    use Illuminate\Http\Request;

    class RoleService
    {
        public function create(Request $data){
            $data = RoleModel::create([
                'name' => $data['name'],
                'description' => $data['description'],
            ]);
            return $data;
        } 
        
        public function getAll(){
            $data = RoleModel::all();
            return $data;
        }

        public function update(Request $data, $id){
            $result = RoleModel::find($id);
            $result->update([
                'name'=> $data['name'],
                'description' => $data['description'],
            ]);
            return $result;
        }

        public function delete($id){
            $result = RoleModel::find($id);
            $result->delete();
            return $result;
        }
    } 
?>