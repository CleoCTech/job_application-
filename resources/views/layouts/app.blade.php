<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/menu.css') }}" rel="stylesheet">
    </head>


    <body>
        <div id="app">
            @include('inc.navbar')
            <main class="py-4">
                @yield('content')
            </main>
        </div>
        @include('inc.footer')

        <script src="js/app.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        {{-- <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/common_scripts.min.js"></script>
        <script src="js/velocity.min.js"></script>
        <script src="js/common_functions.js"></script>
        <script src="js/file-validator.js"></script> --}}
        <script>
            var visibleDiV =0;
            function showDiv() {
                $(".mybox").hide();
                $(".mybox:eq("+ visibleDiV +")").show();
            }

            function showNext() {
                if (visibleDiV == $(".mybox").length-1) {
                    visibleDiV =0;
                    enablePrevBtn(visibleDiV);
                    chageToSubmit(visibleDiV);
                }else{
                    visibleDiV ++;
                    enablePrevBtn(visibleDiV);
                    chageToSubmit(visibleDiV);
                    //document.getElementById("bk").disabled = false;
                    console.log(visibleDiV);

                }
                showDiv();
            }
            function showPrev() {
                if (visibleDiV == 0) {
                    enablePrevBtn(visibleDiV);
                    chageToSubmit(visibleDiV);
                   // document.getElementById("bk").disabled = true;
                    visibleDiV =$(".mybox").length-1;
                }else{
                    visibleDiV --;

                    console.log(visibleDiV);
                }
                showDiv();
            }

            function enablePrevBtn(counter) {
                if (counter < 1 || counter == 0) {
                    document.getElementById("bk").disabled = true;
                } else {
                    document.getElementById("bk").disabled = false;
                }
            }
            function chageToSubmit(counter) {
                if ( counter == 6) {
                    document.getElementById("nt").disabled = true;
                    document.getElementById("st").disabled = false;
                }
            }
            function addOthers(){
                var x = document.getElementById("myDIV");
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
            }
            function addWorkExperience(){
                var x = document.getElementById("myDIV2");
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
            }
            function addOtherAreas(){
                var x = document.getElementById("myDIV3");
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
            }
            function addReferees(){
                var x = document.getElementById("myDIV4");
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
            }
        </script>
    </body>

</html>
