<div class="step wizard-step mybox" data-state="branchtype" style="display: none;">
    <h2 class="section_title">Referees</h2>
    <h3 class="main_question">People who know you professionally</h3>
    <div class="form-group">
        <label class="custom">Referee Details
            <input type="text" name="job" id="id" style="width:400px !important;" class="form-control required fl-input"
                placeholder="First and Last Name">
            <br>
            <input type="text" name="company" id="id" style="width:400px !important;"
                class="form-control required fl-input" placeholder="Community Name">
            <br>
            <input type="text" name="position" id="id" style="width:400px !important;"
                class="form-control required fl-input" placeholder="Position">
            <br>
            <input type="text" name="company-address" id="id" style="width:400px !important;"
                class="form-control required fl-input" placeholder="Company Address">
            <br>
            <input type="text" name="phone" id="id" style="width:400px !important;"
                class="form-control required fl-input" placeholder="Phone">
            <br>
            <span class="checkmark"></span>

        </label>

        <button onclick="addReferees()" type="button" name="add" class="forward">Add Others+</button>
        <hr>
        <div id="myDIV4" style="display: none;">
            <label class="custom">Referee Details
                <input type="text" name="job" id="id" style="width:400px !important;"
                    class="form-control required fl-input" placeholder="First and Last Name">
                <br>
                <input type="text" name="company" id="id" style="width:400px !important;"
                    class="form-control required fl-input" placeholder="Community Name">
                <br>
                <input type="text" name="position" id="id" style="width:400px !important;"
                    class="form-control required fl-input" placeholder="Position">
                <br>
                <input type="text" name="company-address" id="id" style="width:400px !important;"
                    class="form-control required fl-input" placeholder="Company Address">
                <br>
                <input type="text" name="phone" id="id" style="width:400px !important;"
                    class="form-control required fl-input" placeholder="Phone">
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
</div>

<div class="step wizard-step mybox" id="end" style="display: none;">
    <div class="summary">
        <div class="wrapper">
            <h3>Thank your for your time<br><span id="name_field"></span>!</h3>
            <p>We will contat you shorly at the following email address <strong id="email_field"></strong></p>
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

<script>
var visibleDiV = 0;
var college_grade;
var highschool_grade;

function showDiv() {
    content_Id = visibleDiV - 1;
    //console.log(content_Id);

    //send data
    var application_id = "{{$last_row->application_id}}";
    //console.log(application_id);
    var data = [];

    if (visibleDiV == 1) {
        console.log("its  1");
        var personalInfoStr = [];
        var name = $("#name").val();
        var email = $("#email").val();
        var phone = $("#phone").val();
        var id_no = $("#id_no").val();
        var gender;
        // append new value to the array
        if (document.getElementById('r1').checked) {
            gender = document.getElementById('r1').value;

        } else if (document.getElementById('r2').checked) {
            gender = document.getElementById('r2').value;
        }
        personalInfoStr.push(application_id, name, email, phone, id_no, gender);
        data.push(personalInfoStr);
        console.log(data);
    } else if (visibleDiV == 2) {
        console.log("its  2");
        var educationInfo = [];
        var highschool_points = $("#h_points").val();
        var course = $("#course").val();
        var yearOfGraduation = $("#YOG").val();
        var college_points = $("#College_points").val();

        educationInfo.push(application_id, highschool_grade, highschool_points, college_grade, course,
            yearOfGraduation, college_points);
        data.push(educationInfo);
        console.log(data);
    } else if (visibleDiV == 3) {
        var workExp = [];
    }
    $(".mybox").hide();
    $(".mybox:eq(" + visibleDiV + ")").show();


}

function showNext() {
    if (visibleDiV == $(".mybox").length - 1) {
        visibleDiV = 0;
        document.getElementById("bk").disabled = true;
        //chageToSubmit(visibleDiV);

    } else {
        visibleDiV++;
        document.getElementById("bk").disabled = false;
        //chageToSubmit(visibleDiV);
        console.log(visibleDiV);
        if (visibleDiV == 6) {
            document.getElementById("nt").disabled = true;
            document.getElementById("st").disabled = false;
        }

    }
    showDiv();
}

function showPrev() {
    if (visibleDiV == 0) {
        // enablePrevBtn(visibleDiV);
        document.getElementById("bk").disabled = true;
        // chageToSubmit(visibleDiV);
        visibleDiV = $(".mybox").length - 1;
    } else {
        visibleDiV--;
        if (visibleDiV == 0) {
            document.getElementById("bk").disabled = true;
            console.log("Prev Disabled");
        }
        if (visibleDiV < 6) {
            document.getElementById("nt").disabled = false;
            document.getElementById("st").disabled = true;
        }
        console.log(visibleDiV);

    }
    showDiv();
}


function addOthers() {
    var x = document.getElementById("myDIV");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function addWorkExperience() {
    var x = document.getElementById("myDIV2");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function addOtherAreas() {
    var x = document.getElementById("myDIV3");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function addReferees() {
    var x = document.getElementById("myDIV4");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
$(document).ready(function() {
    $("#gradeFormControlSelect1").change(function() {
        alert("Hclhahjd");
        highschool_grade = $(this).children("option:selected").val();
        //alert("You have selected the country - " + selectedCountry);
    });
});
//var college_grade ;
$(document).ready(function() {
    $("#college_gFormControlSelect1").change(function() {
        alert("clhahjd");
        college_grade = $(this).children("option:selected").val();
        //alert("You have selected the country - " + selectedCountry);
    });
});

$(document).ready(function() {
    $("#gradeFormControlSelect2").change(function() {
        highschool_grade1 = $(this).children("option:selected").val();
        //alert("You have selected the country - " + selectedCountry);
    });
});
//var college_grade ;
$(document).ready(function() {
    $("#college_gFormControlSelect2").change(function() {
        college_grade = $(this).children("option:selected").val();
        //alert("You have selected the country - " + selectedCountry);
    });
});
</script>