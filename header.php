<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="../images/fav_icon.png">
<title>Job Ready</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet" media="screen">
<link href="css/bootstrap-responsive.css" rel="stylesheet" media="screen">
<link href="css/docs.css" rel="stylesheet" media="screen">
<link href="css/diapo.css" rel="stylesheet" media="screen">
<link href="css/font-awesome.css" rel="stylesheet" media="screen">
<link href="css/font-awesome.min.css" rel="stylesheet" media="screen">
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css" />
<link rel="stylesheet" type="text/css" media="print" href="css/print.css" />	
<link rel="stylesheet" type="text/css" media="print" href="css/work.css" />	
	<!-- js -->			
<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.hoverdir.js"></script>
			
<script>
jQuery(document).ready(function() {
$(function(){
	$('.pix_diapo').diapo();
});
});
</script>	
	<noscript>
			<style>
				.da-thumbs li a div {
					top: 0px;
					left: -100%;
					-webkit-transition: all 0.3s ease;
					-moz-transition: all 0.3s ease-in-out;
					-o-transition: all 0.3s ease-in-out;
					-ms-transition: all 0.3s ease-in-out;
					transition: all 0.3s ease-in-out;
				}
				.da-thumbs li a:hover div{
					left: 0px;
				}
			</style>
	</noscript>		
		
<script type="text/javascript" charset="utf-8" language="javascript" src="js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf-8" language="javascript" src="js/DT_bootstrap.js"></script>
<script type='text/javascript' src='scripts/jquery.easing.1.3.js'></script> 
<script type='text/javascript' src='scripts/jquery.hoverIntent.minified.js'></script> 
<script type='text/javascript' src='scripts/diapo.js'></script> 

</head>
<body>
  
 <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right">Welcome</p>
            <ul class="nav">
			  <li><a href="users.php">&nbsp;Users</a></li>			  
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Manage Master <b class="caret"></b></a>
                <ul class="dropdown-menu">
              <li><a href="interest_area.php">&nbsp;Interest Area</a></li>
			  <li><a href="institution.php">&nbsp;Institution</a></li>
			  <li><a href="education.php">&nbsp;Education</a></li>
			  <li><a href="video.php">&nbsp;Video Management</a></li>
			  <li><a href="events.php">&nbsp;Events</a></li>
			  <li><a href="manage_job.php">&nbsp;Manage Job</a></li>
			  <li><a href="success_story.php">&nbsp;Success Story</a></li>
		      
                </ul>
              </li>
			  <li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Manage Exam <b class="caret"></b></a>
			  <ul class="dropdown-menu">
              <li><a href="subject.php">&nbsp;Manage Subjects</a></li>			  
			  <li class="dropdown-submenu">
			  <a href="#">&nbsp;Manage Questions</a>
			  <ul class="dropdown-menu">
			  <li><a href="general_question.php">&nbsp;General Question</a></li>
			  <li><a href="question_interest.php">&nbsp;Interest Based</a></li>
			  </ul>
			  </li>			  
			  <li><a href="#">&nbsp;Manage Tests</a></li>
			  <li><a href="#">&nbsp;Manage Results</a></li>
		      </ul>
                </li>
			  <li><a href="logout.php">&nbsp;Logout</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>	 