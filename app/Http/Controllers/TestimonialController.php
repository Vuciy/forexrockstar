<?php

namespace App\Http\Controllers;

use App\Testimonail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = new Testimonail;
        $testimonials = $testimonials->orderBy('created_at', 'dsc')->simplePaginate(10);
        if(!empty($testimonials))    {
            return view('pages.testimonial')->with('testimonials', $testimonials);
        }

        return view('pages.testimonial');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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

        //dd(Auth::guard('admin')->id());
        $testimonials = new Testimonail;
        $testimonials->user_id = Auth::guard('admin')->id();
        $testimonials->title = $request->title;
        $testimonials->testimonial = nl2br($request->testimonial);

        $testimonials->save();
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
    public function destroy(Request $request)
    {
        $testimonials = new Testimonail;
        $testimonials->where('id', $request->id)->delete();
        return redirect('/testimonial');
    }
}
