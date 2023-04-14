<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Intervention\Image\Facades\Image;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:' . User::class],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = new User;
        $password = bcrypt($request->password);

        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            $file = $request->image;
            $imagem = Image::make($file);
            $extensao = $file->extension();
            $path = public_path('img/perfil');
            $nome_imagem = md5($file->getClientOriginalName()) . strtotime("now") . "." . $extensao;
            $imagem->resize(170, 170);
            $imagem->save($path . '/' . $nome_imagem, 30, 'jpg');
            $user->imagem = $nome_imagem;
        } else {
            $user->imagem = 'default-profile.png';
        }

        $user->name = ucwords(mb_strtolower($request->name));
        $user->email = $request->email;
        $user->password = $password;

        $user->save();

        Auth::login($user);
        return redirect('/');
    }
}
