<?php

namespace App\Http\Controllers;

use App\Models\Scripts;
use Illuminate\Http\Request;

class ScriptsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $scripts = Scripts::all();
        $data = ['scripts' => $scripts];

        return view('dashboard.scripts.scripts')->with($data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $scripts = Scripts::all();
        $data = ['scripts' => $scripts];

        return view('dashboard.scripts.create')->with($data);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->get('name');
        $scr = $request->get('script_code');
        $status = $request->get('active');

        $script = Scripts::create([
            'name' => $name,
            'script_code' => $scr,
            'active' => $status
        ]);


        $data = ['scripts' => $script];

        return view('dashboard.scripts.scripts')->with($data);

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Scripts $scripts
     * @return \Illuminate\Http\Response
     */
    public function show(Scripts $scripts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Scripts $scripts
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $script = Scripts::FindOrFail($id);
        $data = [ 'script' => $script ];
        return view('dashboard.scripts.edit')->with($data);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Scripts $scripts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $script = Scripts::FindOrFail($id);
        $input = $request->all();
        $script->fill($input)->save();

        $data = [ 'script' => $script ];

        return view('dashboard.scripts.scripts')->with($data);


    }

    public function updateToken(Request $request, $id)
    {
        $script = Scripts::FindOrFail($id);

        $active = $request->get('active');

        if ($active == "true") {
            $active = 1;
        } else {
            $active = 0;
        }

        $input['active'] = $active;

        $script->fill($input)->save();

        return json_encode(['status' => 'success'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Scripts $scripts
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $script = Scripts::find($id);
        $script->delete();

        return redirect()->route('scripts.index');
    }
}
