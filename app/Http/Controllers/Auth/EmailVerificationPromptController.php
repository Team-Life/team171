<?php

namespace App\Http\Controllers\Auth;

use App\Models\Category;
use App\Models\Users;
use App\Models\Item;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;


class EmailVerificationPromptController extends Controller
{
    /**
     * Display the email verification prompt.
     */
    public function __invoke(Request $request): RedirectResponse|View
    {
        $choices = Category::all();
        $auth_users = Users::all();
        $items = Item::where('delete_flag', 0)->get();
        $login_user = Auth::user();//ログインユーザー情報を取得

        return $request->user()->hasVerifiedEmail()
                    ? redirect()->intended(RouteServiceProvider::home)
                    : view('auth.verify-email',compact('auth_users','items','login_user','choices'));
    }
}
