<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="icon" href="../run_logo.png" type="image/x-icon"> <!-- Favicon-->
    <!-- plugin css file  -->
    <link rel="stylesheet" href="assets/plugin/datatables/responsive.dataTables.min.css">
    <link rel="stylesheet" href="assets/plugin/datatables/dataTables.bootstrap5.min.css">
    <!-- project css file  -->
    <link rel="stylesheet" href="assets/css/my-task.style.min.css">

    <!-- Jquery Core Js -->
    <script src="assets/bundles/libscripts.bundle.js"></script>
</head>
<body>
    @yield('content')

    <script>
        var selector = '.menu-list li';
        var url = window.location.href;
        var target = url.split('/');
        $(selector).each(function(){
            if($(this).find('a').attr('href')===(target[target.length-1])){                             
                $(selector).removeClass('active');
                $(this).find('a').removeClass('active').addClass('active');
                //$('.collapse').removeClass('show').addClass('show');
            }
        });
    </script>
</body>
</html> 