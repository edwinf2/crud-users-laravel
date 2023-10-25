<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = User::all();
        return view('usuario.index', compact('usuarios'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $usuarios = new User;
        $usuarios->name = $request-> input('name');
        $usuarios->email = $request-> input('email');
        $usuarios->password = $request-> input('password');
        $usuarios->save();
        return redirect()-> back();

        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // $usuarios = new User;
        $usuarios = User::find($id);
        $usuarios->name = $request-> input('name');
        $usuarios->email = $request-> input('email');
        $usuarios->password = $request-> input('password');
        $usuarios->update();
        return redirect()-> back();
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $usuarios = User::find($id);
        $usuarios->delete();
        return redirect()->back();
        //
    }
}
