<?php

namespace App\Http\Controllers;

use App\Mail\AdminWelcomEmail;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Spatie\Permission\Models\Role;
use Symfony\Component\HttpFoundation\Response;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Admin::all();
        return response()->view('cms.admins.index',['admins'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $roles = Role::where('guard_name','=','admin')->get();
        return response()->view('cms.admins.create', ['roles'=>$roles]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator = validator($request->all(),[
            'role_id' => 'required|integer|exists:roles,id',
            'name'=>'required|string|min:3|max:45',
            'phone_num'=>'required|string|min:3|max:45',
            'email'=>'required|string|email|unique:admins,email',
            'address'=>'required|string|min:3|max:100',
            'identification_num'=>'required|string|min:3|max:45',
        ]);

        if(!$validator->fails()){
            $role= Role::findById($request->input('role_id'),'admin');
            $admin = new Admin();
            $admin->name = $request->input('name');
            $admin->phone_num = $request->input('phone_num');
            $admin->email = $request->input('email');
            $admin->address = $request->input('address');
            $admin->identification_num = $request->input('identification_num');
            $admin->password = Hash::make(12345);

            $isCreated = $admin->save();
            if($isCreated) {
                $admin->assignRole($role);
                event(new Registered($admin));
                // Mail::to($admin->email)->send(new AdminWelcomEmail($admin->name));
            }
            return response()->json([
                'message' => $isCreated ? 'Created successfully' : 'Create failed'
            ], $isCreated ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);
        } else {
            return response()->json([
                'message' => $validator->getMessageBag()->first()
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
        $roles = Role::where('guard_name','=','admin')->get();
        // $adminRole = $admin->roles()->first();
        $adminRole = $admin->roles()->first();
        return response()->view('cms.admins.update',['admin'=>$admin, 'roles'=>$roles, 'adminRole'=>$adminRole]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
        $validator = validator($request->all(),[
            'role_id' => 'required|integer|exists:roles,id',
            'name'=>'required|string|min:3|max:100',
            'phone_num'=>'required|string|min:3|max:45|unique:admins,phone_num',
            'email'=>'required|string|email|unique:admins,email, '. $admin->id,
            'address'=>'required|string|min:3|max:100',
            'identification_num'=>'required|string|min:3|max:45|unique:admins,identification_num',
        ]);

        if(!$validator->fails()){
            $role= Role::findById($request->input('role_id'),'admin');
            $admin->name = $request->input('name');
            $admin->phone_num = $request->input('phone_num');
            $admin->email = $request->input('email');
            $admin->address = $request->input('address');
            $admin->identification_num = $request->input('identification_num');

            $isUpdated = $admin->save();
            if($isUpdated) $admin->syncRoles($role);
            return response()->json([
                'message' => $isUpdated ? 'Updated successfully' : 'Updated failed'
            ], $isUpdated ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
        } else {
            return response()->json([
                'message' => $validator->getMessageBag()->first()
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
        $deleted = $admin->delete();
        return response()->json([
            // 'message' => $deleted ? 'Deleted successfully' : 'Deleted failed'
            'title' => $deleted ? 'Deleted successfully' : "Delete failed",
            'icon' => $deleted ? 'success' : "error",
        ], $deleted ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);
    }

}
