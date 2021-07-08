<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('user.index', ['users' => $users]);
    }

    public function show($id)
    {
        $user = User::findorFail($id);
        return view('user.show', ['user'=>$user]);
    }

    public function create()
    {
        return view('user.form');
    }

    public function edit($id)
    {
        $user = User::findorFail($id);

        return view('user.form', ['user'=>$user]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255|email|unique:users,email,' . $request->get('id'),
            'password' => !$request->get('id') ? [
                'required', 'min:6'
            ] : [],
        ]);

        User::updateOrCreate([
            'id' => $request->get('id')

        ], [
            'name' => $request->get('name'),
            'last_name' => $request->get('last_name'),
            'patronymic' => $request->get('patronymic'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'password' => Hash::make($request->get('password'))
        ]);

        return redirect()->route('user');
    }

    public function delete($id)
    {
        $user = User::findorFail($id);
        $user->delete();

        return redirect()->route('user');
    }
}
