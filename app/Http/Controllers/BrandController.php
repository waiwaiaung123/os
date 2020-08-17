<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $brands = Brand::all();
        return view('backend.brands.index',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.brands.create');
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
            'brand_name'=>'required',
            'brand_photo'=>'required'
        ]);

        // If include file, upload
        $imgName = time().'.'.$request->brand_photo->extension();

        $request->brand_photo->move(public_path('backend/brandimg/'),$imgName);

        $myfile = 'backend/brandimg/'.$imgName;

        // Data insert
        $brand = new Brand;
        $brand->name = $request->brand_name;
        $brand->photo = $myfile;

        $brand->save();

        // Redirect
        return redirect()->route('brands.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $brand = Brand::find($id);
        //dd($item);
        return view('backend.brands.show',compact('brand'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $brands = Brand::find($id);
         return view('backend.brands.edit',compact('brands'));
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
            'brand_name'=>'required',
            'brand_photo'=>'sometimes',
            'oldphoto' => 'required'
        ]);

        // if include file, upload
        if($request->hasFile('brand_photo')){
        $imgName = time().'.'.$request->brand_photo->extension();

        $request->brand_photo->move(public_path('backend/brandimg/'),$imgName);

        $myfile = 'backend/brandimg/'.$imgName;
        $a=$request->oldphoto;
         unlink($a);

        // delete old photo (unlink)
          }else{
            $myfile = $request->oldphoto;
          }

        // data update
        $brand = Brand::find($id);
        $brand->name = $request->brand_name;
        $brand->photo = $myfile;
        $brand->save();

        // Redirect
        return redirect()->route('brands.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $brand =Brand::find($id);
        $brand->delete();
         unlink($brand_photo->photo);
        // redirect
        return redirect()->route('brands.index');
    }
}
