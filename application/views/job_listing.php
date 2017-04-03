<?php include('header.php');?>
<body class="job-list">
   <div>
      <div class="col-md-6">
<!--          <img src="<?php echo base_url();?>assets/logo.png" class="logo"> -->
      </div>
      <div class="col-md-6">
         <a href="newJob">
         <button class="btn btn-lg btn-primary" id="job">
         POST JOBS
         </button>
         </a>
      </div>
   </div>
   <div class=" container list">
      <?php foreach($data as $data) { ?> 
      <div class="col-md-12 list-job">
         <div class="col-md-6">
            <p class="job-heading"><?php echo $data->job_headline; ?></p>
            <p class="company-name"><?php echo $data->company_name; ?></p>
         </div>
         <div class="col-md-2 location"><?php echo $data->job_location; ?></div>
         <div class="col-md-2 job_type">
            <p><?php echo $data->job_type; ?></p>
         </div>
         <div class="col-md-2 view">
            <button type="button" class="btn btn-primary"><a href="<?php echo site_url('Welcome/view/'.$data->id); ?>" class="job_view">VIEW</a></button>
         </div>
      </div>
      <?php } ?>
   </div>
</body>
</html>
