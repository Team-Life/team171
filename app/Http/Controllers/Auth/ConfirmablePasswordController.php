<?php

namespace App\Http\Controllers\Auth;

use App\Models\Category;
use App\Models\Users;
use App\Models\Item;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class ConfirmablePasswordController extends Controller
{
    /**
     * Show the confirm password view.
     */
    public function show(): View
    {
        $choices = Category::all();
        $auth_users = Users::all();
        $items = Item::where('delete_flag', 0)->get();
        $login_user = Auth::user();//ログインユーザー情報を取得
        return view('auth.confirm-password',compact('auth_users','items','login_user','choices'));
    }

    /**
     * Confirm the user's password.
     */
    public function store(Request $request): RedirectResponse
    {
        if (! Auth::guard('web')->validate([
            'email' => $request->user()->email,
            'password' => $request->password,
        ])) {
            throw ValidationException::withMessages([
                'password' => __('auth.password'),
            ]);
        }

        $request->session()->put('auth.password_confirmed_at', time());

        return redirect()->intended(RouteServiceProvider::home);
    }
}
