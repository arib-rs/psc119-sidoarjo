<?php

namespace App\Http\Controllers;

use App\Models\Incident;
use App\Models\Resource;
use App\Models\Session;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ApiController extends Controller
{
    public function Login(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'username' => 'required|string|exists:users,username',
            'password' => 'required|string',
        ], [
            'username.exists' => "Username belum terdaftar"
        ]);
        $data = [];
        if ($validator->fails()) {
            $data['msg'] = $validator->errors()->first();
        } else {
            $user = User::with('person.healthFacility', 'person.profession', 'role')->where('username', '=', $request->username)->first();
            $password = Hash::check($request->password, $user->password);
            if ($password) {
                $data['msg'] = 'Login Berhasil';
                $data['user'] = $user;
                $data['resources'] = '';
                if ($user->role_id == 6) {
                    $data['resources'] = Resource::where('health_facility_id', '=', $user->person->health_facility_id)->get();
                }
                $idSession = Session::create([
                    'hostname' => $request->hostname,
                    'device_id' => $request->device_id,
                    'status' => 'Ready',
                    'user_id' => $user->id,
                    'login_at' => now()
                ])->id;
                $data['session_id'] = $idSession;
            } else {
                $data['msg'] = 'Password Salah';
            }
        }
        return response()->json($data);
    }
    public function Logout(Request $request)
    {
        Session::where([
            'user_id' => $request->user->id,
            'device_id' => $request->device_id,
            'hostname' =>  $request->hostname,
            'logout_at' => null
        ])->update([
            'logout_at' => now(),
            'status' => 'Mobile Login Ended'
        ]);

        $data['msg'] = 'Anda telah logout';
        return response()->json($data);
    }
    public function pilihResource(Request $request)
    {
        Session::where([
            'id' => $request->session_id,
        ])->update([
            'resource_id' => $request->resource_id,
            'lng' => $request->lng,
            'lat' => $request->lat,
            'status' => $request->status
        ]);
    }
    public function storeLocation(Request $request)
    {
        if ($request->lng && $request->lat) {
            Session::where([
                'id' => $request->session_id,
            ])->update([
                'lng' => $request->lng,
                'lat' => $request->lat,
                'status' => $request->status
            ]);
        } else {
            Session::where([
                'id' => $request->session_id,
            ])->update([
                'status' => $request->status
            ]);
        }
    }
    public function changeStatus(Request $request)
    {
        Session::where([
            'id' => $request->session_id,
        ])->update([
            'status' => $request->status
        ]);
    }
    public function getPenugasan()
    {
    }
}
