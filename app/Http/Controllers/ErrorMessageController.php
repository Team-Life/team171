<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use App\Models\Users;//<--User情報をデータベースのusersテーブルから持ってくるために書く宣言
use Illuminate\Support\Facades\Auth;//<--Auth::user()とか使うときに書く宣言
use Illuminate\Http\Request;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Illuminate\Auth\Access\AuthorizationException;

class ErrorMessageController extends Controller
{
    public function render($request, Throwable $exception)
    {
        if ($exception instanceof AuthorizationException) {
            // カスタムエラーメッセージを取得
            $message = __('auth.403');

            $choices = Category::all();
            $items = Item::where('delete_flag', 0)->get();
            $auth_users = Users::all();//Usersテーブルの情報をデータベースのusersテーブルから全て取得
            $login_user = Auth::user();//ログインユーザー情報を取得
            // カスタムエラーメッセージをビューに渡して表示
            return response()->view('errors.custom', ['message' => $message], 403,compact('auth_users','items','login_user','choices'));
        }

        return parent::render($request, $exception);
    }
}
