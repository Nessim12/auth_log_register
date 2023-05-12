<?php

namespace App\Http\Controllers;

use App\Models\master;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use SebastianBergmann\Complexity\Complexity;

class MasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    return view ('welcome');
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
        $request->validate([
            'nom' => ['required','unique:master'],
            'description' => 'required',
        ]);

        $MA = master::create([
            'nom' => $request->nom,
            'description' => $request->description,         
        ]);


        event(new Registered($MA));
        return redirect(RouteServiceProvider::ADMIN_HOME);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mas = master::find($id);
        // return redirect(RouteServiceProvider::ADMIN_HOME);
        return view('/admin/edit',compact('mas','id'));
        

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
        $request->validate([
            'nom' => 'required',
            'description' => 'required',
        ]);
        echo $request->input("description");

        $MA = master::find($id);
        $MA ->nom=$request->input('nom');
        $MA ->description=$request->input('description');
        $MA->save();
        return redirect('/admin/dashboard');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $MA= master::find($id);
        $MA->delete();
        return redirect(RouteServiceProvider::ADMIN_HOME);
    }
}
