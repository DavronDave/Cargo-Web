<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\RoleSaveRequest;
use App\Models\Admin\Role;
use Illuminate\Routing\Controller;

class RoleController extends Controller
{
    public function index()
    {
        $name = request('name');
        $lang = getDefaultLanguage();

        $roles = Role::sortable()
        ->with('translates')
            ->key(request()->query('key'))
            // ->withWhereHas(
            // 'translates',function ($query) use ($lang, $name) {
            //     $query->where('url', $lang)
            //     ->when(request('name'), function ($query) use ($name){
            //             $query->where('value', 'like', '%' . $name . '%');
            //         }
            //         );
            // })
            ->latest()->paginate(10);

        return view('admin.roles.index', [
            'roles' => $roles,
            'languages' => getAllLanguage(),
            'lang' => $lang
            ]);
    }

    public function create()
    {
        $role = new Role;
        return view('settings.create', compact('role'));
    }

    public function store(RoleSaveRequest $request)
    {
        $role = new Role;
        $role->key = $request->key;

        $default_value = $request->name[getDefaultLanguage()];

        if($role->save()){
            foreach ($request->name as $key => $value) {
                $role->saveTranslation($value, 'name', $key, $default_value);
            }
        }

        return response()->json([
            'status' => 200
        ]);
    }

    public function show(Role $role)
    {
        return view('admin.roles.show', [
            'role' => $role
        ]);
    }

    public function edit(Role $role)
    {
        $role->load('translates');

        return response()->json([
            'status' => 200,
            'role' => $role,
            'languages' => getAllLanguage()
        ]);
    }


    public function update(RoleSaveRequest $request, Role $role)
    {
        $role->key = $request->key;
        $role->permissions = $request->permissions;

        $default_value = $request->name[getDefaultLanguage()];

        if($role->save()){
            $role->updateTranslation($request->name, 'name', $default_value);
        }

        return response()->json([
            'status' => 200,
            'role' => $role
        ]);
    }


    public function destroy(Role $role)
    {
        $role->translates()->delete();
        $role->delete();
        return redirect()->route('admin.roles.index');
    }
}
