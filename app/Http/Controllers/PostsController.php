<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
     *
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $para= $request->input('unit');

        // if ($para == 1) {
        //     return redirect('/education');
        // }
        switch ($para) {
            case '1':
                $this->validate($request, [
                    'name' => 'required',
                    'email' => 'required',
                    'phone' => 'required',
                    'ID_No' => 'required'
                ]);
                $name =$request->input('name');
                $email =$request->input('email');
                $phone =$request->input('phone');
                $ID_No =$request->input('ID_No');
                $gender =$request->input('gender');
                $lastid =$request->input('lastid');

                //insert
                DB::table('personal_info')->insert(
                    ['name' => $name, 'email' => $email, 'phone' => $phone, 'ID_No' => $ID_No, 'gender' => $gender, 'application_id' => $lastid]
                );

                return redirect('/education');
                break;
            case '2':
                $this->validate($request, [
                    // 'name' => 'required',
                    // 'email' => 'required',
                    // 'phone' => 'required',
                    // 'ID_No' => 'required'
                ]);
                $Hgrade =$request->input('Hgrade');
                $Hpoints =$request->input('Hpoints');
                $HLevel =$request->input('HLevel');
                $course =$request->input('course');
                $Lpoints =$request->input('Lpoints');
                $year =$request->input('year');
                $lastid =$request->input('lastid');
                // insert
                DB::table('education_details')->insert(
                    ['highschool_grade' => $Hgrade, 'highschool_points' => $Hpoints, 'college_qualification' => $HLevel, 'college_course' => $course, 'year_of_graduation' => $year, 'college_points' => $Lpoints, 'application_id' => $lastid]
                );
                return redirect('/work-expereience');
                break;

            case '3':
                $this->validate($request, [
                    // 'name' => 'required',
                    // 'email' => 'required',
                    // 'phone' => 'required',
                    // 'ID_No' => 'required'
                ]);
                $job_title =$request->input('job-title');
                $work_place =$request->input('work_place');
                $address =$request->input('address');
                $roles =$request->input('job_roles');
                $lastid =$request->input('lastid');
                // insert
                DB::table('work_experience')->insert(
                    ['job_title' => $job_title, 'work_place' => $work_place, 'address' => $address, 'roles' => $roles, 'application_id' => $lastid]
                );
                return redirect('/areas-of-interests');
                break;

                case '4':
                    $this->validate($request, [
                        // 'name' => 'required',
                        // 'email' => 'required',
                        // 'phone' => 'required',
                        // 'ID_No' => 'required'
                    ]);
                    $title =$request->input('title');
                    $company_name =$request->input('company');
                    $address =$request->input('address');
                    $roles =$request->input('job_roles');
                    $lastid =$request->input('lastid');
                    // insert
                    DB::table('work_experience')->insert(
                        ['title' => $title, 'company_name' => $company_name, 'address' => $address, 'roles' => $roles, 'application_id' => $lastid]
                    );
                    return redirect('/referees');
                    break;

                case '5':
                    $this->validate($request, [
                        // 'name' => 'required',
                        // 'email' => 'required',
                        // 'phone' => 'required',
                        // 'ID_No' => 'required'
                    ]);
                    $name =$request->input('title');
                    $company_name =$request->input('company');
                    $position =$request->input('position');
                    $address =$request->input('address');
                    $phone =$request->input('phone');
                    $lastid =$request->input('lastid');

                    //insert
                    DB::table('referees')->insert(
                        ['name' => $name, 'company_name' => $company_name, 'position' => $position, 'address' => $address, 'phone' => $phone, 'application_id' => $lastid]
                    );

                    return redirect('/ulpoad-resume');
                    break;

                case '6':
                    $this->validate($request, [
                        // 'name' => 'required',
                        // 'email' => 'required',
                        // 'phone' => 'required',
                        // 'ID_No' => 'required'
                        'book_file'=>'mimes:pdf|max:99999'
                    ]);
                    $lastid =$request->input('lastid');
                     //Handle book_file file upload
                    //if function to check if the user has uploaded the file
                    if($request->hasFile('book_file')){
                        //get filename with extension
                        $bookfilenameWithExt =$request->file('book_file')->getClientOriginalName();
                        //get just filenaem
                        $bookfilename = pathinfo($bookfilenameWithExt,PATHINFO_FILENAME);
                        //get just Ext
                        $bookextension =$request->file('book_file')->getClientOriginalExtension();
                        //filename to store
                        $bookfileNameToStore = $bookfilename.'_'.time().'.'.$bookextension;
                        //upload image
                        $path = $request->file('book_file')->storeAs('public/resume_files/', $bookfileNameToStore);
                    }else{
                        die("Please Upload the book");
                    }
                    //update
                    DB::table('applications')
                        ->where('application_id', $lastid)
                        ->update(['book_file' => $bookfileNameToStore]);

                    return redirect('/submit-application');
                    break;

                case '7':
                    $this->validate($request, [
                        // 'name' => 'required',
                        // 'email' => 'required',
                        // 'phone' => 'required',
                        // 'ID_No' => 'required'
                        'book_file'=>'mimes:pdf|max:99999'
                    ]);
                    $lastid =$request->input('lastid');

                    //update
                    DB::table('applications')
                        ->where('application_id', $lastid)
                        ->update(['status' => "Complete"]);

                    return redirect('/');
                    break;
            default:
                # code...
                break;
        }

    }
    public function storeWokrInfo(Request $request)
    {
        // //
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'ID_No' => 'required'
        ]);

        //save

        return redirect('/work-expereience');
    }
    public function interests(Request $request)
    {
        // //
        // $this->validate($request, [
        //     // 'title' => 'required',
        //     // 'author' => 'required',
        //     // 'cover_image'=>'image|nullable|max:1999',
        //     // // 'book_file'=>'required|application/msword|text/pdf'
        //     // 'book_file'=>'mimes:pdf|max:99999'
        // ]);
        return redirect('/areas-of-interests');
    }
    public function referees(Request $request)
    {
        // //
        // $this->validate($request, [
        //     // 'title' => 'required',
        //     // 'author' => 'required',
        //     // 'cover_image'=>'image|nullable|max:1999',
        //     // // 'book_file'=>'required|application/msword|text/pdf'
        //     // 'book_file'=>'mimes:pdf|max:99999'
        // ]);
        return redirect('/referees');
    }
    public function resume(Request $request)
    {
        // //
        // $this->validate($request, [
        //     // 'title' => 'required',
        //     // 'author' => 'required',
        //     // 'cover_image'=>'image|nullable|max:1999',
        //     // // 'book_file'=>'required|application/msword|text/pdf'
        //     // 'book_file'=>'mimes:pdf|max:99999'
        // ]);
        return redirect('/ulpoad-resume');
    }
    public function thanksmessage(Request $request)
    {
        // //
        // $this->validate($request, [
        //     // 'title' => 'required',
        //     // 'author' => 'required',
        //     // 'cover_image'=>'image|nullable|max:1999',
        //     // // 'book_file'=>'required|application/msword|text/pdf'
        //     // 'book_file'=>'mimes:pdf|max:99999'
        // ]);
        return redirect('/submit-application');
    }
    public function submitAll(Request $request)
    {
        // //
        // $this->validate($request, [
        //     // 'title' => 'required',
        //     // 'author' => 'required',
        //     // 'cover_image'=>'image|nullable|max:1999',
        //     // // 'book_file'=>'required|application/msword|text/pdf'
        //     // 'book_file'=>'mimes:pdf|max:99999'
        // ]);
       // return redirect('/submit-application');
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