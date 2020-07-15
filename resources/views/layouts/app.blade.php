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
            // $(document).ready(function() {
            //     $("#gradeFormControlSelect1").change(function() {
            //        // alert("Hclhahjd");
            //         highschool_grade = $(this).children("option:selected").val();
            //         //alert("You have selected the country - " + selectedCountry);
            //     });
            // });
            // $(document).ready(function() {
            //     if (document.getElementById('r1').checked) {
            //        var gender = document.getElementById('r1').value;

            //     } else if (document.getElementById('r2').checked) {
            //       var  gender = document.getElementById('r2').value;
            //     }
            // });
            // //var college_grade ;
            // $(document).ready(function() {
            //     $("#college_gFormControlSelect1").change(function() {
            //         //alert("clhahjd");
            //         college_grade = $(this).children("option:selected").val();
            //         //alert("You have selected the country - " + selectedCountry);
            //     });
            // });

            // $(document).ready(function() {
            //     $("#gradeFormControlSelect2").change(function() {
            //         highschool_grade1 = $(this).children("option:selected").val();
            //         //alert("You have selected the country - " + selectedCountry);
            //     });
            // });
            // //var college_grade ;
            // $(document).ready(function() {
            //     $("#college_gFormControlSelect2").change(function() {
            //         college_grade = $(this).children("option:selected").val();
            //         //alert("You have selected the country - " + selectedCountry);
            //     });
            // });
        </script>
    </body>

</html>
