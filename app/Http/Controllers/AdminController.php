<?php

namespace App\Http\Controllers;
use App\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = new Admin;
        $admin_list = $admin->get();
        return view('admin.home')->with('admin_list', $admin_list);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $admin = new Admin;

        $admin->insert(['name' => $request->name, 'email' => $request->email,'added_by' => Auth::user()->name,  'password' => Hash::make($request->password)]);
        return redirect('/admin/home');
    }

    public function removeAdmin(Request $request) {
        $admin = new Admin;
        $admin->where('id', $request->id)->delete(); 
    }
}
