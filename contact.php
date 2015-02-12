<?php
if (($_SERVER['REQUEST_METHOD'] == 'POST') && (!empty($_POST['action']))):

	if (isset($_POST['fname'])) {$fname = filter_var($_POST['fname'], FILTER_SANITIZE_STRING );}
	if (isset($_POST['email'])) $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING );
	if (isset($_POST['message'])) $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING );
	
	if ($fname == ''):
		$errName = '<label class="error">This field is required</label>';
	endif;
	
	if ($email == ''):
		$errEmail = '<label class="error">This field is required</label>';
	endif;
	
	if ($message == ''):
		$errMessage = '<label class="error">This field is required</label>';
	endif;
	
	if ( !(preg_match('/^[a-z0-9_\+-]+(\.[a-z0-9_\+-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*\.([a-z]{2,4})$/', $email))) :
		$errPregmatch = '<label class="error">Please input a correct email.</label>';
	endif;			

endif;

include("_includes/header.php"); ?> 

  <div id="otherContent">
  	<div class="holder">

		<div class="twoCol">
        	<h3>There is no such thing as a dumb question. Drop us a line or give us a call.</h3>
            
            <iframe width="580" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps/ms?msa=0&amp;msid=205270552970553628214.0004ea6762866fb3315ed&amp;ie=UTF8&amp;ll=18.008641,-76.749158&amp;spn=0,0&amp;t=m&amp;iwloc=0004ea67661c53b1c9675&amp;output=embed"></iframe>
            
            <p>Thank you for using Progressive Microfinance for your loan needs. At PMG, you can quickly and easily get the financial help you need to pay your bills and other expenses. Our ultimate goal is to provide our customers with a safe and trusted place to get loans online.</p>
            
           	<ul class="info">
            
                <div itemscope itemtype="http://schema.org/Organization"> 
                	<span itemprop="name">Progressive Micro-Finance Group Ltd. is located at:</span>
                    <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                        <li><span itemprop="streetAddress">Mona Technology Park</span></li>
                        <li>University of the West Indies</li>
                        <li><span itemprop="addressLocality">Mona, Kingston 7</span></li>
                        <li><span itemprop="addressRegion">Kingston, Jamaica</span></li>
                 </div>
                 
                	<li><span itemprop="telephone"><a href="tel:18768187645">(876) 818-7645</a></span></li>
                    <li><span itemprop="telephone"><a href="tel:18766192965">(876) 619-2965</a></span></li>
                    <li>email: <a href="mailto:customerservice@pmgjamaica.com" target="_blank">customerservice@pmgjamaica.com</a></li>                
                </div>    
            </ul>		   
            
            <p>If you'd like to reach us with questions, or to request more information, please see the contact information above. We do our best to provide our valued customers with only the highest-quality loan products, and welcome any comments or suggestions to improve our services or website.</p>
            
            <hr/>
            
            <form id="complaint" method="POST" action="send_form_email.php">
                	<p>Have a complaint or want to leave us a message, just fill out the form below</p>
                    <div class="formHolder">
                        <label>Name:</label>
                        <input type="text" name="fname" id="fname" required value="<?php if (isset($fname)) {echo $fname; } ?>"/>
                        <?php if (isset($errName)) {echo $errName;} ?>
                    </div><!--end of .formHolder-->
                    
                    <div class="clearfix"></div>
                    
                    <div class="formHolder">
                        <label>Email:</label>
                        <input type="email" name="email" id="email" required value="<?php if (isset($email)) {echo $email; } ?>"  />
                        <?php if (isset($errEmail)) {echo $errEmail;} ?>
                        <?php if (isset($errPregmatch)) {echo $errPregmatch;} ?>
                    </div><!--end of .formHolder-->
    
    				<div class="clearfix"></div>
                    
    				<div class="formHolder">
                        <label>Message:</label>
                        <textarea required name="message" id="message" value="<?php if (isset($message)) {echo $message; } ?>" ></textarea>
                    </div><!--end of .formHolder-->
                    
                    <div class="clearfix"></div>
                    
                    <div class="formHolder">
                    	<input type="submit" value="Contact Us"/>
                    </div><!--end of .formHolder-->
                  
                </form>       

        </div><!--end of .twoCol-->
        
            <!--<div class="sidebar">
            
                <div class="side">
                    <h3>Apply for a loan Below</h3>
                    
					<form id="cForm">
                        <label for="fName"><img src="_images/email-icon.png" alt="Email Icon"/></label>
                        <input type="text" name="fName" id="fName" placeholder="Please enter your name"/>
                        
                        <label for="email"><img src="_images/name-icon.png" alt="Name Icon"/></label>
                        <input type="email" name="email" id="email" placeholder="Please enter your email"/>
                        <a href="loan-application.php">Get Started Now</a>
            			<!--<input type="submit" value="Get Started Now!" />--                   
                    </form>
                </div><!--end of .side--
                
                <div class="side phone">
                    <h3>Need More Help? Call Us</h3>
                    <ul>
                        <li><a href="tel:18768187645">(876) 818-7645</a></li>
                        <li><a href="tel:18766192965">(876) 619-2965</a></li>
                        <li><a href="tel:18766316203">(876) 631-6203</a></li>
                    </ul>
                </div><!--end of .side--
            
            </div><!--end of .sidebar-->
            <div class="clearfix"></div>        
    </div><!--end of . holder-->
  </div><!--end of #mainContent-->
  
  <div id="bottomBanner">
  	<div class="holder">
        <p>call for more information</p>
        <b><a href="#">876-619-2965</a> / <a href="#">876-818-7645</a></b>
        <p>MON-FRI 09:00am to 05:00pm</p>
    </div><!--end of .holder-->
  </div><!--end of #bottomBanner-->
      <script>$(document).ready (function(){$("#complaint").validate();});</script> 

  <?php include("_includes/footer.php"); ?> 


    
