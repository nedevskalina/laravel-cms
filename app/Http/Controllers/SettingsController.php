<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Helper\ImageStore;
use Illuminate\Http\Request;
use App\Models\Settings;
use Illuminate\Support\Facades\Validator;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $settings = Settings::all();
            $data = ['settings' => $settings];

            return view('dashboard.settings.settings')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.settings.edit');
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
            'title' => 'required|max:255',
            'email' => 'required|unique:users',
            'phone' => 'required'

        ]);

        if ($validator->fails())
        {
            return redirect('admin/settings/create')->withErrors($validator)->withInput();
        }

            $title = $request->get('title');
            $phone = $request->get('phone');
            $email = $request->get('email');
            $description = $request->get('description');
            $address = $request->get('address');
            $logo = $request->file('logo');


            $imgObj = new ImageStore($request, 'settings');

            $logo = $imgObj->imageStore();



            $setting = Settings::create([
                'title' => $title,
                'phone' => $phone,
                'email' => $email,
                'description' => $description,
                'address' => $address,
                'logo' => $logo

            ]);





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

        return view('dashboard.settings.edit');
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
        //
    }
}
