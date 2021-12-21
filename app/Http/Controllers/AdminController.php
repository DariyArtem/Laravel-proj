<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){

        return view('Admin.users', ['result'=> User::all()]);
    }
    public function edit($id)
    {

        return view('Admin.edit', ['result' => User::where('id', $id)->get(), 'roles' => Role::all()]);
    }

    public function update(Request  $request, $id)
    {


        $validateFields = $request->validate([
            'status' => 'required',
            'role' => 'required',

        ]);
        $status = 0;

        if($validateFields['status'] === 'Active'){
            $status = 1;
        }

        $user = User::find($id);
        $user->role_id = $validateFields['role'];
        $user->status = $status;
        $user->save();

        if($user){
            return redirect(route('admin.users'))->withSuccess("User with id $id have been updated");
        }

        return redirect(route('admin.edit'))->withErrors([
            'formError' => 'An error occurred'
        ]);
    }
}
