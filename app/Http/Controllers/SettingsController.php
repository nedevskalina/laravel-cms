<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Helper\ImageStore;
use Illuminate\Http\Request;
use App\Models\Settings;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\ImageManagerStatic as Image;
use App\Http\Controllers\Helper;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = Settings::first(); // samo prviot setting da go zeme od baza
        $data = ['setting' => $setting];

        if ($setting) {
            return view('dashboard.settings.settings')->with($data);

        } else {
            return view('dashboard.settings.create');

        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.settings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'email' => 'required|unique:users',
            'phone' => 'required'

        ]);

        if ($validator->fails()) {
            return redirect('admin/settings/create')->withErrors($validator)->withInput();
        }

        $title = $request->get('title');
        $phone = $request->get('phone');
        $email = $request->get('email');
        $description = $request->get('description');
        $address = $request->get('address');
        $logo = $request->file('logo');
        $mainurl = $request->get('mainurl');


        $imgObj = new ImageStore($request, 'settings', 'logo');

        $logo = $imgObj->imageStore();


        $setting = Settings::create([
            'title' => $title,
            'phone' => $phone,
            'email' => $email,
            'description' => $description,
            'address' => $address,
            'mainurl' => $mainurl,
            'logo' => $logo

        ]);
        $data = ['setting' => $setting];


        return view('dashboard.settings.settings')->with($data);

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $setting = Settings::where('id', '=', $id)->first();

        $data = ['setting' => $setting];

        return view('dashboard.settings.setting')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $setting = Settings::FindOrFail($id);
        $data = ['setting' => $setting];

        return view('dashboard.settings.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $setting = Settings::FindOrFail($id);
        $input = $request->all(); // all go zema celiot setting

        $setting->fill($input)->save();
        $data = ['setting' => $setting];

        return view('dashboard.settings.settings')->with($data);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
