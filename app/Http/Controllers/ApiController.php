<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Car;

use Illuminate\Support\Facades\Hash;

class ApiController extends Controller
{
    
    //User login
    public function login()
    {

        $email =request('email');
        $password =request('password');

        $user=User::where('email',$email)->first();

        if(Hash::check($password,$user->password))
        {
            //Generate token
            $token=$user->createToken('mobile-app')->plainTextToken;
            
            $out=array(
                'status' =>200,
                'token' =>$token,
                'data' =>$user,
                'message' =>'Login Success'
            );
            return response()->json($out);
        }
        else
        {

            $out=array(
                'status' =>406,
                'data' =>'',
                'message' =>'Invalid credentials'
            );
            return response()->json($out);
        }
        
    }

    //Each user cars collection
    public function cars_collection()
    {

        $user_id=auth()->user()->id;

        if(!empty($user_id))
        {

            $carsCollection=Car::where('user_id',$user_id)->get();
            //return $carsCollection;
            if($carsCollection->isNotEmpty())
            {

                $out=array(
                    'status' =>200,
                    'data' =>$carsCollection,
                    'message' =>'User cars listed successfully'
                );
                return response()->json($out);
            }
            else
            {

                $out=array(
                    'status' =>204,
                    'data' =>'',
                    'message' =>"This user doesn't have a car collection"
                );
                return response()->json($out);
            }
            
        }
        else
        {

            $out=array(
                'status' =>406,
                'message' =>'User not authorized'
            );
            return response()->json($out);
        }
        
    }

    //User logout
    public function logout()
    {

        $user_id=auth()->user()->id;
        $user=User::find($user_id);

        //Delete user token
        $user->tokens()->delete();

        $out=array(
            'status' =>200,
            'message' =>'User logout successfully'
        );
        return response()->json($out);
    }

}
