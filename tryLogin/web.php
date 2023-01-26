<?php
use App\Http\Controllers\AccountController;
use App\Http\Controllers\GroupListController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Account;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});
Route::get('login',function(Request $request)
{
    session()->forget('name');
    session()->forget('mail');
    $request -> session() -> regenerateToken();
    return redirect(url('/'));
})->middleware("login");
Route::post('login',function(Request $request){
    $account = Account::where('mail', $request->mail)->get();
        if(asset($account)){
            if (count($account) === 0){
                $request -> session() -> regenerateToken();
                return view('login', ['login_error' => '1']);
            }

            // 一致
            if (Hash::check($request->password, $account[0]->password)) {

                // セッション
                session(['name'  => $account[0]->name]);
                session(['email' => $account[0]->mail]);
                session(['situation' => $account[0]->situation]);
                // フラッシュ
                session()->flash('flash_flg', 1);
                session()->flash('flash_msg', 'ログインしました。');
                $request -> session() -> regenerateToken();
                // return redirect(url('/user_userlist'));
            // 不一致
            }else{
                $request -> session() -> regenerateToken();
                return view('login', ['login_error' => '1']);
            }
        }else{
            $request -> session() -> regenerateToken();
            return view('login', ['login_error' => '1']);
        }
});

Route::resource('user_userlist', App\Http\Controllers\AccountController::class);

Route::resource('groupviews', GroupListController::class);
