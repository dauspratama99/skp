<?php

namespace App\Http\Controllers;

use App\Realiation;
use App\Target;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RealiationController extends Controller
{
    public function index()
    {
        $data_realisasi = DB::table('realiations')->get();
        $data_target = Realiation::realisasi();
        return view(
            'realisasi/index',[
                'data_realisasi' => $data_realisasi,
                'data_target' => $data_target,

            ]
           
        );
    }


    public function create()
    {
        $target = Target::all();
        return view(
            'realisasi/form',
            [
                'url' => 'realisasi.store',
                'target' => $target,


            ]
        );
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'id'     => 'required',
            'kuantitas' => 'required',
            'kredit' => 'required',
            'mutu' => 'required',
            'biaya' => 'required',
            'waktu' => 'required',

        ]);

        DB::table('realiations')->insert([
            'id' => $request->id,
            'kuantitas' => $request->kuantitas,
            'kredit' => $request->kredit,
            'mutu' => $request->mutu,
            'biaya' => $request->biaya,
            'waktu' => $request->waktu,
        ]);

        return redirect()
            ->route('realiation')
            ->with('message', 'Data berhasil ditambahkan');
    }

    public function edit(Realiation $realiation)
    {
        $target = Target::all();

        return view(
            'realisasi/form',
            [
                'url' => 'realiation.update',
                'target' => $target,
                'realiation' => $realiation

            ]
        );
    }

    public function update(Request $request, Realiation $realiation)
    {
        $validator = Validator::make($request->all(), [
            'id'     => 'required',
            'quantity' => 'required',
            'credit_number' => 'required',

        ]);
        if ($validator->fails()) {
            return redirect()
                ->route('target.update', $realiation->id)
                ->withErrors($validator)
                ->withInput();
        } else {
            // dd($target->id);
            $realiation->id = $request->input('id');
            $realiation->quantity = $request->input('quantity');
            $realiation->credit_number = $request->input('credit_number');
            $realiation->save();

            return redirect()
                ->route('realiation')
                ->with('message', 'Data berhasil diedit');
        }
    }

    public function destroy(Realiation $realiation)
    {
        $realiation->forceDelete();
        return redirect()
            ->route('realiation')
            ->with('message', 'Data berhasil dihapus');
    }

    // public function create()
    // {
    //     $realiation = Realiation::pluck('id');
    //     return view('realisasitahunan.create', compact('realiation'));
    // }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'quantity' => 'required',
    //         'credit_number' => 'required',
    //         'mutu' => 'required',
    //         'cost' => 'required',
    //         'time' => 'required',

    //     ]);
    //     Realiation::create([
    //         'quantity' => $request->quantity,
    //         'credit_number' => $request->credit_number,
    //         'mutu' => $request->mutu,
    //         'cost' => $request->cost,
    //         'time' => $request->time,

    //     ]);
    //     return redirect()->route('realisasitahunan.index');
    // }

    // public function show($id)
    // {
    //     //
    // }

    // public function edit($id)
    // {
    //     $realiation = Realiation::find($id);
    //     return view('realisasitahunan.edit', compact('realiation'));
    // }

    // public function update(Request $request, $id)
    // {
    //     $request->validate([
    //         'quantity' => 'required',
    //         'credit_number' => 'required',
    //         'mutu' => 'required',
    //         'cost' => 'required',
    //         'time' => 'required',

    //     ]);

    //     $realiation = Realiation::find($id);
    //     $realiation->update([
    //         'quantity' => $request->quantity,
    //         'credit_number' => $request->credit_number,
    //         'mutu' => $request->mutu,
    //         'cost' => $request->cost,
    //         'time' => $request->time,

    //     ]);
    //     return redirect()->route('realisasitahunan.index');
    // }

    // public function destroy($id)
    // {
    //     $realiation = Realiation::find($id);
    //     $realiation->delete();

    //     return redirect()->route('realisasitahunan.index');
    // }
}
