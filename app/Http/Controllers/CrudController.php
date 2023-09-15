<?php

namespace App\Http\Controllers;

use App\Models\CrudModel;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function index() {
        $users = CrudModel::all();
    return view('crud.index', compact('users'));
    }

    public function add(){
    return view('crud.add');
    }

    public function store(Request $request){
        // dd($request);
        $data = $request -> validate([
            'username' => 'required',
            'phone' => 'numeric',
            'password' => 'nullable'
        ]);

        //using Model class to store data in db
        $newUser = CrudModel::create($data);
    return redirect (route ('crud.index'));
    }

    public function edit(CrudModel $crudmodel){
    return view('crud.edit', compact('crudmodel'));
    }

    public function update(CrudModel $crudmodel, Request $request){
        $data = $request->validate([
            'username' => 'required',
            'phone' => 'required',
            'password' => 'numeric'
        ]);
        $crudmodel ->update($data);
    return redirect (route ('crud.index'));
    }

    public function destroy(CrudModel $crudmodel){
        $crudmodel-> delete();
    return redirect (route ('crud.index'));
    }
}
