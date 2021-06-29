<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function getTask()
    {
        $data = Task::orderBy('id', 'asc')->get();
        return \DataTables::of($data)
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
            ->rawColumns(['Aksi'])
            ->addIndexColumn()
            ->make(true);
    }

    public function index()
    {
        return view('master.task');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'task' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        } else {
            Task::create([
                'task' => $request->task
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
        $data = Task::find($id);
        return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        $validator = \Validator::make($request->all(), [
            'task' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        }

        Task::find($id)->update([
            'task' => $request->task
        ]);

        return response()->json(['success' => 'Data telah diubah.']);
    }

    public function destroy($id)
    {
        Task::find($id)->delete();
        return response()->json(['success' => 'Data telah dihapus.']);
    }
}
