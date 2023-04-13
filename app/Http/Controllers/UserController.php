<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $users = User::paginate(5);
        return view('users', compact('users'));
    }
    public function create(Request $request)
    {
        $user = new User();
        $user->name = $request->nama;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->user_status = $request->user_status;
        $user->save();
        return redirect()->to('/pengguna');
    }
    public function show($id)
    {
        $user = User::find($id);
        return view('user_show', compact('user'));
    }
    public function edit($id)
    {
        $user = User::find($id);
        return view('user_edit', compact('user'));
    }
    public function update(Request $request,$id)
    {
        $user = User::find($id);
        $user->name = $request->nama;
        $user->email = $request->email;
        if($request->password != null){

            $user->password = $request->password;
        }
        $user->user_status = $request->user_status;
        $user->save();
        return redirect()->to('/pengguna');
    }
    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->to('/pengguna'); 
    }
}
