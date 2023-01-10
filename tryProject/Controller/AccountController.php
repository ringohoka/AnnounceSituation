<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Http\Requests\StoreAccountRequest;
use App\Http\Requests\UpdateAccountRequest;
// use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $result=$request -> input('s');
        // $request -> session() -> regenerateToken();

        $accounts = Account::all();//


        return view('user_userlist',compact('accounts'));



    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('newid');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAccountRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAccountRequest $request)
    {
        //
        $accounts = new Account();
        $accounts -> name = $request->input('name');
        $accounts -> mail = $request->input('mail');
        $accounts -> pass = \Hash::make($request->input('pass'));
            DB::transaction(function () use ($accounts){
                $accounts -> save();
            });

        $request -> session() -> regenerateToken();
        return redirect('user_userlist');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function show(Account $account)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $account= Account::find($id);

        return view('usersetting',compact('account'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAccountRequest  $request
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAccountRequest $request,$id)
    {

        $account = Account::find($id);
        $account -> name = $request ->input('name');
        $account -> mail = $request -> input ('mail');
        $account -> pass = \Hash::make($request ->input('pass'));
        DB::transaction(function() use ($account){
            $account->save();
        });
        $request->session()->regenerateToken();
        return redirect('user_userlist');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        DB::transaction(function() use($id){
            Account::destroy($id);
        });
        return redirect('user_userlist');

    }
}
