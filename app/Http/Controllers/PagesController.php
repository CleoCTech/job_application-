<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function about(){
        return view("pages.about");
    }

    public function education(){
        $last_row = DB::table('applications')->latest()->first();
        // $lastid= Application::where('status', '==', 'Complete')->get();
        if ($last_row === null) {
             DB::table('applications')->insert(
                 ['created_at' => DB::raw('now()'), 'updated_at' =>DB::raw('now()'), 'status' =>'Complete', ]
             );
             $last_row = DB::table('applications')->latest()->first();
             //return response()->json(array('success' => true, 'last_insert_id' => $last_row->application_id), 200);
             return view('inc.innerforms.education-bg')->with('last_row', $last_row);
        }else{
         //return response()->json(array('success' => true, 'last_insert_id' => $last_row->application_id), 200);
         return view('inc.innerforms.education-bg')->with('last_row', $last_row);
        }
       // return view("inc.innerforms.education-bg");
    }
    public function work(){
        $last_row = DB::table('applications')->latest()->first();
        // $lastid= Application::where('status', '==', 'Complete')->get();
        if ($last_row === null) {
             DB::table('applications')->insert(
                 ['created_at' => DB::raw('now()'), 'updated_at' =>DB::raw('now()'), 'status' =>'Complete', ]
             );
             $last_row = DB::table('applications')->latest()->first();
             //return response()->json(array('success' => true, 'last_insert_id' => $last_row->application_id), 200);
             return view("inc.innerforms.work-experience")->with('last_row', $last_row);
        }else{
         //return response()->json(array('success' => true, 'last_insert_id' => $last_row->application_id), 200);
         return view("inc.innerforms.work-experience")->with('last_row', $last_row);
        }

    }
    public function interests(){
        $last_row = DB::table('applications')->latest()->first();
        // $lastid= Application::where('status', '==', 'Complete')->get();
        if ($last_row === null) {
             DB::table('applications')->insert(
                 ['created_at' => DB::raw('now()'), 'updated_at' =>DB::raw('now()'), 'status' =>'Complete', ]
             );
             $last_row = DB::table('applications')->latest()->first();
             //return response()->json(array('success' => true, 'last_insert_id' => $last_row->application_id), 200);
             return view("inc.innerforms.interests")->with('last_row', $last_row);
        }else{
         //return response()->json(array('success' => true, 'last_insert_id' => $last_row->application_id), 200);
         return view("inc.innerforms.interests")->with('last_row', $last_row);
        }

    }
    public function referees(){
        $last_row = DB::table('applications')->latest()->first();
        // $lastid= Application::where('status', '==', 'Complete')->get();
        if ($last_row === null) {
             DB::table('applications')->insert(
                 ['created_at' => DB::raw('now()'), 'updated_at' =>DB::raw('now()'), 'status' =>'Complete', ]
             );
             $last_row = DB::table('applications')->latest()->first();
             //return response()->json(array('success' => true, 'last_insert_id' => $last_row->application_id), 200);
             return view("inc.innerforms.referees")->with('last_row', $last_row);
        }else{
         //return response()->json(array('success' => true, 'last_insert_id' => $last_row->application_id), 200);
         return view("inc.innerforms.referees")->with('last_row', $last_row);
        }

    }
    public function resume(){
        $last_row = DB::table('applications')->latest()->first();
        // $lastid= Application::where('status', '==', 'Complete')->get();
        if ($last_row === null) {
             DB::table('applications')->insert(
                 ['created_at' => DB::raw('now()'), 'updated_at' =>DB::raw('now()'), 'status' =>'Complete', ]
             );
             $last_row = DB::table('applications')->latest()->first();
             //return response()->json(array('success' => true, 'last_insert_id' => $last_row->application_id), 200);
             return view("inc.innerforms.resume")->with('last_row', $last_row);
        }else{
         //return response()->json(array('success' => true, 'last_insert_id' => $last_row->application_id), 200);
         return view("inc.innerforms.resume")->with('last_row', $last_row);
        }

    }
    public function thanksmsg(){
        $last_row = DB::table('applications')->latest()->first();

       // $user = DB::table('personal_info')->where('email', $last_row)->get();
        //var_dump($user->email);
        // $lastid= Application::where('status', '==', 'Complete')->get();
        if ($last_row === null) {
             DB::table('applications')->insert(
                 ['created_at' => DB::raw('now()'), 'updated_at' =>DB::raw('now()'), 'status' =>'Complete', ]
             );
             $last_row = DB::table('applications')->latest()->first();
            //  $data = array(
            //     'last_row' => $last_row,
            //     'user' => $user
            //  );
             //return response()->json(array('success' => true, 'last_insert_id' => $last_row->application_id), 200);
            //  return view("inc.innerforms.thank-you")->with($data);
            return view("inc.innerforms.thank-you")->with('last_row', $last_row);
        }else{

            //  $data = array(
            //     'last_row' => $last_row,
            //     'user' => $user
            //  );
         //return response()->json(array('success' => true, 'last_insert_id' => $last_row->application_id), 200);
        // return view("inc.innerforms.thank-you")->with('data', $data);
         return view("inc.innerforms.thank-you")->with('last_row', $last_row);
        }
        //return view("inc.innerforms.thank-you");
    }
}