<?php $pagename="Thank you";?>
<?php include ("includes-php/header.php"); ?>
    <!-- Header -->
  <div class="container">
    <!-- HEADER -->
      <header id="header">

          <div class="logo">
            <a href="index.php"><img src="images/logos/logo.png"alt="Smiley face" height="150"></a>
          </div>

          <a href="#" class="donatebutton">DONATE</a>
        
      </header>
   <!-- Navigation -->
<?php include ("includes-php/nav.php"); ?>
   
    
        <!-- <div class="video"> -->
        
        <div class="sub-menu">
         <ul>
                <li><a href="donate.php">Donate</a></li>
                <li><a href="volunteer.php">Volunteer</a></li>
                <li><a href="registertree.php">Register your tree</a>
          </ul>
        </div>
        <section class="form-info">
                <h1>Thank You!</h1>
                
               <?php 
                  $to="ptlm0441@humbermail.ca";
                  $subject="Message from Contact Form";
                  $message=$_POST["firstname"] . " " . $_POST["lastname"]. "Information \r\n";
                  // $message .=$_POST["comments"] . "\r\n" . "\r\n";
                  $message .=$_POST["email"] . "\r\n";
                  $message .=$_POST["firstname"] . " " . $_POST["lastname"]. "\r\n";
                  $message .=$_POST["address"] . "\r\n";
                  $message .=$_POST["city"] . "\r\n";
                  $message .=$_POST["province"] . " " . $_POST["country"]. "\r\n";
                  $message .=$_POST["postalcode"] . "\r\n";
                  $message .=$_POST["phone"] . "\r\n";
                  $message .=$_POST["Frequency"] . "\r\n";
                  $message .=$_POST["amount-no"] . "\r\n";
                  $message .=$_POST["amount"] . "\r\n";
                  $message .=$_POST["cardholdername"] . "\r\n";
                  $message .=$_POST["card#"] . "\r\n";
                  $message .=$_POST["code"] . "\r\n";
                  $message .=$_POST["cardtype"] . "\r\n";
                  $message .=$_POST["month"] . "\r\n";
                  $message .=$_POST["year"] . "\r\n";
                  $from = $_POST["email"];   
                mail($to,$subject,$from,$message);
                
                ?>
                
                


                <h2>Hi 
                  <h2><h2><?php echo $_POST["myList"]; echo $_POST["firstname"]; ?></h2>
                <h2><?php echo $_POST["lastname"]; ?></h2>



                <h2>Your address is:</h2>
                <h2><?php echo $_POST["email"]; ?></h2>
                <h2><?php echo $_POST["address"]; ?></h2>
                <h2><?php echo $_POST["city"]; ?></h2>
                <h2><?php echo $_POST["country"]; ?></h2>
                <h2><?php echo $_POST["province"]; ?></h2>
                <h2><?php echo $_POST["postalcode"]; ?></h2>
                <h2>Your phone number:</h2>
                <h2><?php echo $_POST["phone"]; ?></h2>
                <h2><?php echo $_POST["Frequency"]; ?></h2> 
                <h2>Your Selected Amount is:</h2>
                <h2><?php echo $_POST["amount-no"]; ?></h2>
                <h2><?php echo $_POST["amount"]; ?></h2>
                <h2>Cardholder name:</h2>
                <h2><?php echo $_POST["cardholdername"]; ?></h2>
                <h2>Cardholder No:</h2>
                <h2><?php echo $_POST["card#"]; ?></h2>
                <h2><?php echo $_POST["code"]; ?></h2>
                <h2>Card type</h2>
                <h2><?php echo $_POST["cardtype"]; ?></h2>
                <h2>Card-expiry-month-year</h2>
                <h2><?php echo $_POST["month"]; ?></h2>
                <h2><?php echo $_POST["year"]; ?></h2>

                

                <h2></h2>
        </section>


         
   
        
    
   

    <!-- footer -->
<?php include ("includes-php/footer.php"); ?>