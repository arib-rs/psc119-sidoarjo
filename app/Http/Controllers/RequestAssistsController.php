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
                return '<a id="btn-lihat" class="btn btn-xs btn-info" data-id="' .
                    $data->id .
                    '" title="Lihat Detail">
                    <i class="glyphicon glyphicon-pushpin"></i>
                </a>
                <a id="btn-detail" class="btn btn-xs btn-primary" data-id="' .
                    $data->id .
                    '" title="Detail Penanganan">
                <i class="fa fa-files-o"></i>
                </a>
                <br>
                <a id="btn-edit" class="btn btn-xs btn-warning" data-id="' .
                    $data->id .
                    '" title="Edit Kejadian">
                <i class="fa fa-pencil-square-o"></i>
                </a>
                <a id="btn-monitor" class="btn btn-xs btn-danger" data-id="' .
                    $data->id .
                    '" title="Monitoring Penanganan">
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
        //
    }

    public function edit($id)
    {
        //
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
