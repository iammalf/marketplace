<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Categorypost;

class CategoryPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categirespost = CategoryPost::all();
        return view('admin.categorypost.index', compact('categirespost'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categorypost.create');
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
            'name' => 'required',
            'slug' => 'required|unique:categoryposts'
        ]);
        $categorypost = CategoryPost::create($request->all());
        return redirect()->route('admin.categoriesposts.index')->with('info', 'La Categoría fue creada con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Categorypost $categoriespost)
    {
        return view('admin.categorypost.show', compact('categoriespost'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Categorypost $categoriespost)
    {
        return view('admin.categorypost.edit', compact('categoriespost'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categorypost $categoriespost)
    {
        $request->validate([
            'name' => 'required',
            'slug' => "required|unique:categoryposts,slug,$categoriespost->id"
        ]);

        $categoriespost->update($request->all());
        return redirect()->route('admin.categoriesposts.edit', $categoriespost)->with('info', 'La Categoría fue actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorypost $categoriespost)
    {
        $categoriespost->delete();
        return redirect()->route('admin.categoriesposts.index')->with('info', 'La Categoría fue eliminada con éxito');
    }
}
