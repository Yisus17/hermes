<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    private $USER_TYPE_ADMIN = "1";
    private $USER_TYPE_MODERATOR = "2";
    private $USER_TYPE_SIMPLE_USER = "3";

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = null;
        switch (auth::user()->role_id) {
            case ($this->USER_TYPE_ADMIN):
                $users = User::all();
                return view('users.list', compact('users'));

            case ($this->USER_TYPE_MODERATOR):
                $users = User::where('type', $this->USER_TYPE_MODERATOR)->get();
                return view('users.list', compact('users'));

            case ($this->USER_TYPE_SIMPLE_USER):
                return redirect('home-simple-user');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $companies = Company::all();
        $roles = Role::all();

        return view('users.edit', compact('user', 'companies', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

       
    
        $user->update($request->all());
        $user->company_id = $request->company_id;
        $user->role_id = $request->role_id;

        $user->save();
        $message = $id == null ? 'CREATED' : 'UPDATED';

        return redirect('users')->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $userToDelete = User::findOrFail($id);
        $userToDelete->delete();
        return redirect('users')->with('message', 'User successfully deleted');
    }
}
