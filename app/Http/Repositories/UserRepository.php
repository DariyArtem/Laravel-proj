<?php


namespace App\Http\Repositories;


use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserRepository
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function save($validated){

        $user = new $this->user;

        $user = User::create($validated + ["role_id" => 1]);

        Auth::loginUsingId($user->id);
        return $user;
    }

}
