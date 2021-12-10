<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('Admin.users', ['result'=> User::all()]);
    }
    public function edit($id)
    {

        return view('Admin.edit', ['result' => User::where('id', $id)->get()]);
    }

    public function update(Request  $request, $id)
    {

        $validateFields = $request->validate([
            'status' => 'required',
            'role' => 'required',

        ]);

        $user = User::find($id);


        $user->active = $validateFields['status'];

        $user->save();



        if($user){
            return redirect(route('posts'))->withSuccess("User with id $id have been updated");
        }

        return redirect(route('admin.edit'))->withErrors([
            'formError' => 'An error occurred'
        ]);
    }
}
