<?php

namespace App\Http\Controllers;
use App\Permission;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\UserPermission;
class CreateUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $a = User::all();
        $p = Permission::all();
        return view('createuser',['users'=>$a,'permissions'=>$p]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request);

        $u = new User;
        $u->name  = $request->fname.' '.$request->lname;
        $u->email = $request->email;
        $u->password = Hash::make($request->password);
        $u->mobile = $request->mobile;


        $u->designation = $request->designation;
        $u->save();
        $per = Permission::all();
        foreach ($per as $e) {
            $rname = "R".$e->id; 
            $wname = "W".$e->id;
            $up = new UserPermission;
            $up->user_id = $u->id;
            $up->permission_id = $e->id;
            $up->read  = $request->$rname;
            $up->write = $request->$wname;
            echo "$e->name >> ". $request->$rname.'  '.$request->$wname;
            $up->save();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CreateUser  $createUser
     * @return \Illuminate\Http\Response
     */
    public function show(CreateUser $createUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CreateUser  $createUser
     * @return \Illuminate\Http\Response
     */
    public function edit(CreateUser $createUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CreateUser  $createUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CreateUser $createUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CreateUser  $createUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(CreateUser $createUser)
    {
        //
    }
}
