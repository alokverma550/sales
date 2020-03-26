  <!-- Page Content -->
  <div class="container">

    <h1 class="my-4">Know your sale forecasting.</h1>

    <!-- Marketing Icons Section -->
    <div class="row">
      <div class="col-lg-12 mb-4">
    <?php
        $error_msg = $this->session->flashdata('error_msg');
        $success_msg = $this->session->flashdata('success_msg');
        if( !empty($error_msg) ) {
    ?>
        <div class="alert alert-warning" role="alert">
            <?php echo $error_msg; ?>
        </div>
    <?php }
        if( !empty($success_msg) ) {
    ?>
        <div class="alert alert-success" role="alert">
            <?php echo $success_msg; ?>
        </div>
    <?php
        }
    ?>
        <div class="card h-100">
          <h4 class="card-header">Upload Your Sales Details</h4>
          <div class="card-body">

          <form action="<?php echo base_url().'Welcome/uploadSale' ?>" method="POST">
            <div class="control-group form-group">
              <div class="controls">
                <label>Excel File:</label>
                <input type="file" class="form-control" id="file" required data-validation-required-message="Please Select file.">
                <p class="help-block"></p>
              </div>
            </div>
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-primary">Upload</button>
        </form>

          </div>
          <!-- <div class="card-footer">
            <a href="#" class="btn btn-primary">Learn More</a>
          </div> -->
        </div>
      </div>

    </div>
    <!-- /.row -->

    <!-- Features Section -->
    <div class="row">
      <div class="col-lg-6">
        <h2>Features of Sales Forecasting</h2>
        <p style="text-align: justify;">&nbsp; &nbsp; &nbsp; &nbsp; There are various methods of forecasting demand of product in market. Of them, some are very costly and a few are cheap. Some forecasting methods are flexible and some require skill and sophistication. Therefore, there is a problem of choosing the best method for a particular demand situation.</p>
        <p>What are the criteria of a good forecasting method?</p>
        <ul>
          <li>Simplicity</li>
          <li>Plausibility</li>
          <li>Economy</li>
          <li>Availability</li>
        </ul>
      </div>
      <div class="col-lg-6">
        <img class="img-fluid rounded" src="<?php echo base_url().'asset/image/sales_feature.jpg' ?>" alt="">
      </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Call to Action Section -->
    <div class="row mb-4">
      <div class="col-md-8">
        <h2>Need Help?</h2>
      </div>
      <div class="col-md-4">
        <a class="btn btn-lg btn-secondary btn-block" href="#">Contact Our Support</a>
      </div>
    </div>

  </div>
  <!-- /.container -->