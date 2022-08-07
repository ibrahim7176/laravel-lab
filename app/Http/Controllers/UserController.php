<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = json_decode(\Illuminate\Support\Facades\File::get(storage_path('users.json')),
        true);
        return view('users.index')->with(['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create') ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $users = json_decode(\Illuminate\Support\Facades\File::get(storage_path('users.json')),
        true);
        $user = (object)  ['name' => $request->input('name') , 'email' =>$request->input('email')];
        array_push($users,$user);
        $users =json_encode(\Illuminate\Support\Facades\File::get(storage_path('users.json')),
        true);
        return print_r($users);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = json_decode(\Illuminate\Support\Facades\File::get(storage_path('users.json')),
        true);
        return view('users.show')->with(['users'=>$users]);;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $users = json_decode(\Illuminate\Support\Facades\File::get(storage_path('users.json')),
        true);
        $user = $users[$id-1];
        return view('users.edite')->with(['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return "usre update" ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = json_decode(\Illuminate\Support\Facades\File::get(storage_path('users.json')),
        true);
        $user = $users['name'];
        return "user $user deleted" ;
    }


}
