<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Application;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //transition::orderBy('created_at', 'desc')->skip(1)->take(1)->get();
       // $admins = User::where('role', '!=', 'Customer')->get();
        //$lastid = Application::latest('upload_time')->first();
       // $lastid = Application::orderBy('created_at', 'desc')->take(1)->get();

       $last_row = DB::table('applications')->latest()->first();
       // $lastid= Application::where('status', '==', 'Complete')->get();
       if ($last_row === null) {
            DB::table('applications')->insert(
                ['created_at' => DB::raw('now()'), 'updated_at' =>DB::raw('now()'), 'status' =>'Incomplete', ]
            );
            $last_row = DB::table('applications')->latest()->first();
            //return response()->json(array('success' => true, 'last_insert_id' => $last_row->application_id), 200);
            return view('home')->with('last_row', $last_row);
       }else{
        //return response()->json(array('success' => true, 'last_insert_id' => $last_row->application_id), 200);
        return view('home')->with('last_row', $last_row);
       }

      // return view('home')->with('last_row', $last_row);
    }

    // public function education(){
    //     return view("inc.innerforms.education-bg");
    // }


}