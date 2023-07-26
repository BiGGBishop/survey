<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<html lang="en">
<!--<![endif]-->

<head>

<!-- Basic Page Needs -->
<meta charset="utf-8">
<title>YONEVAS COLLEGE INFORMATION REQUEST FORM</title>
<meta name="description" content="">
<meta name="author" content="Ogunye David">

<!-- Favicons-->
<link rel="icon" type="image/png" href="img/logo.png">

<!-- Mobile Specific Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- CSS -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" >
<link href="css/socialize-bookmarks.css" rel="stylesheet">
<link href="js/fancybox/source/jquery.fancybox63b9.css?v=2.1.4" rel="stylesheet">
<link href="check_radio/skins/square/aero.css" rel="stylesheet">

<!-- Toggle Switch -->
<link rel="stylesheet" href="css/jquery.switch.css">

<!-- Owl Carousel Assets -->
<link href="css/owl.carousel.css" rel="stylesheet">
<link href="css/owl.theme.css" rel="stylesheet">

<!-- Google web font -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800,300' rel='stylesheet' type='text/css'>

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Jquery -->
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery-ui-1.8.22.min.js"></script>

<!-- Wizard-->
<script src="js/jquery.wizard.js"></script>

<!-- Radio and checkbox styles -->
<script src="check_radio/check.min.js"></script>

<!-- HTML5 and CSS3-in older browsers-->
<script src="js/modernizr.custom.17475.js"></script>

<!-- Support media queries for IE8 -->
<script src="js/respond.min.js"></script>

<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-11097556-8']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

</head>

<body>

	<header>
         <div class="container">
            <div class="row">
        	<div class="col-md-4 col-xs-3" ><a href="#"><img src="img/logo.png" style="width:10%;"></a></div>
            
            <div class="btn-responsive-menu"> <span class="bar"></span> <span class="bar"></span> <span class="bar"></span> </div>

            <nav class="col-md-8 col-xs-9" id="top-nav">
            	<ul>
                    <li><a href="#">College Home Page</a></li>
               </ul>
            </nav><!-- End Nav -->
            
         </div><!-- End row -->
         </div><!-- End container -->
        </header> <!-- End header -->
        	
            <div class="container">
             <div class="row">
                 <div class="col-md-12 main-title">
                 <h1>YONEVAS COLLEGE</h1>
                <p>INFORMATION REQUEST FORM</p>
                </div>
       		</div>
            </div>

<section class="container" id="main">

