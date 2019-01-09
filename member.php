<?php 
//includes session start, connection to database and options available for all users
include ('header_private.php');
?>

    <header>
      <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselIndicators" data-slide-to="1"></li>
          <li data-target="#carouselIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One -->
          <div class="carousel-item active" style="background-image: url('images/img1.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>First Slide</h3>
              <p>This is a description for the first slide.</p>
            </div>
          </div>
          <!-- Slide Two -->
          <div class="carousel-item" style="background-image: url('images/img2.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Second Slide</h3>
              <p>This is a description for the second slide.</p>
            </div>
          </div>
          <!-- Slide Three -->
          <div class="carousel-item" style="background-image: url('images/img3.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Third Slide</h3>
              <p>This is a description for the third slide.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>

    <!-- Page Content -->
    <div class="container">
      <!-- Intro Section -->
      <div class="row margin_tb">
        <div class="col-lg-6">
          <h1>Welcome to FitGym</h1>
          <p>Health is a wealth is a true old saying. Being healthy and fit gives us energy to do anything in life. Physical fitness is very necessary for a healthy livening. Here main purpose of this project is to automate a fitness centre and facilitate its operations, making it easily accessible for clients, staff and keeping records in secure database.</p>
        </div>
        <div class="col-lg-6">
          <img class="img-fluid rounded" src="images/tread.jpg" alt="fitness">
        </div>
      </div>
      <!-- /.row -->
       <!-- Call to Action Section -->
      <div class="row">
        <div class="col-md-6">
          <a class="btn btn-lg btn-success btn-block" href="membership.php">Sign Up now!</a>
        </div>
        <div class="col-md-6">
          <p><strong>Health is a wealth is a true old saying. Being healthy and fit gives us energy to do anything in life.</strong></p>
        </div>
      </div>
         <br/>
         <hr>

      <!-- Features Section -->
      <h2>Upcoming Events</h2>

      <div class="row">
  
 
</div>

      <div class="row features">
          <div class="offset-md-1">
          </div>  
        <div class="col-lg-4">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="images/tread.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">Event 1</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
              <a href="#">Read more...</a>
            </div>
          </div>
        </div>
        <div class=" offset-md-2">
          </div>
        <div class="col-lg-4">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="images/tread.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">Event 2</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque earum nostrum suscipit ducimus nihil provident, perferendis rem illo.</p>
                <a href="#">Read more...</a>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row --> 
    </div>
    <!-- /.container -->

    <!-- Footer -->
    <?php
  include ('footer.php');
    ?>
