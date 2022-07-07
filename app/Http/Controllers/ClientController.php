<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Invoice;
use App\Models\Membership;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Symfony\Component\HttpFoundation\Response;

class ClientController extends Controller
{

    // public function __construct()
    // {
    //     $this->authorizeResource(Client::class,'client');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $Memberships = Membership::get();
        // $invoice = Invoice::get();
        $data = Client::all();
        return response()->view('cms.clients.index',['clients'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Role $role)
    {
        //
        $memberships = Membership::get();
        $roles = Role::where('guard_name','=','client')->get();
        return response()->view('cms.clients.create',['roles' => $roles,'memberships'=>$memberships]);
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
        $validator = Validator($request->all(), [
            'role_id' => 'required|integer|exists:roles,id',
            'name' => 'required|string|min:3|max:45',
            'phone_num' => 'required|string|min:3|max:100|unique:clients,phone_num',
            'email' => 'required|string|unique:clients,email',
            'address' => 'required|string|min:3|max:100',
            'identification_num' => 'required|string|min:1|unique:clients,identification_num',
            'client_status' => 'required|boolean',
        ]);
        if (!$validator->fails()) {
            $role= Role::findById($request->input('role_id'),'client');
            $client = new Client();
            $client->name = $request->input('name');
            $client->phone_num = $request->input('phone_num');
            $client->email = $request->input('email');
            $client->address = $request->input('address');
            $client->identification_num = $request->input('identification_num');
            $client->status = $request->input('client_status');
            $client->password = Hash::make(12345);
            $isCreated = $client->save();
            if($isCreated) $client->assignRole($role);
            return response()->json([
                'message' => $isCreated ? 'Created Successfully' : 'Create failed'
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
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
        $roles = Role::where('guard_name','=','client')->get();
        // $adminRole = $admin->roles()->first();
        $clientRole = $client->roles()->first();
        return response()->view('cms.clients.edit',['client'=>$client, 'roles'=>$roles, 'clientRole'=>$clientRole]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        //
        $validator = Validator($request->all(), [
            'role_id' => 'required|integer|exists:roles,id',
            'name'=>'required|string|min:3|max:100',
            'phone_num'=>'required|string|min:3|max:45',
            'email'=>'required|string|email|unique:clients,email, '. $client->id,
            'address'=>'required|string|min:3|max:100',
            'identification_num'=>'required|string|min:3|max:45',
            'client_status' => 'required|boolean',
        ]);
        if (!$validator->fails()) {
            $role= Role::findById($request->input('role_id'),'client');
            $client->name = $request->input('name');
            $client->phone_num = $request->input('phone_num');
            $client->email = $request->input('email');
            $client->address = $request->input('address');
            $client->identification_num = $request->input('identification_num');
            $client->status = $request->input('client_status');
            $client->password = Hash::make(12345);
            $Updated = $client->save();
            if($Updated) $client->syncRoles($role);
            return response()->json([
                'message' => $Updated ? 'Created Successfully' : 'Create failed'
            ], $Updated ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
        } else {
            return response()->json([
                'message' => $validator->getMessageBag()->first()
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
        $deleted = $client->delete();
        return response()->json([
            // 'message' => $deleted ? 'Deleted successfully' : 'Deleted failed'
            'title' => $deleted ? 'Deleted successfully' : "Delete failed",
            'icon' => $deleted ? 'success' : "error",
        ], $deleted ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);
    }

}
