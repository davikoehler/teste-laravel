<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('pages.users.index', ['users' => User::paginate(10)]);
    }

    public function create()
    {
        return view('pages.users.create');
    }

    public function store(UserStoreRequest $request)
    {
        $userValidated = $request->validated();
        $user = User::create($userValidated);
        return response(['success' => true, 'message' => 'Usuário cadastrado com sucesso','user' => $user]);
    }

    public function edit(string $id)
    {
        $user = User::find($id);

        if (is_null($user)) {
            return redirect()->route('users.index');
        }
        return view('pages.users.update', ['user' => $user]);
    }

    public function update(UserUpdateRequest $request, User $user)
    {
        $userValidated = $request->validated();
        if (is_null($userValidated['password'])) {
            unset($userValidated['password']);
        }

        $user->update($userValidated);
        return redirect()->route('users.index')->with('message', 'Usuário atualizado com sucesso!');
    }

    public function destroy(User $user)
    {
        $id = $user->id;
        $user->delete();

        if ($id == auth()->user()->id) {
            Auth::logout();
            return redirect('/');
        }

        return redirect()->route('users.index')->with('message', 'Usuário excluído com sucesso!');
    }
}
