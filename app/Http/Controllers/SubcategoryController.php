<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Subcategory;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategories = Subcategory::all();
        // dd($subcategories);

        return view('backend.subcategories.index',compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $subcategories = Subcategory::all();
         return view('backend.subcategories.create',compact('subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'subcategory_name'=>'required',
            'category'=>'required'
        ]);

        // Data insert
        $subcategory = new Subcategory;
        $subcategory->name = $request->subcategory_name;
        $subcategory->category_id = $request->category;

        $subcategory->save();

        // Redirect
        return redirect()->route('subcategories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subcategories = Subcategory::find($id);
        //dd($item);
         return view('backend.subcategories.show',compact('subcategory'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $subcategories =Subcategory::find($id);
         return view('backend.subcategories.edit',compact('categories','subcategories'));

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
          //validation
          $request->validate([
            'subcategory_name'=>'required',
            'category'=>'required'
        ]);

       
        // data update
        $subcategory = Subcategory::find($id);
        $subcategory->name = $request->subcategory_name;
        $subcategory->category_id = $request->category;

        $subcategory->save();

        // Redirect
        return redirect()->route('subcategories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subcategory =Subcategory::find($id);
        $subcategory->delete();
        // redirect
        return redirect()->route('subcategories.index');
    }
}
