@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row row-height">
        <div class="col-xl-4 col-lg-4 content-left">
            <div class="content-left-wrapper">
                {{--  <a href="index.html" id="logo"><img src="https://www.chuka.ac.ke/public/uploads/logo.png" alt="" width="45" height="45"></a>  --}}
                <div id="social">
                    <ul>
                        <li><a href="#0"><i class="icon-facebook"></i></a></li>
                        <li><a href="#0"><i class="icon-twitter"></i></a></li>
                        <li><a href="#0"><i class="icon-google"></i></a></li>
                        <li><a href="#0"><i class="icon-linkedin"></i></a></li>
                    </ul>
                </div>
                <!-- /social -->
                <div>
                    <figure><img src="http://www.ansonika.com/potenza/img/info_graphic_1.svg" alt="" class="img-fluid" width="270" height="270">
                    </figure>
                    <h2>We are Hiring</h2>
                    <p>Tation argumentum et usu, dicit viderer evertitur te has. Eu dictas concludaturque usu, facete
                        detracto patrioque an per, lucilius pertinacia eu vel.</p>
                    <a href="https://1.envato.market/A6oJN" class="btn_1 rounded yellow" target="_parent">Learn More</a>
                    <a href="#start" class="btn_1 rounded mobile_btn yellow">Learn More</a>
                </div>
                <div class="copy">© 2020 cleoctech</div>
            </div>
            <!-- /content-left-wrapper -->
        </div>
        <!-- /content-left -->
        <div class="col-xl-8 col-lg-8 content-right" id="start">
            <div id="wizard_container" class="wizard" novalidate="novalidate">
                <div id="top-wizard">
                    <span id="location"></span>
                    <div id="progressbar" class="ui-progressbar ui-widget ui-widget-content ui-corner-all"
                        role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                        <div class="ui-progressbar-value ui-widget-header ui-corner-left"
                            style="display: none; width: 0%;"></div>
                    </div>
                </div>
                <!-- /top-wizard -->
                <form id="wrapped" method="post" enctype="multipart/form-data" class="fl-form fl-style-1 wizard-form"
                    novalidate="novalidate" action="send_email_1.php">
                    <input id="website" name="website" type="text" value="">
                    <!-- Leave for security protection, read docs for details -->
                    <div id="middle-wizard" class="wizard-branch wizard-wrapper">
                        <div class="step wizard-step current mybox" style="">
                            <h2 class="section_title wizard-header">Presentation</h2>
                            <h3 class="main_question">Personal info</h3>
                            <div class="form-group add_top_30">

                                <div class="fl-wrap fl-wrap-input fl-is-required"><label for="name"
                                        class="fl-label">First and Last Name</label><input type="text" name="name"
                                        id="name" class="form-control required fl-input"
                                        onchange="getVals(this, 'name_field');" placeholder="First and Last Name"></div>
                            </div>
                            <div class="form-group">

                                <div class="fl-wrap fl-wrap-input fl-is-required"><label for="email"
                                        class="fl-label">Email Address</label><input type="email" name="email"
                                        id="email" class="form-control required fl-input"
                                        onchange="getVals(this, 'email_field');" placeholder="Email Address"></div>
                            </div>
                            <div class="form-group">

                                <div class="fl-wrap fl-wrap-input fl-is-required"><label for="phone"
                                        class="fl-label">Phone</label><input type="text" name="phone" id="phone"
                                        class="form-control required fl-input" placeholder="Phone"></div>
                            </div>
                            <div class="form-group">

                                <div class="fl-wrap fl-wrap-input fl-is-required"><label for="id" class="fl-label">ID
                                        No</label><input type="text" name="phone" id="id"
                                        class="form-control required fl-input" placeholder="ID No"></div>
                            </div>
                            <label>Gender</label>
                            <div class="form-group radio_input">
                                <label class="container_radio mr-3">Male
                                    <input type="radio" name="gender" value="Male" class="required">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container_radio">Female
                                    <input type="radio" name="gender" value="Female" class="required">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <!-- /step-->

                        <!-- /Start Branch ============================== -->
                        <div class="step wizard-step mybox" data-state="branchtype" style="display: none;">
                            <h2 class="section_title">Education Background</h2>
                            <h3 class="main_question">What is your level of qualification?</h3>
                            <div class="form-group">
                                <label class="">High School
                                    {{-- <input type="radio" name="availability" value="High-School" class="required"> --}}
                                    <select class="form-control required" id="exampleFormControlSelect1">
                                        <option>A</option>
                                        <option>A-</option>
                                        <option>B+</option>
                                        <option>B</option>
                                        <option>B-</option>
                                        <option>C+</option>
                                        <option>C</option>
                                        <option>C-</option>
                                    </select>
                                    <br>
                                    <input type="text" name="POINTS" id="id" class="form-control required fl-input"
                                        placeholder="Points*">
                                    <span class="checkmark"></span>

                                </label>

                                <label class="">College/University
                                    <select class="form-control required" id="exampleFormControlSelect1">
                                        <option>PhD</option>
                                        <option>Dr.</option>
                                        <option>Degree</option>
                                        <option>Diploma</option>
                                        <option>Certificate</option>
                                    </select>
                                    <br>
                                    <input type="text" name="course" value="Course" class="form-control  required">
                                    <br>
                                    <input type="text" name="points" id="id" class="form-control required fl-input"
                                            placeholder="Year of graduation">
                                    <br>
                                    <input type="text" name="points" id="id" class="form-control required fl-input"
                                        placeholder="Points*">
                                    <span class="checkmark"></span>

                                </label>
                                <button onclick="addOthers()" type="button" name="add" class="forward">Add Others+</button>
                                <div id="myDIV" style="display: none;">
                                    <label class="" id="">Others
                                        <input type="text" name="points" id="id" style="width:400px !important;" class="form-control required fl-input"
                                            placeholder="Other Related Course Name">
                                        <br>
                                        <input type="text" name="points" id="id" style="width:400px !important;" class="form-control required fl-input"
                                            placeholder="Year of graduation">

                                        <br>
                                        <input type="text" name="points" id="id" style="width:400px !important;" class="form-control required fl-input"
                                            placeholder="Points*">
                                        <span class="checkmark"></span>

                                    </label>
                                </div>
                            </div>
                            <small>* Start branch radio based </small>
                        </div>


                        <div class="step wizard-step mybox" data-state="branchtype" style="display: none;">
                            <h2 class="section_title">Work Experience</h2>
                            <h3 class="main_question">Share your work experience</h3>
                            <div class="form-group">
                                <label class="">
                                    <input type="text" name="job" id="id" style="width:400px !important;" class="form-control required fl-input"
                                        placeholder="Job Title">
                                        <br>
                                    <input type="text" name="company" id="id" style="width:400px !important;" class="form-control required fl-input"
                                        placeholder="Company/Organization/Institution">
                                        <br>
                                    <input type="text" name="company-address" id="id" style="width:400px !important;" class="form-control required fl-input"
                                        placeholder="P.O BOX 520">
                                    <br>
                                    <textarea class="form-control required fl-input" name="job-roles" rows="5" id="roles" style="width:400px !important;"  placeholder="Roles"></textarea>
                                    <span class="checkmark"></span>

                                </label>

                                <button onclick="addWorkExperience()" type="button" name="add" class="forward">Add Others+</button>
                                <hr>
                                <div id="myDIV2" style="display: none;">
                                    <label class="">
                                        <input type="text" name="job" id="id" style="width:400px !important;" class="form-control required fl-input"
                                            placeholder="Job Title 2">
                                            <br>
                                        <input type="text" name="company" id="id" style="width:400px !important;" class="form-control required fl-input"
                                            placeholder="Company/Organization/Institution">
                                            <br>
                                        <input type="text" name="company-address" id="id" style="width:400px !important;" class="form-control required fl-input"
                                            placeholder="P.O BOX 520">
                                        <br>
                                        <textarea class="form-control required fl-input" name="job-roles" rows="5" id="roles" style="width:400px !important;"  placeholder="Roles"></textarea>
                                        <span class="checkmark"></span>

                                    </label>
                                    <br>
                                    <hr>
                                    <label class="">
                                        <input type="text" name="job" id="id" style="width:400px !important;" class="form-control required fl-input"
                                            placeholder="Job Title 3">
                                            <br>
                                        <input type="text" name="company" id="id" style="width:400px !important;" class="form-control required fl-input"
                                            placeholder="Company/Organization/Institution">
                                            <br>
                                        <input type="text" name="company-address" id="id" style="width:400px !important;" class="form-control required fl-input"
                                            placeholder="P.O BOX 520">
                                        <br>
                                        <textarea class="form-control required fl-input" name="job-roles" rows="5" id="roles" style="width:400px !important;"  placeholder="Roles"></textarea>
                                        <span class="checkmark"></span>

                                    </label>
                                </div>

                            </div>
                            <small>* Start branch radio based </small>
                        </div>


                        <div class="step wizard-step mybox" data-state="branchtype" style="display: none;">
                            <h2 class="section_title">Hobbies/Interests</h2>
                            <h3 class="main_question">Other areas of your involvement in the society</h3>
                            <div class="form-group">
                                <label class="">
                                    <input type="text" name="job" id="id" style="width:400px !important;" class="form-control required fl-input"
                                        placeholder="Title eg. Member of Kenya Engineers Society">
                                        <br>
                                    <input type="text" name="company" id="id" style="width:400px !important;" class="form-control required fl-input"
                                        placeholder="Community Name">
                                        <br>
                                    <input type="text" name="company-address" id="id" style="width:400px !important;" class="form-control required fl-input"
                                        placeholder="P.O BOX 520">
                                    <br>
                                    <textarea class="form-control required fl-input" name="job-roles" rows="5" id="roles" style="width:400px !important;"  placeholder="Your Role"></textarea>
                                    <span class="checkmark"></span>

                                </label>

                                <button onclick="addOtherAreas()" type="button" name="add" class="forward">Add Others+</button>
                                <hr>
                                <div id="myDIV3" style="display: none;">
                                    <label class="">
                                        <input type="text" name="job" id="id" style="width:400px !important;" class="form-control required fl-input"
                                        placeholder="Title eg. Member of Kenya Engineers Society">
                                        <br>
                                        <input type="text" name="company" id="id" style="width:400px !important;" class="form-control required fl-input"
                                            placeholder="Community Name">
                                            <br>
                                        <input type="text" name="company-address" id="id" style="width:400px !important;" class="form-control required fl-input"
                                            placeholder="P.O BOX 520">
                                        <br>
                                        <textarea class="form-control required fl-input" name="job-roles" rows="5" id="roles" style="width:400px !important;"  placeholder="Your Role"></textarea>
                                        <span class="checkmark"></span>

                                    </label>
                                    <hr>
                                </div>

                            </div>
                            <small>* Start branch radio based </small>
                        </div>

                        <div class="step wizard-step mybox" data-state="branchtype" style="display: none;">
                            <h2 class="section_title">Referees</h2>
                            <h3 class="main_question">People who know you professionally</h3>
                            <div class="form-group">
                                <label class="custom">Referee Details
                                    <input type="text" name="job" id="id" style="width:400px !important;" class="form-control required fl-input"
                                        placeholder="First and Last Name">
                                        <br>
                                    <input type="text" name="company" id="id" style="width:400px !important;" class="form-control required fl-input"
                                        placeholder="Community Name">
                                        <br>
                                    <input type="text" name="position" id="id" style="width:400px !important;" class="form-control required fl-input"
                                        placeholder="Position">
                                        <br>
                                    <input type="text" name="company-address" id="id" style="width:400px !important;" class="form-control required fl-input"
                                        placeholder="Company Address">
                                    <br>
                                    <input type="text" name="phone" id="id" style="width:400px !important;" class="form-control required fl-input"
                                        placeholder="Phone">
                                    <br>
                                    <span class="checkmark"></span>

                                </label>

                                <button onclick="addReferees()" type="button" name="add" class="forward">Add Others+</button>
                                <hr>
                                <div id="myDIV4" style="display: none;">
                                    <label class="custom">Referee Details
                                        <input type="text" name="job" id="id" style="width:400px !important;" class="form-control required fl-input"
                                            placeholder="First and Last Name">
                                            <br>
                                        <input type="text" name="company" id="id" style="width:400px !important;" class="form-control required fl-input"
                                            placeholder="Community Name">
                                            <br>
                                        <input type="text" name="position" id="id" style="width:400px !important;" class="form-control required fl-input"
                                            placeholder="Position">
                                            <br>
                                        <input type="text" name="company-address" id="id" style="width:400px !important;" class="form-control required fl-input"
                                            placeholder="Company Address">
                                        <br>
                                        <input type="text" name="phone" id="id" style="width:400px !important;" class="form-control required fl-input"
                                            placeholder="Phone">
                                        <br>
                                        <span class="checkmark"></span>

                                    </label>
                                    <hr>
                                </div>

                            </div>
                            <small>* Start branch radio based </small>
                        </div>

                        <div class="step wizard-step mybox" data-state="branchtype" style="display: none;">
                            <h2 class="section_title">Resume</h2>
                            <div class="form-group">
                                <label class="custom">
                                    <div class="form-group add_bottom_30 add_top_20">
                                        <label>Upload Resume<br><small>(Files accepted: .pdf(only) - Max file size: 2MB limit)</small></label>
                                        <div class="fileupload">
                                            <input type="file" name="fileupload"
                                                accept=".pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document"
                                                class="required">
                                        </div>
                                    </div>
                                    <span class="checkmark"></span>

                                </label>
                                <br>
                            <small>* Start branch radio based </small>
                        </div>

                        <!-- /step-->


                        <!-- /step last-->
                    </div>
                    <div class="step wizard-step mybox" id="end" style="display: none;">
                        <div class="summary">
                            <div class="wrapper">
                                <h3>Thank your for your time<br><span id="name_field"></span>!</h3>
                                <p>We will contat you shorly at the following email address <strong
                                        id="email_field"></strong></p>
                            </div>
                            <div class="text-center">
                                <div class="form-group terms">
                                    <label class="container_check">Please accept our <a href="#" data-toggle="modal"
                                            data-target="#terms-txt">Terms and conditions</a> before Submit
                                        <input type="checkbox" name="terms" value="Yes" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /middle-wizard -->
                    <div id="bottom-wizard">
                        <button onclick="showPrev()" type="button" name="backward" class="backward" id="bk" disabled="disabled">Prev</button>
                        <button onclick="showNext()" type="button" name="forward" class="forward" id="nt">Next</button>
                        <button type="submit" name="process" class="submit" disabled="disabled" id="st">Submit</button>
                    </div>
                    <!-- /bottom-wizard -->
                </form>
            </div>
            <!-- /Wizard container -->
        </div>
        <!-- /content-right-->
    </div>
    <!-- /row-->
</div>

@endsection

<script>
    //     $(document).ready(function(){
// //   $("p").click(function(){
// //     $(this).hide();
// //   });
// (function () {
//     var numDivs = $('.wizard-wrapper').children().length; //Count children ELements
//     var counter = 1;

//     function slide(time, counter) {
//         var $currentDiv = $('.wizard-wrapper .branch wizard-branch(' + counter + ')'); //get next element
//         var position = $currentDiv.position(); //get position of next element

//         if (numDivs > 1) {
//             $('html,body').animate({
//                 scrollLeft: position.left
//             }, time / 2); //Animate to next element
//         }
//     };

//     $('.forward').on('click', function () {
//         counter = counter + 1;
//         slide(2000, counter);
//     });
// })();
// });


</script>
