<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
class UserController extends Controller
{

    public $successStatus = 200;

    /**
     * login api
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(){
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
            $user = Auth::user();
            $success['token'] =  $user->createToken('MyApp')-> accessToken;

            return response()->json(['data'=>$success , 'success' => true], $this-> successStatus);

        }
        else{
            return response()->json(['message'=>'SOme thing Wrong', 'success' => false], 401);
        }
    }
    /**
     * Register api
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {
        $check = User::where('email', $request->email)->first();
        if ($check){
            return response()->json(['success' => 'false']);
        }
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
//        $success['token'] =  $user->createToken('MyApp')-> accessToken;
        $success['id'] =  $user->id;
        $success['success'] = "true";
        return response()->json($success);
    }
    /**
     * details api
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function details()
    {
        $user = Auth::user();
        return response()->json(['success' => $user], $this-> successStatus);
    }
}
