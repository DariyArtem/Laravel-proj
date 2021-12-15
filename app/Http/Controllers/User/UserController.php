<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index()
    {

        return view('Admin.profileSettings', ['result'=> User::where('id', Auth::id())->get()]);
    }

    public function update(Request $request){

        $validateFields = $request->validate([
            'name' => 'required|string|max:50|min:3',
            'phone' => 'required|string|max:12|min:9',
            'surname' => 'required|string|max:50|min:3',
            'country' => 'required|string|max:50|min:3',
            'region' => 'required|string|max:50|min:3',
            'city' => 'required|string|max:50|min:3',
        ]);

        $user = User::find(Auth::id());

        if ($request->picture !== null) {

            $validateImage = $request->validate([
                'picture' => 'image|mimes:jpeg,png,jpg,gif,svg',
            ]);

            Storage::delete($user->picture);
            $path = Storage::put('img/avatars', $validateImage['picture']);
            $user->picture = $path;


        }
            $user->name = $validateFields['name'];
            $user->surname = $validateFields['surname'];
            $user->phone = $validateFields['phone'];
            $user->country = $validateFields['country'];
            $user->region = $validateFields['region'];
            $user->city = $validateFields['city'];



        $user->save();

        if($user){
            return redirect(route('settings'))->withSuccess("Profile have been updated");
        }

        return redirect(route('admin.edit'))->withErrors([
            'formError' => 'An error occurred'
        ]);
    }

}
