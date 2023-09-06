<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController as AuthAuthenticatedSessionController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\HomeController;
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
*/

Route::get('/', [HomeController::class,'showHome'])->name('home');

Route::get('/dashboard', [HomeController::class,'showDashboard'])->middleware(['auth', 'verified'])->name('dashboard');

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
Route::get('/index/view',[ItemsController::class,'index'])->name('index_items.view');

Route::get('/register/items/view',[ItemsController::class,'ShowItemsRegisterScreen'])->name('register_items.view');

Route::post('/register/items/post',[ItemsController::class,'store'])->name('register_items.post');

Route::get('/login/view',[AuthController::class,'showUserLoginPage'])->name('login_screen');

Route::get('/register/view',[AuthController::class,'showUserRegisterPage'])->name('register_screen');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';

//一般ユーザー
Route::group(['middleware' => ['auth', 'can:user-higher']], function () {
    //ここにルート記述
});


//管理者以上
Route::group(['middleware' => ['auth', 'can:admin-higher']], function() {
    //ここにルートを記述
    // 他のルート定義 は一旦取り除く
    Route::post('/registered_users/members', [UsersController::class, 'store'])->name('members');
});
// この管理者以上とは何か？

// roleのカラムの値をもとに管理者以上と一般ユーザーを振り分けられるようにする。
// 具体的には管理者以上は商品登録をできるようにする。
