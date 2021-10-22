<?php

namespace App\Http\Controllers;

use App\{Position, RankGroup, Role, user, Unit};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        //load data
        $users = user::all();
        $login = Auth::user();
        //buka halaman dan kirim data, kirim data = compactif
        if($login->role_id == 2){
            $users = user::whereIn('position_id',$login->bawahan())->whereIn('unit_id',$login->unitTugas())->get();
        }
        return view('kelolauser.index', compact('users'));

    }

    public function create()
    {
        $units= Unit::pluck('name','id');
        $jabatans= Position::pluck('name','id');
        $pangkats= RankGroup::pluck('name','id');
        $roles= Role::pluck('name','id');
        return view('kelolauser.create', compact('units', 'jabatans','pangkats','roles'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
       $request->validate([
           'nip'=>'required',
           'name' => 'required',
           'unit_id'=>'required',
           'position_id'=>'required',
           'rank_id'=>'required',
           'email'=>'required',
           'password'=>'required',
           'role_id'=>'required',
       ]);
        user::create([
            'nip' => $request->nip,
            'name' => $request->name,
            'unit_id' => $request->unit_id,
            'position_id'=>$request->position_id,
            'rank_id'=>$request->rank_id,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'role_id'=>$request->role_id,

        ]);
        return redirect()->route('kelolauser.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id) 
    {
        $users = user::find($id);
        $units= Unit::pluck('name','id');
        $jabatans= Position::pluck('name','id');
        $pangkats= RankGroup::pluck('name','id');
        $roles= Role::pluck('name','id');
        return view('kelolauser.edit', compact('users','units', 'jabatans','pangkats','roles'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nip'=>'required',
            'name' => 'required',
           'unit_id'=>'required',
           'position_id'=>'required',
           'rank_id'=>'required',
           'email'=>'required',
           'role_id'=>'required',
        ]);
        $users = user::find($id);
        $users->update([
            'nip' => $request->nip,
            'name' => $request->name,
            'unit_id' => $request->unit_id,
            'position_id'=>$request->position_id,
            'rank_id'=>$request->rank_id,
            'email'=>$request->email,
            'role_id'=>$request->role_id,
        ]);
        if($request->password){}
        return redirect()->route('kelolauser.index');
    }

    public function destroy($id)
    {
        $users = user::find($id);
        $users->delete();

        return redirect()->route('kelolauser.index');
    }
}
