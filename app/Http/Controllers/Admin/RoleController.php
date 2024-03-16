<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\RoleSaveRequest;
use App\Models\Admin\Role;
use App\Models\Admin\RolePermission;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

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

    public function actions(Request $request)
    {
        if (is_numeric($request['role_id'])) {
            $role_id = (int)$request['role_id'];

//            $modules = Module::with(['permissions' => function ($query) {
//                $query->with(['role_permissions']);
//            }])->where('id', '<>', 1)->get();

            $modules = Module::with('permissions')->orderBy('id')->get();

//            dd($modules);
            return view('admin.roles.actions', [
                'modules' => $modules,
                'role' => Role::find($role_id)]);
        } else {
            abort(404);
        }
    }

    public function change(Request $request)
    {
        $this->validatorRole($request->all())->validate();

        RolePermission::updateOrCreate([
            'permission_id' => $request['action_id'],
            'role_id' => $request['role_id'],
        ], [
//            'value' => boolval($request['value']),
            'value' => DB::raw('CAST(' . $request['value'] . ' AS BOOLEAN)'),
        ]);
        return __('Разрешение изменено');
    }

    protected function validatorRole(array $data)
    {
        $validate = [
            'action_id' => 'required|exists:permission,id',
            'role_id' => 'required||exists:roles,id',
            '_token' => 'required',
            'value' => 'required',
        ];
        $validator = Validator::make($data, $validate);
        return $validator;
    }
}
