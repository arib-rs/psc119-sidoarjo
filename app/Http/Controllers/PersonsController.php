<?php

namespace App\Http\Controllers;

use App\Models\HealthFacility;
use App\Models\HFProfession;
use App\Models\Person;
use Illuminate\Http\Request;

class PersonsController extends Controller
{
    public function getFaskes()
    {
        $faskes = HealthFacility::orderBy('nama', 'asc')->get();
        $data = "<option value=''>-- Pilih Lokasi --</option>";
        foreach ($faskes as $d) {
            $data .= "<option value='" . $d->id . "'>" . $d->nama . "</option>";
        }
        return response()->json($data);
    }
    public function getProfessionsByHF($id)
    {
        $profesi = HFProfession::with('profession')->where('health_facility_id', '=', $id)->get();
        $data = '';
        if (count($profesi) > 0) {
            $data = "<option value=''>-- Pilih Profesi --</option>";
            foreach ($profesi as $d) {
                $data .= "<option value='" . $d->profession_id . "'>" . $d->profession->profesi . "</option>";
            }
        } else {
            $data = "<option value=''>-- Profesi tidak tersedia --</option>";
        }
        return response()->json($data);
    }
    public function getPersonByHF($id)
    {
        $data = Person::with('profession')->where('health_facility_id', '=', $id)->orderBy('fullname', 'asc')->get();
        return \DataTables::of($data)
            ->addColumn('Aksi', function ($data) {
                return '<a id="btn-edit" class="btn btn-xs btn-primary" data-id="' .
                    $data->id .
                    '" title="Edit Data">
                <i class="fa fa-pencil"></i>
                </a>
                <a id="btn-delete" class="btn btn-xs btn-danger" data-id="' .
                    $data->id .
                    '" title="Hapus Data">
                <i class="fa fa-trash"></i>
                </a>';
            })
            ->rawColumns(['Aksi'])
            ->addIndexColumn()
            ->make(true);
    }
    public function index()
    {
        $faskes = HealthFacility::orderBy('nama', 'asc')->get();
        $data['optFaskes'] = "<option value=''>-- Pilih Lokasi --</option>";
        foreach ($faskes as $d) {
            $data['optFaskes'] .= "<option value='" . $d->id . "'>" . $d->nama . "</option>";
        }
        return view('user_device_management.personil', $data);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'fullname' => 'required',
            'gender' => 'required',
            'health_facility_id' => 'required',
            'profession_id' => 'required'
        ], [
            'profession_id.required' => 'Pilih profesi terlebih dahulu',
            'health_facility_id.required' => 'Pilih lokasi terlebih dahulu'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        } else {
            Person::create($request->all());
            return response()->json(['success' => 'Data telah disimpan.']);
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = Person::find($id);
        return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        $validator = \Validator::make($request->all(), [
            'fullname' => 'required',
            'gender' => 'required',
            'health_facility_id' => 'required',
            'profession_id' => 'required'
        ], [
            'profession_id.required' => 'Pilih profesi terlebih dahulu',
            'health_facility_id.required' => 'Pilih lokasi terlebih dahulu'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        } else {
            Person::find($id)->update($request->all());
            return response()->json(['success' => 'Data telah diubah.']);
        }
    }

    public function destroy($id)
    {
        Person::find($id)->delete();
        return response()->json(['success' => 'Data telah dihapus.']);
    }
}
