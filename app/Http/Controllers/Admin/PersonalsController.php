<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Personal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PersonalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.personals.index',[
            'personals' => Personal::where('user_id' , Auth::id())->get(),
        ]);
    }

    public function create()
    {


        return view('admin.personals.create',[


        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $avatar_path = null;
        if($request->hasFile('avatar') && $request->file('avatar')->isValid()){
            $file = $request->file('avatar');
            $avatar_path = $file->store('/',['disk' => 'uploads']);
        }

        $personals = Personal::create([

            'name'           => $request->post('name'),
            'overview'       => $request->post('overview'),
            'street'         => $request->post('street'),
            'city'           => $request->post('city'),
            'from'           => $request->post('from'),
            'telephone'      => $request->post('telephone'),
            'mobile'         => $request->post('mobile'),
            'email'          => $request->post('email'),
            'avatar'         => $avatar_path,
            'user_id' => auth()->id(),

        ]);

            toastr()->success('Your Personal Information Has Been Successfully Added');
            return redirect()->route('admin.personals.index');
    }


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
        $personals = Personal::findOrFail($id);
        $personals->delete();
        toastr()->error('Your Personal Information Has Been Successfully Deleted');

    }
}
