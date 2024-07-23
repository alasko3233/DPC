<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    
    public function LoginUser(Request $request){
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $user=Auth::user();
            $success['token'] = $user->createToken('Personal Access token')->plainTextToken;
            $success['name'] =$user->lastname.' '.$user->firstname;
            $success['is_active']= $user->is_active;

               return response()->json([
                // 'id' => $engin->id ,
                'success'=> true, 
                'token'=>$success['token'],
                'name'=>$success['name'],
                'is_active'=>$success['is_active'],
                'data' => $success, 
                'message'=> 'Utilisateur Connecté avec success',

            ], 200);

        }else{
            return response()->json([
                'success'=> false, 
                'Message' => 'Utilisateur introuvable ! '
            ],401); 

        }
    }
    public function RegisterUser(Request $request)
    {
        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'role' => 'required|in:Student,Instructor', // Utilisation de la règle 'in'
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);
        
    
        $user = new User();
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->password = bcrypt($request->password); // Assurez-vous de hasher le mot de passe
        $user->assignRole($request->role);
        // Vous pouvez ajouter d'autres champs utilisateur ici selon vos besoins
    
        $user->save();
    
        return response()->json([
            'success' => true,
            'message' => 'Utilisateur inscrit avec succès!',
        ], 201);
    }
    public function LogoutUser(Request $request)
    {
        // $user=$request->user();
        $user = auth('sanctum')->user();
        if($user){
            $users = auth('sanctum')->user()->tokens()->delete();
            auth()->logout();
           // auth()->user()->tokens()->delete();
           return response()->json([
               'user'=>$user,
               'message' => 'Successfully logged out'
           ],201);
   
        }else{
            return response()->json([
                'message' => 'Failed logged out'
            ],401);
   
        }
        // dd($users);
    }

}
