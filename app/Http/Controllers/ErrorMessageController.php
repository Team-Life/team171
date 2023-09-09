<?php

namespace App\Http\Controllers;

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

            // カスタムエラーメッセージをビューに渡して表示
            return response()->view('errors.custom', ['message' => $message], 403);
        }

        return parent::render($request, $exception);
    }
}
