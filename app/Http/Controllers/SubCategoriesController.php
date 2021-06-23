<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoriesController extends Controller
{
    public function index()
    {
        $sub_category = SubCategory::all();

        return view('master.sub_kategori', ['sub_category' => $sub_category]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'sub_kategori' => 'required',
            'is_medis' => 'required',
            'is_emergency' => 'required',
        ]);

        SubCategory::create($request->all());
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
