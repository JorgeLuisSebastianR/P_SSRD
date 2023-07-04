<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = UserModel::select('*')->get();
        return view('users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    public function crearActualizar(Request $request, $user){
        $user->name=      $request->name;
        $user->email =    $request->email ;
        $user->password=  $request->password;
        $user->save();
        return $user;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new UserModel();
        $user =$this->crearActualizar($request, $user);
        return redirect()->route('users.index')->with('message','Se a agrado corectamente');
        //->whith('mesaje', 'nuevo');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $user = UserModel::where('id',$id)->firstOrFail();
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = UserModel::where('id',$id)->firstOrFail();
        $user =$this->crearActualizar($request, $user);
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = UserModel::where('id',$id)->firstOrFail();
        try{
            $user->delete();
            return redirect()->route('users.index')->with('message','registro eliminado'); 
        }catch(QueryException $e){
            return redirect()->route('users.index')->with('danger','registro no se puede eliminar porque esta hasiendo referenciado');
        }
    }
}
