<?php

namespace App\Http\Controllers\admin;

use App\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function index() {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function new() {
        return view('admin.users.store');
    }

    public function store(UserRequest $request) {
        $userData = $request->all();

        $request->validated();
        $userData['password'] = bcrypt($userData['password']);
        $user = new User();
        $user->create($userData);

        flash('Usuário criado com sucesso!')->success();
        return redirect()->route('user.index');
    }

    public function edit(User $user) {
        return view('admin.users.edit', compact('user'));
    }

    public function update(UserRequest $request, $id) {
        $userData = $request->all();

        $request->validated();

        if($userData['password']) {
            $userData['password'] = bcrypt($userData['password']);
        }

        $user = User::findOrFail($id);
        $user->update($userData);

        flash('Usuário atualizado com sucesso!')->success();
        return redirect()->route('user.index');
    }

    public function delete($id) {
        $user = User::findOrFail($id);
        $user->delete();

        flash('Usuário removido com sucesso!')->warning();
        return redirect()->route('user.index');
    }
}
