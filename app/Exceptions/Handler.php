<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Illuminate\Auth\Access\AuthorizationException;


class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });


    }

    //カスタムエラーメッセージを設定しているfunction、下のauthはLangフォルダのjaフォルダのauthです
    public function render($request, Throwable $exception)
    {
        if ($exception instanceof AuthorizationException) {
            // カスタムエラーメッセージを取得
            $message = __('auth.403');

            // カスタムエラーメッセージをビューに渡して表示
            return response(view('custom_errors_message', ['message' => $message]));
        }

        return parent::render($request, $exception);
    }
}
