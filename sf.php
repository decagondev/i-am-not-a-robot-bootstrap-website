<?php

 // THE BELOW LINE STATES THAT IF THE SUBMIT BUTTON
 // WAS PUSHED, EXECUTE THE PHP CODE BELOW TO SEND THE 
 // MAIL. IF THE BUTTON WAS NOT PRESSED, SKIP TO THE CODE
 // BELOW THE "else" STATEMENT (WHICH SHOWS THE FORM INSTEAD).
if ( isset ( $_POST [ 'buttonPressed' ] )){

 // REPLACE THE LINE BELOW WITH YOUR E-MAIL ADDRESS.
 $to = 'tomtarpeydev@gmail.com' ;
 $subject = 'From PHP contact page' ;

 // NOT SUGGESTED TO CHANGE THESE VALUES
 $message = $_POST [ "message" ] ;
 $headers = 'From: ' . $_POST[ "from" ] . PHP_EOL ;
 mail ( $to, $subject, $message, $headers ) ;

 // THE TEXT IN QUOTES BELOW IS WHAT WILL BE 
 // DISPLAYED TO USERS AFTER SUBMITTING THE FORM.
 echo "Your e-mail has been sent! You should receive a reply within 24 hours! <br> <a href='/'>Click here to go back</a>" ;}

 else{
 ?>
 <form method= "post" action= "<?php echo $_SERVER [ 'PHP_SELF' ] ;?>" class="contact-form"/>
  <div class="form-group">                
                <input name="from" type="text" class="form-control" placeholder="Name">
              </div>
              <div class="form-group">                
                <input name="from" type="email" class="form-control" placeholder="Enter Email">
              </div>              
              <div class="form-group">
                <textarea name="message" class="form-control" type="message"></textarea>
              </div>
              <button  name="buttonPressed" type="submit" data-text="SUBMIT" class="button button-default"><span>SUBMIT</span></button>
   
 </form>
 <?php } ?>
