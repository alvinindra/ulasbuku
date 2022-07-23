<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use Validator;
use App\Models\User;
use File;

class AuthController extends BaseController
{
    public function profile() {
        $user = Auth::user();
        $user->total_reviews = $user->reviews()->count();
        return $this->sendResponse($user, 'Data user berhasil didapatkan.');
    }

    public function edit(Request $request) {
        $input = $request->all();
        $user = Auth::user();

        $validator = Validator::make($input, [
            'name' => 'required',
        ]);
        
        if ($request->hasFile('photo_profile')){
            $file = $request->file('photo_profile');
            $destinationPatch = public_path().'/assets/img/photo_profile/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSucces = $file->move($destinationPatch, $filename);
            $user->photo_profile = $filename;
        }

        if($validator->fails()){
            return response()
            ->json([
                'status' => 'error',
                'message' => $validator->errors()->first(),
                'errors' => $validator->errors()
            ], 422);
        }

        $user->name = $request->name;
        $user->save();
        return $this->sendResponse($user, 'Data user berhasil diubah.');
    }

    public function listReviews(Request $request) {
        $user = Auth::user();
        $reviews = $user->reviews()->with('book')->paginate()->withQueryString();
        return $this->sendResponse($reviews, 'Data review berhasil didapatkan.');
    }

    public function changePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'old_password'=>'required',
            'password'=>'required|min:6|max:100',
            'confirm_password'=>'required|same:password'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'message'=>'Validations fails',
                'errors'=>$validator->errors()->first()
            ],422);
        }

        $user=$request->user();
        if(Hash::check($request->old_password,$user->password)){
            $user->update([
                'password'=>Hash::make($request->password)
            ]);
            return response()->json([
                'message'=>'Password successfully updated',
            ],200);
        }else{
            return response()->json([
                'message'=>'Old password does not matched',
            ],400);
        }

    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8'
        ]);

        if($validator->fails()){
            return response()
            ->json([
                'status' => 'error',
                'message' => $validator->errors()->first(),
                'errors' => $validator->errors()
            ], 422);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
         ]);

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()
            ->json(['data' => $user,'access_token' => $token, 'token_type' => 'Bearer', ]);
    }

    public function login(Request $request)
    {
        if (!Auth::attempt($request->only('email', 'password')))
        {
            return response()
                ->json(['message' => 'Email atau password yang dimasukkan salah.'], 401);
        }

        $user = User::where('email', $request['email'])->firstOrFail();

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()
            ->json(['message' => 'Login telah berhasil','access_token' => $token, 'token_type' => 'Bearer', ]);
    }

    public function logout()
    {
        auth('sanctum')->user()->tokens()->delete();

        return [
            'message' => 'You have successfully logged out and the token was successfully deleted'
        ];
    }
}
