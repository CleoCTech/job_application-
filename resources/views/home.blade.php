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
                        <div class="ui-progressbar-value ui-widget-header ui-corner-left"
                            style="display: none; width: 0%;"></div>
                    </div>
                </div>
                <!-- /top-wizard -->
                <form id="wrapped" method="POST" enctype="multipart/form-data" class="fl-form fl-style-1 wizard-form"
                    novalidate="novalidate" action="{{action('PostsController@store')}}">
                    <input id="website" name="website" type="text" value="">
                    @csrf
                    <!-- Leave for security protection, read docs for details  -->
                    <div id="middle-wizard" class="wizard-branch wizard-wrapper">
                        <div class="step wizard-step current mybox" style="">
                            <h2 class="section_title wizard-header">Presentation</h2>
                            <h3 class="main_question">Personal info</h3>
                            {!! Form::hidden('unit',1) !!}
                            {!! Form::hidden('lastid', $last_row->application_id) !!}
                            {{--  <label name="stage" style="display: none;">1</label>  --}}
                            {{--  <label name="lastid" style="display: none;">{{$last_row->application_id}}</label>  --}}
                            <div class="form-group add_top_30">

                                <div class="fl-wrap fl-wrap-input fl-is-required"><label for="name"
                                        class="fl-label">First and Last Name</label><input type="text" name="name"
                                        id="name" class="form-control required fl-input" placeholder="First and Last Name"></div>
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
                                        No</label><input type="text" name="ID_No" id="id_no"
                                        class="form-control required fl-input" placeholder="ID No"></div>
                            </div>
                            <label>Gender</label>
                            <div class="form-group radio_input">
                                <label class="container_radio mr-3">Male
                                    <input type="radio" id="r1" name="gender" value="Male" class="required">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container_radio">Female
                                    <input type="radio" id="r2" name="gender" value="Female" class="required">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                   <!-- /middle-wizard -->
                    {{--  @include('inc.innerforms.buttons') action="{{action('PostsController@store')}}"  --}}
                    <div id="bottom-wizard">
                        {{--  <button onclick="showPrev()" type="button" name="backward" class="backward" id="bk" disabled="disabled">Prev</button>
                        <button onclick="showNext()" type="button" name="forward" class="forward" id="nt">Next</button>  --}}
                        <button type="submit" name="porcess" class="forward"  id="st" >Next</button>
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

