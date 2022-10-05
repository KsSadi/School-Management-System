<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    public $admin;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->admin = Auth::guard('admin')->user();
            return $next($request);
        });
    }
    public function dashboard()
    {
        return view('backend.pages.dashboard.index');
    }


    public function index()
    {
        /* if($this->admin->can('admin.dashboard')){*/
        $admins = Admin::all();
        $compact = compact('admins');
        return view('backend.pages.admin.index', $compact);
        /* }*/
    }


    public function create()
    {
        if (is_null($this->admin) || !$this->admin->can('admin.create')) abort(403, 'Unauthorized Access!');
        $roles = Role::where('guard_name', 'admin')->get();
        $compact = compact('roles');
        $view = view('backend.pages.admin.create', $compact);
        return ['data' => $view->render(), 'status' => 'success'];
    }

    public function store(Request $request)
    {
        if (is_null($this->admin) || !$this->admin->can('admin.create')) abort(403, 'Unauthorized Access!');
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:admins',
            'username' => 'required|unique:admins',
            'password' => 'required|min:6',
            'role' => 'required',
        ]);
        $admin = new Admin();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->username = $request->username;
        $admin->password = bcrypt($request->password);
        $admin->save();
        $admin->assignRole($request->role);
        return ['status' => 'success', 'message' => 'Admin Created Successfully'];
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        if (is_null($this->admin) || !$this->admin->can('admin.edit')) abort(403, 'Unauthorized Access!');
        $admin = Admin::find($id);
        if (!$admin) return ['status' => 'error', 'message' => 'Admin Not Found'];
        $roles = Role::where('guard_name', 'admin')->get();
        $compact = compact('admin', 'roles');
        $view = view('backend.pages.admin.create', $compact);
        return ['data' => $view->render(), 'status' => 'success'];
    }

    public function update(Request $request, $id)
    {
        if (is_null($this->admin) || !$this->admin->can('admin.edit')) abort(403, 'Unauthorized Access!');
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:admins,email,' . $id,
            'username' => 'required|unique:admins,username,' . $id,
            'role' => 'required',
        ]);
        $admin = Admin::find($id);
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->username = $request->username;
        $admin->save();
        $admin->syncRoles($request->role);
        return ['status' => 'success', 'message' => 'Admin Updated Successfully'];
    }

    public function destroy($id)
    {
        if (is_null($this->admin) || !$this->admin->can('admin.delete')) abort(403, 'Unauthorized Access!');
        $admin = Admin::find($id);
        if ($this->admin->id == $admin->id) return ['status' => 'error', 'message' => 'You Can Not Delete Your Own Account'];
        if (!$admin) return ['status' => 'error', 'message' => 'Admin Not Found'];
        $admin->delete();
        return ['status' => 'success', 'message' => 'Admin Deleted Successfully'];
    }

    public function list(): array
    {
        if (is_null($this->admin) || !$this->admin->can('admin.view')) abort(403, 'Unauthorized Access!');
        $admins = Admin::all();
        $compact = compact('admins');
        $view = view('backend.pages.admin.list', $compact);
        return ['html' => $view->render(), 'status' => 'success'];
    }


    public function showLoginForm()
    {
        return view('backend.pages.admin.login');
    }

    public function login(Request $request): array
    {

        /* $request->validate([
             'email' => 'required|email',
             'password' => 'required',
         ]);*/
        $credentials = $request->only('email', 'password');
        if (Auth::guard('admin')->attempt($credentials)) {
            return ['status' => 'success', 'message' => 'Login Success'];
        }
        return ['status' => 'error', 'errors' => ['password' => ['These credentials do not match our records.']]];
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('dashboard.login');
    }


}
