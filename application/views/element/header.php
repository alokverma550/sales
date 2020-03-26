  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="<?php echo base_url(); ?>">Sales Forecasting - NIET Project</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('https://images.pexels.com/photos/3862610/pexels-photo-3862610.jpeg?crop=entropy&cs=srgb&dl=engineer-testing-sound-system-3862610.jpg&fit=crop&fm=jpg&h=1280&w=1920')">
          <div class="carousel-caption d-md-block">
            <h3>Forecasting Based on Historical Sales Data</h3>
            <p>Let’s say that last month, you had $150,000 of monthly recurring revenue and that for the last 12 months, sales revenue has grown 12% each month. Over the same period, your monthly churn has been about 1% each month.</p>
          </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('https://images.pexels.com/photos/3861947/pexels-photo-3861947.jpeg?crop=entropy&cs=srgb&dl=engineers-in-sound-studio-3861947.jpg&fit=crop&fm=jpg&h=1280&w=1920')">
          <div class="carousel-caption d-md-block">
            <h3>Forecasting Based on Your Current Funnel</h3>
            <p>One where you’ve just had a quick phone call, with an expected value of $1,000.</p>
          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('https://images.pexels.com/photos/3811082/pexels-photo-3811082.jpeg?crop=entropy&cs=srgb&dl=photo-of-women-at-the-meeting-3811082.jpg&fit=crop&fm=jpg&h=1371&w=1920')">
          <div class="carousel-caption d-md-block">
            <h3>Forecasting Based on Lead Scores and Multiple Variables</h3>
            <p>You also know that companies with less than 50 employees close at a slightly lower rate, and companies larger than 50 employees are more likely to close.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>