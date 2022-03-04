<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use Illuminate\Support\Facades\Validator;
use Kalnoy\Nestedset\NestedSet;
class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categories::getTree();


        $data = ['categories' => $categories];


        return view('dashboard.categories.categories')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        $categories = Categories::getList();
        $data = ['categories' => $categories];



        return view('dashboard.categories.create')->with($data);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required|max:255'
        ]);

        if ($validator->fails())
        {
            return redirect('admin/categories/create')->withErrors($validator)->withInput();
        }


        $name = $request->get('name');
        $parent_id = $request->has('parent_id') ? $request->get('parent_id') : null;

        $cateogry = Categories::create([
            'name' => $name,
            'parent_id' => $parent_id,
        ]);


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
        //
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $category = Categories::FindorFail($id);
        $category->delete();

        return redirect()->route('categories.index');


    }
}
