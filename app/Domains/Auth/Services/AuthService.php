<?php 
    namespace App\Domains\Auth\Services;

    use App\Domains\Auth\Models\AuthModel;
    use Carbon\Carbon;
    use Illuminate\Support\Facades\Hash;

    class AuthService
    {
        public function register(array $data){
            
            $user = AuthModel::create([
                'role_id' => $data['role_id'],
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'hire_date' => Carbon::now()
            ]);

            $token = $user->createToken('auth_token')->plainTextToken;
    
            return[
                'user' => $user,
                'token' => $token
            ] ;
        }

        public function login(array $data){
        
            $nameOrEmail = AuthModel::where('name', $data['nameOrEmail'])
                            ->orWhere('email', $data['nameOrEmail'])
                            ->first();

            if(!$nameOrEmail || !Hash::check($data['password'], $nameOrEmail->password)){
                return [
                    "message" => "login gagal"
                ];
            };
            
            $token = $nameOrEmail->createToken('auth_token')->plainTextToken;

            return [
                "nameOrEmail" => $nameOrEmail, 
                "token" => $token
            ];

            

        } 
    }
?> 