<?php

namespace App\Http\Controllers;

use App\Models\Incident;
use Illuminate\Http\Request;

class RequestAssistsController extends Controller
{
    public function getIncidents()
    {
        $data = Incident::with('category')->orderBy('created_at', 'desc')->get();
        return \DataTables::of($data)
            ->addColumn('Aksi', function ($data) {
                return '<a id="btn-lihat" class="btn btn-sm btn-info" data-id="' .
                    $data->id .
                    '" title="Lihat Detail" style="margin: 4px 3px; background-color: #8e44ad; border-color: #8e44ad;">
                    <i class="glyphicon glyphicon-pushpin"></i>
                </a>
                <a id="btn-detail" class="btn btn-sm btn-primary" data-id="' .
                    $data->id .
                    '" title="Detail Penanganan" style="margin: 4px 3px; background-color: #428bca; border-color: #428bca;">
                <i class="fa fa-files-o"></i>
                </a>
                <br>
                <a id="btn-edit" class="btn btn-sm btn-warning" data-id="' .
                    $data->id .
                    '" title="Edit Kejadian" style="margin: 4px 3px; background-color: #45b6e0; border-color: #45b6e0;">
                <i class="fa fa-pencil-square-o"></i>
                </a>
                <a id="btn-monitor" class="btn btn-sm btn-danger" data-id="' .
                    $data->id .
                    '" title="Monitoring Penanganan" style="margin: 4px 3px; background-color: #89c4f4; border-color: #89c4f4;">
                <i class="fa fa-desktop"></i>
                </a>
                ';
            })
            ->rawColumns(['Aksi'])
            ->addIndexColumn()
            ->make(true);
    }
    public function getIncident($id)
    {
        $data = Incident::with('category')->find($id);
        // dd($data);
        return response()->json($data);
    }
    public function index()
    {
        return view('kejadian_bantuan.req_bantuan');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        return view('kejadian_bantuan.detail_penanganan');
    }

    public function edit($id)
    {
        return view('kejadian_bantuan.edit_kejadian');
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