<!-- Start Survey container -->
<div id="survey_container">

	<div id="top-wizard">
		<strong>Progress <span id="location"></span></strong>
		<div id="progressbar"></div>
		<div class="shadow"></div>
	</div><!-- end top-wizard -->
    
	<form id="wrapped" name="survey" action="submit.php" method="POST">
		<div id="middle-wizard">
			<div class="step">
				<div class="row">
					<h3 class="col-md-10">Enter your personal info</h3>
					<div class="col-md-6">
						<ul class="data-list">
							<li><input type="text" name="fullname" class="required form-control" placeholder="Full name"></li>
							<li><input type="text" name="preferredname" class="form-control" placeholder="Preferred name (if different from full name)"></li>
							<li><input type="email" name="email" class="required form-control" placeholder="Email"></li>
							<li><input type="text" name="phonenumber" class="required form-control" placeholder="Phone number"></li>
                            <input id="website" name="website" type="text" value="" ><!-- Leave for security protection, read docs for details -->
						</ul>
					</div><!-- end col-md-6 -->
                    
					<div class="col-md-6">
                    
						<ul class="data-list">
							<li>
							<div class="styled-select">
								<select class="form-control required" name="preferredcommmunication">
									<option value="" selected>Preferred method of communication</option>
									<option value="email">Email</option>
									<option value="phonecall">Phone call</option>
									<option value="textmessage">Text message</option>
								</select>
							</div>
							</li>
						</ul>

						<ul class="data-list">
							<li>
							<div class="styled-select">
								<select class="form-control required" name="onlineclass">
									<option value="" selected>Have you taken online classes before</option>
									<option value="yes">Yes</option>
									<option value="no">No</option>
								</select>
							</div>
							</li>
						</ul>
                        
						<ul class="data-list">
							<li id="age"><input type="text" name="age" class="required form-control" placeholder="Age"></li>							
						</ul>
						<ul class="data-list floated clearfix">
							<li><input name="gender" type="radio" class="required check_radio" value="Male"><label class="label_gender"> Male</label></li>
							<li><input name="gender" type="radio" class="required check_radio" value="Female"><label class="label_gender"> Female</label></li>
						</ul>

					</div><!-- end col-md-6 -->
				</div><!-- end row -->
                				               
			</div><!-- end step-->
            
			<div class="step row">
				<h3 class="col-md-10">Enter your choice of interest</h3>
				<div class="col-md-10">					
                        <ul class="data-list">
							<li>
							<div class="styled-select">
								<select class="form-control required" name="program">
									<option value="" selected>Which program are you interested in?</option>
									<option value="Bachelors Degree">Bachelor's degree</option>
									<option value="Diploma ">Diploma </option>
									<option value="Certificate Program">Certificate program</option>
									<option value="Not Sure">Not sure</option>
								</select>
							</div>
							</li>
						</ul>
					<ul class="data-list">
							<li>
							<div class="styled-select">
								<select class="form-control required" name="field">
									<option value="" selected>Which field of study are you interested in?</option>
									<option value="Business">Business</option>
									<option value="Computer Science">Computer Science</option>
									<option value="Education">Education</option>
									<option value="Media, Arts and Graphics">Media, Arts and Graphics</option>
									<option value="Web Development">Web Development</option>
									<option value="Creative Leadership">Creative Leadership</option>
									<option value="Data Science">Data Science</option>
									<option value="Creative Writing">Creative Writing</option>
									<option value="Marketing">Marketing</option>
									<option value="Environmental Studies">Environmental Studies</option>
									<option value="Computer Info Tech">Computer Info Tech</option>
									<option value="Case Report">Case Report</option>
									<option value="Web Development">Web Development</option>
									<option value="Social Media Strategist">Social Media Strategist</option>
									<option value="Private Investigator">Private Investigator</option>
									<option value="Programming">Programming</option>
									<option value="Networking">Networking</option>
									<option value="Cyber Security">Cyber Security</option>
									<option value="Computer Science">Computer Science</option>
									<option value="Statistics">Statistics</option>
									<option value="Visual Presentation">Visual Presentation</option>
									<option value="3D Motion Graphics">3D Motion Graphics</option>
									<option value="Social Awareness">Social Awareness</option>
									<option value="Digital Learning">Digital Learning</option>
									<option value="Communication">Communication</option>
									<option value="Public speaking">Public speaking</option>
									<option value="Health Science">Health Science</option>
									<option value="Business Administration">Business Administration</option>
									<option value="Sociology">Sociology</option>
									<option value="Graphics Design">Graphics Design</option>
									<option value="Animations and 3D Motion">Animations and 3D Motion</option>     
									<option value="Criminal Justices">Criminal Justices</option>
									<option value="Psychology">Psychology</option>
									<option value="Graphic Design | Media Arts">Graphic Design | Media Arts</option>
									<option value="Physical and Health education">Physical and Health education</option>
									<option value="Economics">Economics</option>
									<option value="Entrepreneurship Management">Entrepreneurship Management</option>
									<option value="Accounting">Accounting</option>
									<option value="Political Science">Political Science</option>
									<option value="Philosophy">Philosophy</option>
									<option value="Mass Communication">Mass Communication</option>
									<option value="Social Work">Social Work</option>
									<option value="Forensic Accounting & Fraud Investigation">Forensic Accounting & Fraud Investigation</option>
									<option value="Human Resource Management">Human Resource Management</option>
									<option value="Event and Meeting Management">Event and Meeting Management</option>
									<option value="Early Childhood Special Education">Early Childhood Special Education</option>
								</select>
							</div>
							</li>
						</ul>
						<ul class="data-list">
							<li>
							<div class="styled-select">
								<select class="form-control required" name="dates">
									<option value="" selected>What is your anticipated start date?</option>
									<option value="September 2023">September 2023</option>
									<option value="February 2024">February 2024</option>
								</select>
							</div>
							</li>
						</ul>
					</div><!-- end col-md-6 -->					
			</div><!-- end step -->
            
			<div class="step row">
				<div class="col-md-10">
						<h3>Have you attended college before?</h3>
						<ul class="data-list floated clearfix">
							<li><input name="attendedbefore" type="radio" class="required check_radio" value="Yes"><label class="label_gender"> Yes</label></li>
							<li><input name="attendedbefore" type="radio" class="required check_radio" value="No"><label class="label_gender"> No</label></li>
						</ul><br><br>
						<h3>If you answered "Yes" to the previous question, which institution(s) did you attend? (Please list all)</h3>
						<textarea name="institutionattended" class="data-list" style="width: 100%; height: 72px;"></textarea><br><br>
					<h3>Are you interested in any of the following?</h3>
					<ul class="data-list">
							<li>
							<div class="styled-select">
								<select class="form-control required" name="aidornot">
									<option value="Financial Aid/Scholarships">Financial Aid/Scholarships</option>
									<option value="Discount on Tuition">Discount on Tuition</option>
									<option value="Study Abroad Opportunities">Study Abroad Opportunities</option> 
									<option value="Internship/Job Placement Services">Internship/Job Placement Services</option>
									<option value="Internship/Job Placement Services">None of the above</option>
								</select>
							</div>
							</li>
						</ul>
				</div>				
			</div><!-- end step -->
            
			<div class="step row">
				<div class="col-md-10">
					<h3>How did you hear about us?</h3>
					<ul class="data-list-2">
						<li><input name="how" type="checkbox" class="required check_radio" value="Online Search"><label>Online Search</label></li>
						<li><input name="how" type="checkbox" class="required check_radio" value="Social Media"><label>Social Media</label></li>
						<li><input name="how" type="checkbox" class="required check_radio" value="Referral from a friend/family member"><label>Referral from a friend/family member</label></li>
						<li><input name="how" type="checkbox" class="required check_radio" value="Advertisement"><label>Advertisement</label></li>
					</ul>
				</div>
			</div><!-- end step -->
            
			<div class="submit step" id="complete">
                    	<i class="icon-check"></i>
						<h3>Survey complete! Thank you for you time.</h3>
						<button type="submit" name="submit" class="submit">Submit the survey</button>
			</div><!-- end submit step -->
            
		</div><!-- end middle-wizard -->
        
		<div id="bottom-wizard">
			<button type="button" name="backward" class="backward">Backward</button>
			<button type="button" name="forward" class="forward">Forward </button>
		</div><!-- end bottom-wizard -->
	</form>
    
