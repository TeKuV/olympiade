<!DOCTYPE html>
    <html lang="fr">

        <head>

            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <link href="css/bootstrap.min.css" rel="stylesheet">
            <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
            
            @yield('head')

            <link href="css/animate.css" rel="stylesheet">
            <link href="css/style.css" rel="stylesheet">

        </head>

        <body class="fixed-navigation">
            <div id="wrapper">
                @include('main.navbar')

                @yield('content')

                @include('main.rightsidebar')
            
            </div>

            <!-- Mainly scripts -->
            <script src="js/jquery-2.1.1.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
            <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

            <!-- Custom and plugin javascript -->
            <script src="js/inspinia.js"></script>
            <script src="js/plugins/pace/pace.min.js"></script>
            
            @yield('bottom')
            
        </body>
    </html>
