<?php

namespace App\Http\Controllers;

use App\Http\Services\AdminService;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    protected $adminService;


    public function __construct(AdminService $adminService)
    {
        $this->adminService = $adminService;
    }

    public function index()
    {
        return view("Admin.pages.users.index", ["result" => User::all()]);
    }

    public function edit($id)
    {
        return view("Admin.pages.users.edit", ["result" => User::where("id", $id)->get(), "roles" => Role::all()]);
    }

    public function update(Request $request, $id)
    {

        $data = $request->only([
            "status",
            "role",
        ]);

        try {
            $this->adminService->updateUser($data, $id);
        } catch (\Exception $e) {
            return redirect(route("auth.admin.edit"))->withErrors([
                "formError" => "An error occurred"
            ]);
        }

        return redirect(route("auth.admin.users"))->withSuccess("User with id $id have been updated");
    }
}
