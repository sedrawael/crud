<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $cruds = Crud :: all();
      return view("crud.index", compact('cruds'));
    }






    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
     

         return view("crud.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //      هون بنحط اسم صفحه MODELS
      $crud = new Crud();
      $crud->name = $request->name;
      $crud->email = $request->email;
      $crud->number = $request->number;
      $crud->location = $request->location;
      $crud->save();
      return redirect('cruds');
    }









    /**
     * Display the specified resource.
     */
    public function show(Crud $crud)
    {
        //
    }









    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
       $crud  = Crud :: findOrFail ($id);
       return view('crud.edit', compact('crud'));
    }





    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {


        $crud = Crud :: findOrFail ($id);
        $crud->name = $request->name;
        $crud->email = $request->email;
        $crud->number = $request->number;
        $crud->location = $request->location;
        $crud->save();
        return redirect('cruds');
  
        
    }











    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
     
        Crud::findOrFail($id)->delete();
    
       
         return redirect()->route('crud.index');
    }
}