</div><!-- end Survey container -->


</section><!-- end section main container -->
       
<footer>
	<section class="container">
	<div class="row">
        
        <div class="col-md-4" id="contact">
        	<h3>Contact info</h3>
                <ul>
                        <li><i class="icon-home"></i> Block 223 low cost H/Estate Isolo-lagos</li>
                        <li><i class="icon-phone"></i> Telephone: (+234)7048778559</li>
                        <li><i class="icon-envelope"></i> Email: <a href="info@yonevas.institute">info@yonevas.institute</a></li>
                    </ul>    
        </div>
        
        <div class="col-md-4">
            <ul class="social-bookmarks clearfix">
            	<li class="youtube"><a href="https://www.youtube.com/channel/UC7--ERLy6wd7UjvDqepxReA">Youtube</a></li>
                    <li class="facebook"><a href="https://www.facebook.com/Yonevascollege">facebook</a></li>
            </ul>
        </div>
        
    </div><!-- end row -->
  	</section>
    
    <section id="footer_2">
    <div class="container">
    <div class="row">
    	<div class="col-md-6">
                <ul class="social-bookmarks clearfix">
                	<li>Copyright© Yonevas College </li>
                </ul>              
        </div>
        </div>
		</div>
    </section>

</footer> 
 
 <div id="toTop">Back to Top</div>  

<!-- Modal About -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body">
        <p></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!-- OTHER JS --> 
<script src="js/jquery.validate.js"></script>
<script src="js/jquery.placeholder.js"></script>
<script src="js/jquery.tweet.min.js"></script>
<script src="js/jquery.bxslider.min.js"></script>
<script src="js/quantity-bt.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/retina.js"></script>
<script src="js/functions.js"></script>


<!-- FANCYBOX -->
<script  src="js/fancybox/source/jquery.fancybox.pack63b9.js?v=2.1.4" type="text/javascript"></script> 
<script src="js/fancybox/source/helpers/jquery.fancybox-media3447.js?v=1.0.5" type="text/javascript"></script> 
<script src="js/fancy_func.js" type="text/javascript"></script> 

</body>

</html>