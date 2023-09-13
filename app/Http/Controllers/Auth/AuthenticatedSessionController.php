<?php

namespace App\Http\Controllers\Auth;

use App\Models\Category;
use App\Models\Users;
use App\Models\Item;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ProvidersRouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        $choices = Category::all();
        $auth_users = Users::all();
        $items = Item::where('delete_flag', 0)->get();
        $login_user = Auth::user();//ログインユーザー情報を取得
        return view('auth.login',compact('choices','auth_users','items'));
    }

    public function logout(Request $request)
    {
        Auth::logout(); // ログアウト処理

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect(ProvidersRouteServiceProvider::class,'');// ログアウト後のリダイレクト（ホーム画面に戻る）
    }
        // なんか↑のメソッドはだめでした。
        // ４０３THIS ACTION IS UNAUTHORIZED.とかいうのに現状だとなる



    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::home);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
