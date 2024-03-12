<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\Admin\Role;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
//    public function __construct()
//    {
//        $this->authorizeResource(User::class, 'admin');
//    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        if ($user && $user->hasRole('admin'))
        {
            $users = User::sortable()
                ->orderBy('created_at', 'DESC')
                ->paginate(5);
            $roles = Role::get();

            return view('admin.users.index', compact('users', 'roles'));
        }
        else
        {
            return view('welcome');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserStoreRequest $request)
    {
        $user = Auth::user();

        if ($user && $user->hasRole('admin'))
        {
            $user = User::create($request->except('image'));
            if($request->has('image')){
                $user->image = $user->uploadImage($request, 'image', 'users');
            }
            return response()->json([
                'status' => 200
            ]);
        }
        else
        {
            return view('welcome');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $user = Auth::user();

        if ($user && $user->hasRole('admin'))
        {
            return view('admin.users.show', compact('user'));
        }
        else
        {
            return view('welcome');
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $user = Auth::user();

        if ($user && $user->hasRole('admin'))
        {
            $image = asset($user->image);

            return response()->json([
                'status' => 200,
                'user' => $user,
                'image' => $image
            ]);
        }
        else
        {
            return view('welcome');
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, User $user)
    {
        $user = Auth::user();

        if ($user && $user->hasRole('admin'))
        {
            if($request->has('image')){
                $user->image = $user->uploadImage($request->image, 'image', 'users', $user->image);
            }
            if($request->password && $request->password == $request->password_confirm){
                $user->password = Hash::make($request->password);
            }
            $user->update($request->except(['image', 'password', 'password_confirm', 'user_id']));
            return response()->json([
                'status' => 200
            ]);
        }
        else
        {
            return view('welcome');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user = Auth::user();

        if ($user && $user->hasRole('admin'))
        {
            if(file_exists($user->image)){
                unlink($user->image);
            }
            $user->delete();
            return redirect()->route('admin.users.index');
        }
        else
        {
            return view('welcome');
        }

    }
}
