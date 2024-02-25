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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            // 'pengalaman_id'=>['required'],
            // 'aktivitas_id'=>['required'],
            // 'keterampilan_id'=>['required'],
            // 'phone'=>['nullable','string','max:13'],
            // 'deskripsi'=>['nullable','string','min:3','max:6000'],
            // 'prodi'=> ['nullable','string','min:2','max:50'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            // 'pengalaman_id' => $request->pengalaman_id,
            // 'aktivitas_id' => $request->aktivitas_id,
            // 'keterampilan_id' => $request->keterampilan_id,
            // 'phone' => $request->phone,
            // 'deskripsi' => $request->deskripsi,
            // 'prodi' => $request->prodi,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
