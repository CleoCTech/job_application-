
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
                novalidate="novalidate" action="{{action('PostsController@store')}}">
                <input id="website" name="website" type="text" value="">
                @csrf
                <!-- Leave for security protection, read docs for details  -->
                <div class="step wizard-step mybox" id="end">
                    <div class="summary">
                        <div class="wrapper">
                            {!! Form::hidden('unit',7) !!}
                            {!! Form::hidden('lastid', $last_row->application_id) !!}

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
               <!-- /middle-wizard -->
                {{--  @include('inc.innerforms.buttons')  --}}
                <div id="bottom-wizard">
                     <button onclick="" type="button" name="backward" class="backward" id="bk">Prev</button>
                    {{--  <button onclick="showNext()" type="button" name="forward" class="forward" id="nt">Next</button>    --}}
                    <button type="submit" name="process" class="forward"  id="st" >Submit</button>
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



