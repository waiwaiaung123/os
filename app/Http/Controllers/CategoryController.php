<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('backend.categories.index',compact('categories'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('backend.categories.create');
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
            'category_name'=>'required',
            'category_photo'=>'required'
        ]);

        // If include file, upload
        $imgName = time().'.'.$request->category_photo->extension();

        $request->category_photo->move(public_path('backend/categoryimg/'),$imgName);

        $myfile = 'backend/categoryimg/'.$imgName;

        // Data insert
        $category = new Category;
        $category->name = $request->category_name;
        $category->photo = $myfile;

        $category->save();

        // Redirect
        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $categories = Category::find($id);
        // dd($categories);
        return view('backend.categories.show',compact('categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::find($id);
         return view('backend.categories.edit',compact('categories'));
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
            'category_name'=>'required',
            'category_photo'=>'sometimes',
            'oldphoto' => 'required'
        ]);

        // if include file, upload
        if($request->hasFile('category_photo')){
        $imgName = time().'.'.$request->category_photo->extension();

        $request->category_photo->move(public_path('backend/categoryimg/'),$imgName);

        $myfile = 'backend/categoryimg/'.$imgName;
        unlink($request->oldphoto);

        // delete old photo (unlink)
          }else{
            $myfile = $request->oldphoto;
          }

        // data update
        $category = Category::find($id);
        $category->name = $request->category_name;
        $category->photo = $myfile;
        $category->save();

        // Redirect
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $category =Category::find($id);
        $category->delete();
        // redirect
        return redirect()->route('categories.index');
    }
}
