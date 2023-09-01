<?php

namespace App\Http\Controllers;

use App\Models\CategoryLatihan;
use App\Http\Requests\StoreCategoryLatihanRequest;
use App\Http\Requests\UpdateCategoryLatihanRequest;
use Database\Seeders\CategoryLatihanSeeder;
use Illuminate\Http\Request;

class CategoryLatihanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.admin-create.category-latihan-create',[
            "title" => "Create Category Latihan"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoryLatihanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|unique:category_latihans'
        ]);

        CategoryLatihan::create($validatedData);

        return redirect('/admin')->with('succes', 'New Category Latihan Has Been Uplouded');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategoryLatihan  $categoryLatihan
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryLatihan $categoryLatihan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategoryLatihan  $categoryLatihan
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryLatihan $categorylatihan)
    {
        return view('dashboard.admin-create.category-edit',[
            "title" => "Edit Category Latihan",
            "categorylatihan" => $categorylatihan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryLatihanRequest  $request
     * @param  \App\Models\CategoryLatihan  $categoryLatihan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoryLatihan $categorylatihan)
    {   
        $rules = [
            'name' => 'required|max:255'
        ];


        if($request->slug != $categorylatihan->slug) {
            $rules['slug'] = 'required|unique:category_latihans';
        }

        $validatedData = $request->validate($rules);
        CategoryLatihan::where('id', $categorylatihan->id)
                        ->update($validatedData);

        return redirect('/admin')->with('succes', 'Category Latihan Has Been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoryLatihan  $categoryLatihan
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryLatihan $categorylatihan)
    {
        CategoryLatihan::destroy($categorylatihan->id);
        return redirect('/admin')->with('delete' , 'Category Latihan Has Been Deleted');
    }
}
