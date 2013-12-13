<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Not Far From The Tree</title>
    <link rel="shortcut icon" href="images/favicon01.png"> 
    <link rel="apple-itouch-icon" href="images/favicon01.png">
      <!-- Stylesheets -->
    <link rel="stylesheet" href="styles/reset.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="styles/main.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="styles/print.css" type="text/css" media="print" />
    <link href='http://fonts.googleapis.com/css?family=Actor' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Arimo' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:700|Alegreya:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Asap' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="styles/bjqs.css">
    <!-- some pretty fonts for this demo page - not required for the slider -->
      <link href='http://fonts.googleapis.com/css?family=Source+Code+Pro|Open+Sans:300' rel='stylesheet' type='text/css'> 
    <!-- load jQuery and the plugin -->
      <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
      <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.js"></script>
      <script src="js/bjqs-1.3.min.js"></script>
      <meta name="viewport" content="initial-scale=1">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <![endif]-->
      <script class="secret-source">
              jQuery(document).ready(function($) {

                $('#banner-fade').bjqs({
                  animtype      : 'slide',
                  height      : 618,
                  width       : 1170,
                  responsive  : true
                });

              });

              $(document).ready(function() {
              $(".menubutton").click(function(){
                // function
                $("nav").slideToggle();
              });
              
            });
      </script>
</head>
<body>