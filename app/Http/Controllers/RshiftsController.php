<?php

namespace App\Http\Controllers;

use App\Models\RShift;
use App\Models\HealthFacility;
use App\Models\Resource;
use Illuminate\Http\Request;

class RShiftsController extends Controller
{
    public function getFormDataHealthFacility()
    {
        $health_facility = HealthFacility::select('id', 'nama')->orderBy('id', 'asc')->get();
        $data['health_facilities'] = "<option value=''>Pilih Lokasi</option>";
        foreach ($health_facility as $hf) {
            $data['health_facilities'] .= "<option value='" . $hf->id . "'>" . $hf->nama . "</option>";
        }
        // dd($data);
        return response()->json($data);
    }

    public function getFormDataResource($id)
    {
        // $resource = Resource::select('id', 'nomor_polisi')->where('health_facility_id', $id)->orderBy('id', 'asc')->get();
        $resource = Resource::with('healthfacility')->where('health_facility_id', $id)->orderBy('health_facility_id', 'asc')->get();
        $data['resources'] = "<option value=''>Pilih Ambulan</option>";
        foreach ($resource as $r) {
            $data['resources'] .= "<option value='" . $r->id . "'>" . $r->nomor_polisi . "</option>";
        }
        // dd($data);
        return response()->json($data);
    }

    public function getRShift()
    {
        $data = RShift::with('healthfacility', 'resource')->orderBy('id', 'asc')->get();
        // dd($data);
        return \DataTables::of($data)
            ->addColumn('Aksi', function ($data) {
                return '
                <div style="margin-bottom:3px;">
                <a id="btn-edit" class="btn btn-sm btn-primary" data-id="' .
                    $data->id .
                    '" title="Edit Data">
                <i class="fa fa-pencil-square-o"></i>
                </a>
                <a id="btn-non-aktif" class="btn btn-sm btn-danger" data-id="' .
                    $data->id .
                    '" title="Non Aktif Shift">
                <i class="glyphicon glyphicon-off"></i>
                </a>
                <a id="btn-detail" class="btn btn-sm btn-warning" data-id="' .
                    $data->id .
                    '" title="Detail Checklist">
                <i class="glyphicon glyphicon-pushpin"></i>
                </a>
                </div>
                ';
            })
            ->rawColumns(['Aksi'])
            ->addIndexColumn()
            ->make(true);
    }

    public function index()
    {
        return view('master.shift');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'nama' => 'required',
            'health_facility_id' => 'required',
            'resource_id' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        } else {
            RShift::create([
                'nama' => $request->nama,
                'health_facility_id' => $request->health_facility_id,
                'resource_id' => $request->resource_id,
                'driver_id' => $request->driver_id,
                'paramedic_id' => $request->paramedic_id
            ]);

            return response()->json(['success' => 'Data telah disimpan.']);
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $shift = RShift::find($id);
        $data['rshift'] = RShift::find($id);
        $health_facility = HealthFacility::select('id', 'nama')->orderBy('id', 'asc')->get();
        $data['health_facilities'] = "<option value='' disabled>Pilih Lokasi</option>";
        foreach ($health_facility as $hf) {
            $data['health_facilities'] .= "<option value='" . $hf->id . "'>" . $hf->nama . "</option>";
        }
        $resource = Resource::select('id', 'nomor_polisi')->where('health_facility_id', $shift->health_facility_id)->orderBy('id', 'asc')->get();
        $data['resources'] = "<option value='' disabled>Pilih Ambulan</option>";
        foreach ($resource as $r) {
            $data['resources'] .= "<option value='" . $r->id . "'>" . $r->nomor_polisi . "</option>";
        }
        // dd($data);
        return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        $validator = \Validator::make($request->all(), [
            'nama' => 'required',
            'health_facility_id' => 'required',
            'resource_id' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        }

        RShift::find($id)->update([
            'nama' => $request->nama,
                'health_facility_id' => $request->health_facility_id,
                'resource_id' => $request->resource_id,
                'driver_id' => $request->driver_id,
                'paramedic_id' => $request->paramedic_id
        ]);

        return response()->json(['success' => 'Data telah diubah.']);
    }

    public function destroy($id)
    {
        RShift::find($id)->delete();
        return response()->json(['success' => 'Data telah dihapus.']);
    }
}
