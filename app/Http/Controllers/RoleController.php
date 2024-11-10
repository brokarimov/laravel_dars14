<?php

namespace App\Http\Controllers;

use App\Models\PermissionGroup;
use App\Models\Permissions;
use App\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::orderBy('id', 'asc')->paginate(5);
        return view('pages.role', ['models' => $roles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.create.role-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'role' => 'required|max:255'
        ]);
        $data = $request->all();
        Role::create($data);
        return redirect('/roles')->with('success', 'Ma\'lumot qo\'shildi!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        $permissions = Permissions::all();
        $permissionsGroup = PermissionGroup::all();
        return view('pages.update.role-update', ['role' => $role, 'permissions' => $permissions, 'permissionsGroups' => $permissionsGroup]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        $request->validate([
            'permission_id' => 'required|array',
        ]);

        $role->permissions()->sync($request->permission_id);

        return redirect('/roles')->with('warning', 'Ma\'lumot yangilandi!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        //
    }

    public function active(Request $request, Role $role)
    {

        $data = $request->all();
        $role->update($data);

        return redirect('/roles')->with('warning', 'Ma\'lumot yangilandi!');
    }
}
