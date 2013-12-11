        
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
    <!-- Header -->
  <div class="container">
    <!-- HEADER -->
      <header id="header">

          <div class="logo">
            <a href="index.html"><img src="images/logos/logo.png"alt="Smiley face" height="150"></a>
          </div>

          <a href="#" class="donatebutton">DONATE</a>
        
      </header>
   <!-- Navigation -->
       <nav><ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="about.html">about us</a>
                    <ul>
                      <li><a href="about.html">Who we are</a></li>
                      <li><a href="whatwedo.html">What we do</a></li>
                      <li><a href="history.html">History</a></li>
                      <li><a href="#">Awards</a></li>
                      <li><a href="#">Annual Reports</a></li>
                   </ul>
                </li>
                <li><a href="getinvolved.html">Get involved</a></li>
                <li><a href="donate.html">Contact us</a></li>
              </ul>
          </nav>
   <!-- 
   
    
        <!-- <div class="video"> -->
        
        <div class="sub-menu">
         <ul>
                <li><a href="donate.html">Donate</a></li>
                <li><a href="volunteer.html">Volunteer</a></li>
                <li><a href="registertree.html">Register your tree</a>
          </ul>
        </div>
        <section class="form-info">
                <h1>Thank You!</h1>
                
               <?php 
                  $to="ptlm0441@humbermail.ca";
                  $subject="Message from Contact Form";
                  $message=$_POST["firstname"] . " " . $_POST["lastname"]. "sent a comment \r\n";
                  // $message .=$_POST["comments"] . "\r\n" . "\r\n";
                  $message .=$_POST["email"] . "\r\n";
                  $message .=$_POST["firstname"] . " " . $_POST["lastname"]. "\r\n";
                  $message .=$_POST["address"] . "\r\n";
                  $message .=$_POST["city"] . "\r\n";
                  $message .=$_POST["province"] . " " . $_POST["country"]. "\r\n";
                  $message .=$_POST["postalcode"] . "\r\n";
                  $message .=$_POST["phone"] . "\r\n";
                 $from = $_POST["email"];   
                mail($to,$subject,$from,$message);
                
                ?>
                
                <h2><?php echo $_POST["myList"]; ?></h2>



                <h2>Hi <?php echo $_POST["firstname"]; ?></h2>
                <h2><?php echo $_POST["lastname"]; ?></h2>



                <h2>Your address is:</h2>
                <h2><?php echo $_POST["email"]; ?></h2>
                <h2><?php echo $_POST["address"]; ?></h2>
                <h2><?php echo $_POST["city"]; ?></h2>
                <h2><?php echo $_POST["country"]; ?></h2>
                <h2><?php echo $_POST["postalcode"]; ?></h2>
                <h2>Your phone number:</h2>
                <h2><?php echo $_POST["phone"]; ?></h2>

                

                <h2></h2>
        </section>


         
   
        
    
   

    <!-- footer -->
      <footer>
        <div class="block">
           <ul>
              <li><a href="#"><h2>Facebook</h2></a></li>
              <li><a href="#"><h2>Twitter</h2></a></li>
              <li><a href="#"><h2>Pinterest</h2></a></li>
              <li><a href="#"><h2>Google+</h2></a></li>
          </ul>
        </div>

        <div class="block">
             <ul>
                <li><a href="#"><h2>Home</h2></a></li>
                <li><a href="#"><h2>Who we are</h2></a></li>
                <li><a href="#"><h2>What we do</h2></a></li>
                <li><a href="#"><h2>History</h2></a></li>
                <li><a href="#"><h2>Awards</h2></a></li>
                <li><a href="#"><h2>Annual Report</h2></a></li>
            </ul>
        </div>

        <div class="block">
             <ul>
                <li><a href="#"><h2>Events</h2></a></li>
                <li><a href="#"><h2>City cider</h2></a></li>
            </ul>  
        </div>

        <div class="block">
             <ul>
                <li><a href="#"><h2>Donate</h2></a></li>
                <li><a href="#"><h2>Request fruit donation</h2></a></li>
                <li><a href="#"><h2>Get involved</h2></a></li>
                <li><a href="#"><h2>Volunteer</h2></a></li>
                
            </ul>  
        </div>

        <div class="block">
             <ul>
                <li><a href="#"><h2>Contact</h2></a></li>
                <li><a href="#"><h2>Sign up for newsletter</h2></a></li>
            </ul>  
        </div>
      </footer>
   </div>

</body>
</html>