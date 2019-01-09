<?php 
//includes session start, connection to database and options available for all users
include ('header_public.php');
?>

    <!-- Page Content -->
    <div class="container">

     
      <!-- Contact Form -->
      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      <div class="row">
        <div class="col-lg-8 mb-4">
          <h1>Send us a Message</h1>
          <form name="sentMessage" id="contactForm" novalidate>
            <div class="control-group form-group">
              <div class="controls">
                <label>Full Name:</label>
                <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Phone Number:</label>
                <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Email Address:</label>
                <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Message:</label>
                <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
              </div>
            </div>
            <div id="success"></div>
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-primary" id="sendMessageButton">Send Message</button>
          </form>
        </div>
           <!-- Contact Details Column -->
        <div class="col-lg-4 mb-4">
          <h3>Contact Details</h3>
          <p> South Circular Road
            <br>Dublin
            <br>
          </p>
          <p>Phone: (123) 456-7890
          </p>
          <p>
            Email<a href="mailto:fitgym@gmail.com">fitgym@gmail.com</a>
          </p>
          <p>
           Opening Hours: Monday - Sunday: 9:00 AM to 20:00 PM
          </p>
        </div>
      </div>
      <!-- /.row -->
      <!-- Content Row -->
      <div class="row">
        <!-- Map Column -->
        <div class="col-lg-8 mb-4">
          <!-- Embedded Google Map -->
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2382.6842845274764!2d-6.281102684371652!3d53.33100597997581!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48670c1833b915c7%3A0x4f83acae16f5062e!2sGriffith+College!5e0!3m2!1spl!2sie!4v1523661863715" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
       
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <?php 
  include ('footer.php');
 ?>
