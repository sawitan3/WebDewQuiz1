<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Category::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        /*$newCategory = ["name" => $request->name];
        $newCategory = Category::create($newCategory);*/
        //echo $request->name;
        DB::table('categories')->insert(['name' => $request->name]);
        //var_dump($request);
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
        /*$selectedCategory = Category::find($id);
        return $selectedCategory;*/
        return DB::table('categories')->select()->where('id', $id)->get();

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
        //
        /*$selectedCategory = Category::where($id);
        $selectedCategory = Category::update(["name" => $request->name]);*/
        DB::table('categories')->where('id', $id)->update(['name' => $request->name]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        //$selectedCategory = Category::where('id',$id)->delete();
        DB::table('categories')->where('id', $id)->delete();
        
    }
}
