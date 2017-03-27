<?php include('header.php');?>
<body style="background-color: #616161">
   <div>
      <div class="col-md-6">
         <img src="<?php echo base_url();?>assets/logo.png" class="logo">
      </div>
      <div class="col-md-6">
         <a href="getData">
         <button class="btn btn-lg btn-primary" id="job">
         VIEW JOBS
         </button>
         </a>
      </div>
   </div>
   <!-- 
      <div>
          <a href="<?php echo base_url();?>application/views/job_listing.php">
              <button class="btn btn-lg btn-primary">
                  VIEW JOBS
              </button>
          </a>
      </div> -->
   <div class="container" id="main-content">
   <div id="header-campaign"></div>
   <div class="row job_page">
      <div class="col-md-10 col-md-offset-1 col-xs-12 col-sm-12">
         <div class="sheet">
            <div class="section first">
               <div class="page-header">
                  <h1 class="post-heading">Post a job</h1>
               </div>
            </div>
            <form action="insertData" method="post" enctype="multipart/form-data" name="myForm">
               <div class="section">
                  <h2>First, tell us about the position</h2>
                  <div class="form-group control-group">
                     <label class="col-xs-12 col-sm-3 col-md-2 control-label">Headline<span class="help-required" title="Required">*</span></label>
                     <div class="col-xs-12 col-sm-9 col-md-10 controls space-in-form">
                        <input autofocus class="form-control" id="job_headline" maxlength="100" minlength="1" name="job_headline" type="text" value="">
                        <p class="help-block">A single-line summary. This goes to the front page and across the network.</p>
                        <span id="headline_err" class="err"></span>
                     </div>
                  </div>
                  <div class="form-group space-in-form">
                     <label class="col-xs-12 col-sm-3 col-md-2 control-label">Headline B</label>
                     <div class="col-xs-12 col-sm-9 col-md-10  space-in-form">
                        <input class="form-control" maxlength="100" minlength="1" name="job_headline_b" type="text" value="">
                        <p class="help-block">An alternate headline that will be shown to 50% of users. You’ll get a count of views per headline</p>
                     </div>
                  </div>
                  <div class="form-group control-group">
                     <label class="col-xs-12 col-sm-3 col-md-2 control-label">Company Name<span class="help-required" title="Required">*</span></label>
                     <div class="col-xs-12 col-sm-9 col-md-10 controls space-in-form">
                        <input autofocus class="form-control " maxlength="100" minlength="1" name="company_name" type="text" value=""><span id="company_name_err" class="err"></span>
                     </div>
                  </div>
                  <div class="form-group control-group">
                     <label class="col-xs-12 col-sm-3 col-md-2 control-label">Website<span class="help-required" title="Required">*</span></label>
                     <div class="col-xs-12 col-sm-9 col-md-10 controls space-in-form">
                        <input autofocus class="form-control " maxlength="100" minlength="1" name="company_website" id="company_website" type="text" value=""><span id="url_err" class="err"></span>
                     </div>
                  </div>
                  <div class="form-group control-group">
                     <label class="col-xs-12 col-sm-3 col-md-2 control-label">Email<span class="help-required" title="Required">*</span></label>
                     <div class="col-xs-12 col-sm-9 col-md-10 controls space-in-form">
                        <input autofocus class="form-control " maxlength="100" minlength="1" id="company_mail" name="company_mail" type="text" value=""><span id="email_err" class="err"></span>
                     </div>
                  </div>
                  <div class="form-group control-group space-in-form" >
                     <label class="col-xs-12 col-sm-3 col-md-2 control-label">Type<span class="help-required" title="Required">*</span></label>
                     <div class="col-xs-12 col-sm-9 col-md-10 space-in-form">
                        <ul class="field-job_type " id="job_type">
                           <li><input name="job_type" type="radio" value="Full-time Employment"> <label>Full-time employment</label></li>
                           <li><input name="job_type" type="radio" value="Short-term Contract"> <label>Short-term contract</label></li>
                           <li><input name="job_type" type="radio" value="Internship"> <label>Internship</label></li>
                           <li><input name="job_type" type="radio" value="Freelance Consulting"> <label>Freelance or consulting</label></li>
                           <li><input name="job_type" type="radio" value="Volunteer Contributor"> <label>Volunteer contributor</label></li>
                           <li><input name="job_type" type="radio" value="Partner for a venture"> <label>Partner for a venture</label></li>
                           <span id="job_type_err" class="err"></span>
                        </ul>
                     </div>
                  </div>
                  <div class="form-group space-in-form">
                     <label class="col-xs-12 col-sm-3 col-md-2 control-label">Category<span class="help-required" title="Required">*</span></label>
                     <div class="col-xs-12 col-sm-9 col-md-10  space-in-form">
                        <ul>
                           <li><input name="job_category" type="radio" value="Interaction Design"> <label>Interaction Design</label></li>
                           <li><input name="job_category" type="radio" value="Software Developer"> <label>Software Developer</label></li>
                           <li><input name="job_category" type="radio" value="Graphic Design"> <label>Graphic Design</label></li>
                           <li><input name="job_category" type="radio" value="Electronics"> <label>Electronics</label></li>
                           <li><input name="job_category" type="radio" value="Testing"> <label>Testing</label></li>
                           <li><input name="job_category" type="radio" value="Systems Administration"> <label>Systems Administration</label></li>
                           <li><input name="job_category" type="radio" value="Business Management"> <label>Business/Management</label></li>
                           <li><input name="job_category" type="radio" value="Writer Editor"> <label>Writer/Editor</label></li>
                           <li><input name="job_category" type="radio" value="Customer Support"> <label>Customer Support</label></li>
                           <li><input name="job_category" type="radio" value="Mobile"> <label>Mobile (iPhone, Android, other)</label></li>
                           <li><input name="job_category" type="radio" value="Office Administration"> <label>Office Administration</label></li>
                           <span id="job_category_err" class="err"></span>
                        </ul>
                     </div>
                  </div>
                  <div class="form-group control-group space-in-form">
                     <label class="col-xs-12 col-sm-3 col-md-2">Location<span class="help-required" title="Required">*</span></label>
                     <div class="col-xs-12 col-sm-9 col-md-10 form-group  space-in-form">
                        <input class="form-control field-job_location " maxlength="80" minlength="3" name="job_location" type="text" value="">
                        <p class="help-block">
                           “Bangalore”, “Chennai”, “Pune”, etc or “Anywhere”
                        </p>
                        <span id="location_err" class="err"></span>
                     </div>
                  </div>
                  <div class="form-group control-group space-in-form">
                     <label class=" col-xs-12 col-sm-3 col-md-2 control-label">Description<span class="help-required" title="Required">*</span></label>
                     <div class="col-xs-12 col-sm-9 col-md-10 form-group  space-in-form">
                        <textarea class="form-control form-group description" name="job_description"></textarea>
                        <span id="description_err" class="err"></span>
                     </div>
                  </div>
                  <div class="form-group control-group space-in-form">
                     <label class=" col-xs-12 control-label">What should a candidate submit when applying for this job?<span class="help-required" title="Required">*</span></label>
                     <div class=" col-xs-12 controls  space-in-form">
                        <textarea class="form-control" name="job_how_to_apply"  ng-model="how_to_apply"></textarea>
                        <p class="help-block">Example: “Include your LinkedIn and GitHub profiles.” We now require candidates to apply through the job board only. Do not include any contact information here. Candidates CANNOT attach resumes or other documents, so do not ask for that</p>
                        <span id="apply_err" class="err"></span>
                     </div>
                  </div>
                  <div>
                     <input type="submit" class="btn btn-lg btn-primary btn-post" onClick="return validate()" name="post">
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
   <script type="text/javascript">
      function validate(){
       // var headline1 = document.getElementById('job_headline').value;
       // alert(headline1);
       // return true;
        if( document.myForm.job_headline.value == "" )
        {
           // alert( "Please provide Job Headline!" );
           document.getElementById('headline_err').innerHTML = "Provide Job Headline";
           document.myForm.job_headline.focus() ;
           return false;
        }else{
           document.getElementById('headline_err').innerHTML = "";
        }
      
      
          if( document.myForm.company_name.value == "" )
        {
           // alert( "Please provide Company Name!" ); company_name_err
           document.getElementById('company_name_err').innerHTML = "Please Enter a Company Name";
           document.myForm.company_name.focus() ;
           return false;
        }else{
           document.getElementById('company_name_err').innerHTML ="";
      
        }
      
        var re = /[-a-zA-Z0-9@:%_\+.~#?&//=]{2,256}\.[a-z]{2,4}\b(\/[-a-zA-Z0-9@:%_\+.~#?&//=]*)?/gi;
        var url = document.getElementById('company_website').value;
         if (re.test(url) == false) { 
            document.getElementById('url_err').innerHTML = "Please Provide Valid URL";
             document.myForm.company_website.focus() ;
               return false;
           } else{
               document.getElementById('url_err').innerHTML = "";
           }
      
      
      
         
       var Email_regex = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
       var email = document.getElementById('company_mail').value;
      
           if(Email_regex.test(email) == false){
               document.getElementById('email_err').innerHTML = "Please Provide Valid Email";
                document.myForm.company_mail.focus() ;
               return false;
           }else{
                document.getElementById('email_err').innerHTML ="";
           }
      
       
        
      
      
          if( document.myForm.job_type.value == "" )
        {
            document.getElementById('job_type_err').innerHTML ="Select one Job Type";
           // document.myForm.job_type.focus() ;
           return false;
        }else{
            document.getElementById('job_type_err').innerHTML ="";
        }
      
      
         if( document.myForm.job_category.value == ""  )
        {
            document.getElementById('job_category_err').innerHTML ="Select One Category";
           // document.myForm.job_category.focus() ;
           return false;
        }else{
            document.getElementById('job_category_err').innerHTML ="";
        }
      
      
          if( document.myForm.job_location.value == "" )
        {
          document.getElementById('location_err').innerHTML = "Provide Job Location";
           document.myForm.job_location.focus() ;
           return false;
        }else{
           document.getElementById('location_err').innerHTML ="";
        }
      
      
          if( document.myForm.job_description.value == "" )
        {
          document.getElementById('description_err').innerHTML = "Provide Description About Job";
           document.myForm.job_description.focus() ;
           return false;
        }else{
           document.getElementById('description_err').innerHTML = "";
        }
      
      
      
          if( document.myForm.job_how_to_apply.value == "" )
        {
          document.getElementById('apply_err').innerHTML = "Provide some instruction How to Apply";
           document.myForm.job_how_to_apply.focus() ;
           return false;
        }else{
           document.getElementById('apply_err').innerHTML = "";
        }
      
        return true;
      
      
      
      
      }
   </script>
</body>
</html>