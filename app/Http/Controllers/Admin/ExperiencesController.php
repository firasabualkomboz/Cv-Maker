<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExperiencesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.experiences.index',[
            'experiences' => Experience::where('user_id' , Auth::id())->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.experiences.create',[

        ]);
    }


    public function store(Request $request)
    {
        $experiences = Experience::create([

            'company'          => $request->post('company'),
            'location'         => $request->post('location'),
            'job_title'        => $request->post('job_title'),
            'start_at'         => $request->post('start_at'),
            'end_at'           => $request->post('end_at'),
            'description'      => $request->post('description'),
            'user_id' => auth()->id(),

        ]);

            toastr()->success('Your Experience Has Been Successfully Added');
            return redirect()->route('admin.experiences.index');
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
        $experience = Experience::findOrFail($id);
        return view('admin.experiences.edit',[
            'experience' => $experience ,
        ]);
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
        $experience = Experience::findOrFail($id);

        $experience->company         = $request->company;
        $experience->location        = $request->location;
        $experience->jop_title       = $request->jop_title;
        $experience->start_at        = $request->start_at;
        $experience->end_at          = $request->end_at;
        $experience->description     = $request->description;

        $experience->save();

        return redirect()->route('admin.categories.index')
        ->with('success','The Category Has Been Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $experiences  = Experience::findOrFail($id);
        $experiences->delete();
        toastr()->error('The Experiences Has Been Deleted Successfully');
        return redirect()->route('admin.experiences.index');
    }
}
