<?php 

    namespace App\Domains\Masterdata\Karyawan\Services; 

    use App\Domains\Masterdata\Karyawan\Models\KaryawanModel;
    use Illuminate\Support\Facades\Hash;
    use Carbon\Carbon;

    class KaryawanService 
    {
        public function create(array $data){
            $result = KaryawanModel::create([
                'role_id' => $data['role_id'],
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'hire_date' => Carbon::now()
            ]);  
            dd($result);   
            return $result;
        }

        public function getAll(){
            $data = KaryawanModel::all();
            return $data;
        }

        public function update(array $data, $id){
            $result = KaryawanModel::find($id);
            $result->update([
                'role_id' => $data['role_id'],
                'name' => $data['name'],
                'email' => $data['email'],
            ]);
            return $result;
        }

        public function delete($id){
            $result = KaryawanModel::find($id);
            $result->delete();
            return $result;
        }
    }
    
?>