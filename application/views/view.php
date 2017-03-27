<?php include('header.php');?>
<body style="background-color: #616161">
   <div>
      <img src="<?php echo base_url();?>assets/logo.png" class="logo">
   </div>
   <section class="container job_view_section">
      <div class="row">
         <!-- <?php print_r($data); ?> -->
         <div class="col-md-12 job_headline"><?php echo $data[0]['job_headline']; ?>
            <span class="posted_date">Posted on <?php $date = strtotime($data[0]['posted_date']);
               $new_date = date("d/M/Y ", $date); echo $new_date;
               
                ?></span>
         </div>
         <div class="col-md-12 details">
            <?php echo $data[0]['company_name']; ?>
            &nbsp;&nbsp;
            <?php echo $data[0]['company_website']; ?>
            &nbsp;&nbsp;
            <?php echo $data[0]['job_location']; ?> 
            &nbsp;&nbsp;
            <?php echo $data[0]['job_type']; ?>
            &nbsp;&nbsp;
         </div>
         <div class="col-md-12 job_description">
            <?php echo $data[0]['job_how_to_apply']; ?>
         </div>
         <div class="col-md-12 how_to_apply">
            <?php echo $data[0]['job_description']; ?>
         </div>
      </div>
   </section>
</body>