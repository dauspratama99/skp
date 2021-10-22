<?php

namespace App\Http\Controllers;

use App\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    public function index()
    {
        //load data
        $positions = Position::all();
        //buka halaman dan kirim data, kirim data = compact
        return view('daftarjabatan.index', compact('positions'));
    }

    public function create()
    {
       $positions=Position::pluck('name','id');
        return view('daftarjabatan.create', compact('positions'));
    }

    public function store(Request $request)
    {
       $request->validate([
           'parent_id'=> 'required',
           'name'=>'required'
       ]);
       Position::create([
            'parent_id' => $request->parent_id,
            'name' => $request->name
        ]);
        return redirect()->route('daftarjabatan.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id) 
    {
        $positions=Position::where('id','<>',$id)->pluck('name','id');
        $Position = Position::find($id);
        return view('daftarjabatan.edit', compact('Position','positions'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'parent_id'=> '',
            'name'=>'required'
        ]);
        $Position = Position::find($id);
         $Position->update([
             'parent_id' => $request->parent_id,
             'name' => $request->name
         ]);
         return redirect()->route('daftarjabatan.index');
    }

    public function destroy($id)
    {
        $Position = Position::find($id);
        $Position->delete();

        return redirect()->route('daftarjabatan.index');
    }
}