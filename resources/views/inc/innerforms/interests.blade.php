
@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row row-height">
        @include('inc.innerforms.content-left')
        <!-- /content-left -->
        <div class="col-xl-8 col-lg-8 content-right" id="start">
            <div id="wizard_container" class="wizard" novalidate="novalidate">
                <div id="top-wizard">
                    <span id="location"></span>
                    <div id="progressbar" class="ui-progressbar ui-widget ui-widget-content ui-corner-all"
                        role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                        <div class="ui-progressbar-value ui-widget-header ui-corner-left" style="display: none; width: 0%;"></div>
                    </div>
                </div>
                <!-- /top-wizard -->
                <form id="wrapped" method="POST" enctype="multipart/form-data" class="fl-form fl-style-1 wizard-form"
                novalidate="novalidate" action="{{action('PostsController@referees')}}">
                <input id="website" name="website" type="text" value="">
                @csrf
                <!-- Leave for security protection, read docs for details  -->
                <div class="step wizard-step mybox" data-state="branchtype">
                    <h2 class="section_title">Hobbies/Interests</h2>
                    {!! Form::hidden('unit',4) !!}
                    {!! Form::hidden('lastid', $last_row->application_id) !!}
                    <h3 class="main_question">Other areas of your involvement in the society</h3>
                    <div class="form-group">
                        <label class="">
                            <input type="text" name="title" id="id" style="width:400px !important;" class="form-control required fl-input"
                                placeholder="Title eg. Member of Kenya Engineers Society">
                            <br>
                            <input type="text" name="company" id="id" style="width:400px !important;"
                                class="form-control required fl-input" placeholder="Community Name">
                            <br>
                            <input type="text" name="address" id="id" style="width:400px !important;"
                                class="form-control required fl-input" placeholder="P.O BOX 520">
                            <br>
                            <textarea class="form-control required fl-input" name="job_roles" rows="5" id="roles"
                                style="width:400px !important;" placeholder="Your Role"></textarea>
                            <span class="checkmark"></span>

                        </label>

                        <button onclick="addOtherAreas()" type="button" name="add" class="forward">Add Others+</button>
                        <hr>
                        <div id="myDIV3" style="display: none;">
                            <label class="">
                                <input type="text" name="job" id="id" style="width:400px !important;"
                                    class="form-control required fl-input" placeholder="Title eg. Member of Kenya Engineers Society">
                                <br>
                                <input type="text" name="company" id="id" style="width:400px !important;"
                                    class="form-control required fl-input" placeholder="Community Name">
                                <br>
                                <input type="text" name="company-address" id="id" style="width:400px !important;"
                                    class="form-control required fl-input" placeholder="P.O BOX 520">
                                <br>
                                <textarea class="form-control required fl-input" name="job-roles" rows="5" id="roles"
                                    style="width:400px !important;" placeholder="Your Role"></textarea>
                                <span class="checkmark"></span>

                            </label>
                            <hr>
                        </div>

                    </div>
                    <small>* Start branch radio based </small>
                </div>
               <!-- /middle-wizard -->
                {{--  @include('inc.innerforms.buttons')  --}}
                <div id="bottom-wizard">
                     <button onclick="" type="button" name="backward" class="backward" id="bk">Prev</button>
                    {{--  <button onclick="showNext()" type="button" name="forward" class="forward" id="nt">Next</button>    --}}
                    <button type="submit" name="process" class="forward"  id="st" >Next</button>
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


