<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Helper\ImageStore;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products = Products::all();
        $data = ['products' => $products];

        return view('dashboard.products.products')->with($data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $users = User::getUsers();
        $categories = Categories::getList();
        $data = ['categories' => $categories, 'users' => $users];

        return view('dashboard.products.create')->with($data);


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $name = $request->get('name');
        $price= $request->get('price');
        $quantity = $request->get('quantity');
        $image = $request->file('image');
        $description = $request->get('description');
        $user = $request->get('user_id');


        $imageObj = new ImageStore($request, 'products');

        $image = $imageObj->imageStore();

        $product =  Products::create([

            'name' => $name,
            'price' => $price,
            'quantity' => $quantity,
            'description' => $description,
            'user_id' => $user,
            'image' => $image

        ]);

        $data = ['products' => $product ];

        return view('dashboard.products.products')->with($data);

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
        $product = Products::FindOrFail($id);
        $data = [ 'product' => $product ];

        return view('dashboard.products.edit')->with($data);

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

        $product = Products::FindOrFail($id);
        $input = $request->all(); // all go zema celiot setting

        $product->fill($input)->save();
        $data = ['product' => $product];


        return view('dashboard.products.products')->with($data);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Products::find($id);
        $product->delete();

        return redirect()->route('products.index');
    }
}
