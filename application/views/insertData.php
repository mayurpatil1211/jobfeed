<?php include('header.php');?>
<body style="background-color: #616161" ng-app="mainApp">
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
            <form action="insertData" method="post" enctype="multipart/form-data" name="myForm" ng-controller="app" novalidate>
              

               <div class="section">
                  <h2>First, tell us about the position</h2>
                 

                  <div class="form-group control-group">
                     <label class="col-xs-12 col-sm-3 col-md-2 control-label">Headline<span class="help-required" title="Required">*</span></label>
                     <div class="col-xs-12 col-sm-9 col-md-10 controls space-in-form">
                        <input autofocus class="form-control" id="job_headline" maxlength="100" minlength="1" name="job_headline" type="text" value="" ng-model="job_headline" required>
                        <p class="help-block">A single-line summary. This goes to the front page and across the network.</p>
                     
                        <span ng-show = "myForm.job_headline.$invalid && myForm.job_headline.$dirty" class="err">Headline is required.</span>
                       
                     
                     </div>
                  </div>


                  <div class="form-group space-in-form">
                     <label class="col-xs-12 col-sm-3 col-md-2 control-label">Headline B</label>
                     <div class="col-xs-12 col-sm-9 col-md-10  space-in-form">
                        <input class="form-control" maxlength="100" minlength="1" name="job_headline_b" type="text" value="" >
                        <p class="help-block">An alternate headline that will be shown to 50% of users. You’ll get a count of views per headline</p>
                     </div>
                  </div>


                  <div class="form-group control-group">
                     <label class="col-xs-12 col-sm-3 col-md-2 control-label">Company Name<span class="help-required" title="Required">*</span></label>
                     <div class="col-xs-12 col-sm-9 col-md-10 controls space-in-form">
                        <input autofocus class="form-control " maxlength="100" minlength="1" name="company_name" type="text" value="" ng-model="company_name" required>
                      
                        <span ng-show = "myForm.company_name.$invalid && myForm.company_name.$dirty" class="err">Comapny Name is required.</span>
                        
                     
                     </div>
                  </div>


                  <div class="form-group control-group">
                     <label class="col-xs-12 col-sm-3 col-md-2 control-label">Website<span class="help-required" title="Required">*</span></label>
                     <div class="col-xs-12 col-sm-9 col-md-10 controls space-in-form">
                        <input autofocus class="form-control " maxlength="100" minlength="1" name="company_website" id="company_website" type="url" value="" ng-model="company_website" required>

                        <span ng-show = "myForm.company_website.$invalid && myForm.company_website.$dirty" class="err">Comapny Website is required.
                     </span>
                      <span class="err" ng-show="myForm.company_website.$error.url">
      Not valid url!</span>
                     </div>
                  </div>


                  <div class="form-group control-group">
                     <label class="col-xs-12 col-sm-3 col-md-2 control-label">Email<span class="help-required" title="Required">*</span></label>
                     <div class="col-xs-12 col-sm-9 col-md-10 controls space-in-form">
                        <input autofocus class="form-control " maxlength="100" minlength="1" id="company_mail" name="company_mail" type="email" ng-model="company_mail" required>
                      
                        <span ng-show = "myForm.company_mail.$invalid && myForm.company_mail.$dirty" class="err">Valid Email is required.</span>
                        
                     
                     </div>
                  </div>


                  <div class="form-group control-group space-in-form" >
                     <label class="col-xs-12 col-sm-3 col-md-2 control-label">Type<span class="help-required" title="Required">*</span></label>
                     <div class="col-xs-12 col-sm-9 col-md-10 space-in-form">
                        <ul class="field-job_type " id="job_type">

                           <li><input name="job_type" type="radio" value="Full-time Employment" ng-model="job_type" required> <label>Full-time employment</label></li>

                           <li><input name="job_type" type="radio" value="Short-term Contract" ng-model="job_type" required> <label>Short-term contract</label></li>

                           <li><input name="job_type" type="radio" value="Internship" ng-model="job_type" required> <label>Internship</label></li>

                           <li><input name="job_type" type="radio" value="Freelance Consulting" ng-model="job_type" required> <label>Freelance or consulting</label></li>

                           <li><input name="job_type" type="radio" value="Volunteer Contributor" ng-model="job_type" required> <label>Volunteer contributor</label></li>

                           <li><input name="job_type" type="radio" value="Partner for a venture" ng-model="job_type" required> <label>Partner for a venture</label></li>
                           
                            <span ng-show = "myForm.job_type.$invalid && myForm.job_type.$dirty" class="err">Valid Email is required.</span>
                        </ul>
                     </div>
                  </div>


                  <div class="form-group space-in-form">
                     <label class="col-xs-12 col-sm-3 col-md-2 control-label">Category<span class="help-required" title="Required">*</span></label>
                     <div class="col-xs-12 col-sm-9 col-md-10  space-in-form">
                        <ul>
                           <li><input name="job_category" type="radio" value="Interaction Design" ng-model="job_category" required> <label>Interaction Design</label></li>

                           <li><input name="job_category" type="radio" value="Software Developer" ng-model="job_category" required> <label>Software Developer</label></li>

                           <li><input name="job_category" type="radio" value="Graphic Design" ng-model="job_category" required> <label>Graphic Design</label></li>


                           <li><input name="job_category" type="radio" value="Electronics" ng-model="job_category" required> <label>Electronics</label></li>


                           <li><input name="job_category" type="radio" value="Testing" ng-model="job_category" required> <label>Testing</label></li>


                           <li><input name="job_category" type="radio" value="Systems Administration" ng-model="job_category" required> <label>Systems Administration</label></li>


                           <li><input name="job_category" type="radio" value="Business Management" ng-model="job_category" required> <label>Business/Management</label></li>


                           <li><input name="job_category" type="radio" value="Writer Editor" ng-model="job_category" required> <label>Writer/Editor</label></li>


                           <li><input name="job_category" type="radio" value="Customer Support" ng-model="job_category" required>  <label>Customer Support</label></li>


                           <li><input name="job_category" type="radio" value="Mobile" ng-model="job_category" required> <label>Mobile (iPhone, Android, other)</label></li>

                           <li><input name="job_category" type="radio" value="Office Administration" ng-model="job_category" required> <label>Office Administration</label></li>
                          
                            <span ng-show = "myForm.job_category.$invalid && myForm.job_category.$dirty" class="err">Valid Email is required.</span>
                        </ul>
                     </div>
                  </div>


                  <div class="form-group control-group space-in-form">
                     <label class="col-xs-12 col-sm-3 col-md-2">Location<span class="help-required" title="Required">*</span></label>
                     <div class="col-xs-12 col-sm-9 col-md-10 form-group  space-in-form">
                        <input class="form-control field-job_location " maxlength="80" minlength="3" name="job_location" type="text" value=""  ng-model="job_location" required>
                        <p class="help-block">
                           “Bangalore”, “Chennai”, “Pune”, etc or “Anywhere”
                        </p>
                        
                    
                        <span ng-show = "myForm.job_location.$invalid && myForm.job_location.$dirty" class="err">Job Location is required.</span>
                        
                
                     </div>
                  </div>


                  <div class="form-group control-group space-in-form">
                     <label class=" col-xs-12 col-sm-3 col-md-2 control-label">Description<span class="help-required" title="Required">*</span></label>
                     <div class="col-xs-12 col-sm-9 col-md-10 form-group  space-in-form">
                        <textarea class="form-control form-group description" name="job_description" ng-model="job_description" required></textarea>
                        
                        <span ng-show = "myForm.job_description.$invalid && myForm.job_description.$dirty" class="err">Description is required.</span>
                        
                     
                     </div>
                  </div>


                  <div class="form-group control-group space-in-form">
                     <label class=" col-xs-12 control-label">What should a candidate submit when applying for this job?<span class="help-required" title="Required">*</span></label>
                     <div class=" col-xs-12 controls  space-in-form">
                        <textarea class="form-control" name="job_how_to_apply"  ng-model="job_how_to_apply" ng-model="job_how_to_apply" required></textarea>
                        <p class="help-block">Example: “Include your LinkedIn and GitHub profiles.” We now require candidates to apply through the job board only. Do not include any contact information here. Candidates CANNOT attach resumes or other documents, so do not ask for that</p>
                        
                        <span ng-show = "myForm.job_how_to_apply.$invalid && myForm.job_how_to_apply.$dirty" class="err">Provide Details how to apply</span>
                        
                     
                     </div>
                  </div>


                  <div>
                     <input type="submit" class="btn btn-lg btn-primary btn-post" 
                      ng-disabled="myForm.job_headline.$invalid || myForm.company_name.$invalid || myForm.company_website.$invalid || myForm.company_mail.$invalid || myForm.job_location.$invalid || myForm.job_description.$invalid || myForm.job_how_to_apply.$invalid || myForm.company_website.$error.url || myForm.job_category.$invalid || myForm.job_type.$invalid"
                       name="post">
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
  <!--  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.3/angular.min.js"></script> -->


   <script type="text/javascript">
     var app = angular.module('mainApp', []);
     app.controller('app', function($scope){
      console.log("hi");
     })
   </script>
</body>
</html>