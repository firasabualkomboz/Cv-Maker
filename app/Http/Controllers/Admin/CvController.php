<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use App\Models\Personal;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;

class CvController extends Controller
{

    public function index()
    {

        return view('admin.cv.index',[

            'personals'     => Personal::where  ('user_id' , Auth::id())->get(),
            'experiences'   => Experience::where('user_id' , Auth::id())->get(),
            'educations'    => Experience::where('user_id' , Auth::id())->get(),
            'skills'        => Tag::where('user_id' , Auth::id())->get(),
            'user'          => Auth::id()

        ]);
    }

    public function downloadPdf()
    {

        $personals     = Personal::where  ('user_id' , Auth::id())->get();
        $experiences  = Experience::where('user_id' , Auth::id())->get();
        $educations    = Experience::where('user_id' , Auth::id())->get();
        $skills        = Tag::where('user_id' , Auth::id())->get();
        $user         = Auth::id();

        $pdf = PDF::loadView('admin.cv.index' , compact('personals' , 'experiences' ,'educations','skills'))->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('cv.pdf');
    }

    public function create()
    {
        //
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
        //
    }
}
