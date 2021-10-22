<?php

namespace App\Http\Controllers;

use App\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function index()
    {
        //load data
        $units = Unit::all();
        //buka halaman dan kirim data, kirim data = compact
        return view('unitkerja.index', compact('units'));
    }

    public function create()
    {
       $units=Unit::pluck('name','id');
        return view('unitkerja.create', compact('units'));
    }

    public function store(Request $request)
    {
       $request->validate([
           'parent_id'=> '',
           'name'=>'required'
       ]);
        Unit::create([
            'parent_id' => $request->parent_id,
            'name' => $request->name
        ]);
        return redirect()->route('unitkerja.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id) 
    {
        $units=Unit::where('id','<>',$id)->pluck('name','id');
        $unit = Unit::find($id);
        return view('unitkerja.edit', compact('unit','units'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'parent_id'=> 'required',
            'name'=>'required'
        ]);
        $unit = Unit::find($id);
         $unit->update([
             'parent_id' => $request->parent_id,
             'name' => $request->name
         ]);
         return redirect()->route('unitkerja.index');
    }

    public function destroy($id)
    {
        $unit = Unit::find($id);
        $unit->delete();

        return redirect()->route('unitkerja.index');
    }
}