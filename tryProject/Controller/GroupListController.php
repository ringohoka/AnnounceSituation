<?php

namespace App\Http\Controllers;

use App\Models\GroupList;
use App\Http\Requests\StoreGroupListRequest;
use App\Http\Requests\UpdateGroupListRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
class GroupListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $group_lists = GroupList::all();//


        return view('groupview',compact('group_lists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('grouplist');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGroupListRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGroupListRequest $request)
    {
        //
        $group_lists = new GroupList();
        $group_lists -> groupname = $request->input('name');

        DB::transaction(function () use ($group_lists){
            $group_lists -> save();
        });

        $request -> session() -> regenerateToken();
        return redirect('groupview');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GroupList  $groupList
     * @return \Illuminate\Http\Response
     */
    public function show(GroupList $groupList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GroupList  $groupList
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $group_lists= GroupList::find($id);

        return view('groupsetting',compact('group_lists'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGroupListRequest  $request
     * @param  \App\Models\GroupList  $groupList
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGroupListRequest $request,$id)
    {
        //
        $group_lists = GroupList::find($id);
        $group_lists -> groupname = $request ->input('name');
        DB::transaction(function() use ($group_lists){
            $group_lists->save();
        });
        $request->session()->regenerateToken();
        return redirect('groupview');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GroupList  $groupList
     * @return \Illuminate\Http\Response
     */
    public function destroy(GroupList $groupList)
    {
        //
    }
}
