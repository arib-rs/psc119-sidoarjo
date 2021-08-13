<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Models\Resource;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function getUsers()
    {
        $data = User::with('resource', 'person.healthFacility', 'person.profession', 'role')->where('person_id', '!=', '')->orderBy('username', 'asc')->get();
        return \DataTables::of($data)
            ->editColumn('is_active', function ($data) {

                $return = '<a id="btn-aktif" class="btn btn-sm btn-success" data-id="' .
                    $data->id . '"  title="Nonaktifkan">
                <i class="fa fa-check">
                </i>
                </a>
                ';
                if ($data->is_active != 1) {
                    $return = '<a id="btn-aktif" class=btn btn-sm btn-danger" data-id="' .
                        $data->id . '" title="Aktifkan">
                <i class="fa fa-times">
                 </i>
                </a>
                ';
                }
                return $return;
            })
            ->editColumn('person.profession.tipe_user', function ($data) {

                $return = '<span class="btn btn-sm btn-primary" data-id="' .
                    $data->id . '"  title="User Web" style="border-radius: 20px;">
                <i class="fa fa-desktop">
                </i>
                 Web
                </span>
                ';
                if ($data->person->profession->tipe_user == "User Mobile") {
                    $return = '<span class="btn btn-sm btn-success" data-id="' .
                        $data->id . '"  title="User Mobile" style="border-radius: 20px;">
                <i class="fa fa-mobile">
                </i>
                 Mobile
                </span>
                ';
                }
                return $return;
            })
            ->addColumn('Aksi', function ($data) {
                return '
                <div style="margin-bottom:3px;">
                <a id="btn-edit" class="btn btn-sm btn-primary" data-id="' .
                    $data->id .
                    '" title="Edit Data">
                <i class="fa fa-pencil"></i>
                </a>
                <a id="btn-delete" class="btn btn-sm btn-danger" data-id="' .
                    $data->id .
                    '" title="Hapus Data">
                <i class="fa fa-trash"></i>
                </a>
                </div>
                ';
            })
            ->rawColumns(['Aksi', 'is_active', 'person.profession.tipe_user'])
            ->addIndexColumn()
            ->make(true);
    }
    public function getPersonil()
    {
        $personil = Person::with('user', 'profession', 'healthFacility')->orderBy('fullname', 'asc')->get();
        $data = "<option value=''>-- Pilih Personil --</option>";
        foreach ($personil as $d) {
            if (!$d->user) {
                $data .= "<option data-hf='" . $d->health_facility_id . "' value='" . $d->id . "'>" . $d->fullname . " - " . $d->profession->profesi . " - " . $d->healthFacility->nama . "</option>";
            }
        }
        return response()->json($data);
    }
    public function getResourcesByFaskes($idfaskes)
    {
        $resTerpakai = User::select('resource_id')->where('resource_id', '!=', '')->get()->toArray();
        $resource = Resource::where('health_facility_id', '=', $idfaskes)->whereNotIn('id', $resTerpakai)->orderBy('nomor_polisi', 'asc')->get();
        $data = "<option value=''>-- Pilih Resource --</option>";
        foreach ($resource as $d) {
            $data .= "<option value='" . $d->id . "'>" . $d->nomor_polisi . " - " . $d->kode . "</option>";
        }
        return response()->json($data);
    }
    public function index()
    {
        $role = Role::orderBy('role', 'asc')->get();
        $resource = Resource::select('resources.*', 'health_facilities.nama')->join('health_facilities', 'health_facilities.id', '=', 'resources.id')->orderBy('health_facilities.nama', 'asc')->orderBy('nomor_polisi', 'asc')->get();
        $data['optRole'] = "<option value=''>-- Pilih Level --</option>";
        $data['optResource'] = "<option value=''>-- Pilih Resource --</option>";
        foreach ($role as $d) {
            $data['optRole'] .= "<option value='" . $d->id . "'>" . $d->role . "</option>";
        }
        foreach ($resource as $d) {
            $data['optResource'] .= "<option value='" . $d->id . "'>" . $d->nomor_polisi . " - " . $d->healthfacility->nama . "</option>";
        }
        return view('user_device_management.management_user', $data);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'person_id' => 'required',
            // 'role_id' => 'required',
            // 'resource_id' => 'required_if:role_id,==,6',
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password'  => 'required|string|min:6|confirmed'
        ], [
            'person_id.required' => 'Pilih personil terlebih dahulu',
            // 'role_id.required' => 'Pilih level terlebih dahulu',
            // 'resource_id.required_if' => 'Pilih resource terlebih dahulu',
            'username.unique' => 'Username telah terdaftar',
            'email.unique' => 'Email telah terdaftar',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        } else {
            User::create(
                [
                    'username' => $request->username,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    // 'role_id' => $request->role_id,
                    'person_id' => $request->person_id,
                    // 'resource_id' => $request->resource_id
                ]
            );
            return response()->json(['success' => 'Data telah disimpan.']);
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = User::with('resource', 'person.profession', 'person.healthFacility')->find($id);
        return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        $validator = \Validator::make($request->all(), [
            'person_id' => 'required',
            // 'role_id' => 'required',
            // 'resource_id' => 'required_if:role_id,==,6',
            'username' => 'required|unique:users,username,' . $id,
            'email' => 'required|email|unique:users,email,' . $id,
            // 'password'  => 'required|string|min:6|confirmed'
        ], [
            'person_id.required' => 'Pilih personil terlebih dahulu',
            // 'role_id.required' => 'Pilih level terlebih dahulu',
            // 'resource_id.required_if' => 'Pilih resource terlebih dahulu',
            'username.unique' => 'Username telah terdaftar',
            'email.unique' => 'Email telah terdaftar',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        } else {
            User::find($id)->update(
                [
                    'username' => $request->username,
                    'email' => $request->email,
                    // 'role_id' => $request->role_id,
                    'person_id' => $request->person_id,
                    // 'resource_id' => $request->resource_id
                ]
            );
            return response()->json(['success' => 'Data telah disimpan.']);
        }
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        return response()->json(['success' => 'Data telah dihapus.']);
    }
}
