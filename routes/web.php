<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController as AuthAuthenticatedSessionController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\ErrorMessageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UsersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|

/**Controllerを使ったRoute設定は下記のように
 * Route::HTTPメソッド('php artisan serveをしたときにでてくるやつに付随させるURLの末尾（※自分で決め手よい）')
 * ,[～Controller::class,'～Controllerに記述した使いたいメソッド（関数名）']->name('左のRoute設定の名前（※自分で決め手よい）')
 *
 * なお、Httpメソッドのところのgetやpostは普通のphp のフォームタグのmethod=""の中身にかくものと同じようなもので
 * 次のいずれかが入る
 *
 * getは（見られても大丈夫なやつを）「表示」
 *postは（見られたらやばいやつを他から見えないようにしてサーバーサイドにデータを）「保存」
 *putかpatch（データの）「更新」
 *delete（データの）「削除」
 * **/

//会員ですらない人がホーム画面をとりあえず表示できるようにするためのルート設定
Route::get('/', [HomeController::class,'showHome'])->name('home');

//会員ですらない人もログイン画面を表示できるようにするためのルート設定
Route::get('/login/view',[AuthController::class,'showUserLoginPage'])->name('login_screen');

//会員ですらない人も会員登録画面を表示できるようにするためのルート設定
Route::get('/register/view',[AuthController::class,'showUserRegisterPage'])->name('register_screen');

//会員ですらない人が会員登録画面で一般会員「」登録をできるようにするルート（不具合がない場合、roleが0となるため）
Route::post('/registered_users/members', [UsersController::class, 'store'])->name('members');

//ログインしている状態に許されるルート設定ぽい
// Route::middleware('auth')->group(function () {

// });

//エラー画面を表示
// Route::get('/error/message',[ErrorMessageController::class,'render'])->name('custom_errors_message');


require __DIR__.'/auth.php';

//一般会員（会員登録をした（＝データベースにユーザーデータが登録されている）人）
Route::group(['middleware' => ['auth', 'can:user-higher']], function () {
    //ここにルート記述
    //会員ですらない人も一度ログアウトした一般会員もログインすれば再度ダッシュボード表示できるするルート設定（前者の人を考慮し、外に除外）
    Route::get('/dashboard', [HomeController::class,'showDashboard'])->middleware(['auth', 'verified'])->name('dashboard');

    //（一般）会員登録をした人が商品一覧画面を表示できるようにするためのルート設定
    Route::get('/index/view',[ItemsController::class,'index'])->name('index_items.view');

    //（一般）会員登録をした人が商品登録画面を表示できるようにするためのルート設定
    Route::get('/register/items/view',[ItemsController::class,'ShowItemsRegisterScreen'])->name('register_items.view');

    //一般会員登録がしてあったら、一般会員は情報を編集画面を表示・編集ができるようにするためのルート設定
    // メールアドレスはmigrationのunique()が効いて、他の人と同一の物にできない
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    //検索結果を表示
    Route::post('/search', [SearchController::class,'SearchAndIndex'])->name('searched.items.index');
    //itemごとに個別表示
    Route::get('items/show/{item}',[ItemsController::class,'ShowEachItem1'])->name('showeach.item.view');
    // Laravelではルート設定にパラメータ（数学と同じで媒介変数？、変わりうる値）を入れる場合、
    // パラメータ名を波括弧で囲むらしい
});

//管理者以上
Route::group(['middleware' => ['auth', 'can:admin-higher']], function() {
    //ここにルートを記述
    //管理者アカウントのみ一般会員を削除できるためのルート設定
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //管理者アカウントのみ商品を登録することができるためのルート設定
    Route::post('/register/items/post',[ItemsController::class,'store'])->name('register_items.post');

    Route::get('/items/editorview/{item}', [ItemsController::class, 'editorview'])->name('items.editor.view');

    Route::patch('/items/update/{item}', [ItemsController::class, 'update'])->name('items.info.update');
    //patchじゃなくてもputでもいいが、そのときはformの@method('patch')を@method('put')に統一

    // 商品一覧からの削除
    Route::delete('items/destroy/{id}', [App\Http\Controllers\ItemsController::class, 'itemdestroy'])->name('item.destroy');

});
// この管理者以上は、ProvidersのAuthServiceProvider.phpに書かれた条件式に従う

//管理者はどのように他の一般会員のアカウント情報を閲覧できるようにするのか？

// roleのカラムの値をもとに管理者以上と一般ユーザーを振り分けられるようにする。
// 具体的には管理者以上は商品登録をできるようにする。
