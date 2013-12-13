<?php $pagename="donate";?>
<?php include ("includes-php/header.php"); ?>
    <!-- Header -->
  <div class="container">
    <!-- HEADER -->
      <header id="header">

          <div class="logo">
            <a href="index.php"><img src="images/logos/logo.png"alt="Smiley face" height="150"></a>
          </div>

          <a href="donate.php" class="donatebutton">DONATE</a>
        
      </header>
   <!-- Navigation -->
     
<?php include ("includes-php/nav.php"); ?>
   <!--   
   
    <!-- about page -->
    <section id="about">
        

        <!-- <div class="video"> -->
        
        <div class="sub-menu">
         <ul>
                <li><a href="donate.php">Donate</a></li>
                <li><a href="volunteer.php">Volunteer</a></li>
                <li><a href="registertree.php">Register your tree</a>
            </ul>
        </div>
        <section class="form">
                <form action="thanks.php" method="post">
             
                  
                    <h2>Contact Info</h2>
                    <div class="formgroup">
                       <label>Title</label>
                       <select id="myList" name="myList">
                         <option value ="Mr">Mr</option>
                         <option value ="Mrs">Mrs</option>
                         <option value ="Ms">Ms</option>
                         <option value ="Dr">Dr</option>
                       </select>
                    </div>              
                        
                 

                  <div class="formgroup">
                    <label>First Name</label>
                    <input type="text"  name="firstname" required />
                  </div>


                  <div class="formgroup">
                    <label>Last Name</label>
                    <input type="text" name="lastname" required />
                  </div>

                  <div class="formgroup">
                    <label>Email Address</label>
                    <input type="text" name="email" required />
                  </div>

                  <div class="formgroup">
                    <label>Address</label>
                    <input type="text" name="address" required />
                  </div>

                  <div class="formgroup">
                    <label>City</label>
                    <input type="text" class="005" name="city" required />
                      
                  </div>

                   <div class="formgroup">
                    <label>Country</label>
                 
                    <select id = "myList" name="country">
                         <option value = "Canada">Canada</option>
                         <option value = "Usa">Usa</option>
                         <option value = "Dubai">Dubai</option>
                         <option value = "London">London</option>
                         <option value = "India">India</option>
                         <option value = "Argentina">Argentina</option>
                         <option value = "Armenia">Armenia</option>
                         <option value = "Brazil">Brazil</option>
                         <option value = "Australia">Australia</option>
                         <option value = "Austria">Austria</option>
                         Algeria

                    </select>

                  </div>

                  <div class="formgroup">
                    <label>Province</label>
                    <input type="text" class="006" name="province" required />
                  </div>

                 

                  <div class="formgroup">
                    <label>Postal Code</label>
                    <input type="text" class="008" name="postalcode" required />
                  </div>

                  <div class="formgroup">
                    <label>Phone Number</label>
                    <input type="text" class="009" name="phone" required />
                  </div>

                  <h2>Donation Info</h2>
                    <p>Please select a donation amount and frequency.  Please consider our recurring giving options by selecting the Monthly or Quarterly frequency above. This is an easy way to give manageable amounts that help sustain the impact of Not Far From The Tree's programs over the long-term. And if at any time you want to stop, increase or decrease the amount, just contact us.</p>
                 

                   <div class="formgroup">
                    
                    <label>Frequency</label>

                  
                    <select id = "myList" name="Frequency">
                         <option value = "One time">One time</option>
                         <option value = "Monthly">Monthly</option>
                         <option value = "Yearly">Yearly</option>
                         <option value = "London">London</option>
                       </select>
                  </div>
                  <div class="formgroup-radio" name="amount-no" >
                       <input type="radio" name="amount-no" value="$50.00" class="radio" checked="checked">$50.00</input>
                       <input type="radio" name="amount-no" value="$100.00" class="radio">
                       $100.00</input>
                       <input type="radio" name="amount-no" value="$250.00" class="radio">$250.00</input>
                       <input type="radio" name="amount-no" value="$500.00" class="radio">$500.00</input>
                  </div>

                   <div class="formgroup">
                    <label>Amount</label>
                    <input type="text" placeholder=" $" name="amount" />
                  </div>

                  
                  <h2>Credit Card Information</h2>
                    <div class="formgroup">
                    <label>Cardholder Name</label>
                    <input type="text" class="006" name="cardholdername" required />
                  </div>

                 

                  <div class="formgroup">
                    <label>Credit Card #</label>
                    <input type="text" class="008" name="card#" required />
                  </div>

                  <div class="formgroup">
                    <label>Security Code(CVV2)</label>
                    <input type="text" class="009" name="code" required />
                  </div>

                  <div class="formgroup">
                    
                    <label>Card Type</label>

                 
                  <select id = "myList" name="cardtype">
                         <option value = "Visa">Visa</option>
                         <option value = "Debit">Debit</option>
                         <option value = "Master Card">Master Card</option>
                         <option value = "Amex">Amex</option>
                       </select>
                  </div>

                  <div class="formgroup">
                    
                    <label>Expiry</label>

                   
                  <select id = "myList" name="month">
                         <option value = "01">01</option>
                         <option value = "02">02</option>
                         <option value = "03">03</option>
                         <option value = "04">04</option>
                         <option value = "05">05</option>
                         <option value = "06">06</option>
                         <option value = "07">07</option>
                         <option value = "08">08</option>
                         <option value = "09">09</option>
                         <option value = "10">10</option>
                         <option value = "11">11</option>
                         <option value = "12">12</option>

                  </select>
                  <select id = "myList" name="year">
                         <option value = "2013">2013</option>
                         <option value = "2012">2012</option>
                         <option value = "2011">2011</option>
                         <option value = "2010">2010</option>
                         <option value = "2009">2009</option>
                         <option value = "2008">2008</option>
                         <option value = "2007">2007</option>
                         

                  </select>
                  

                  </div>


                  <div class="formgroup">
                    <input type="submit" class="btn">
                  </div>



                </form>
      </section>
         <!-- footer -->
<?php include ("includes-php/footer.php"); ?>