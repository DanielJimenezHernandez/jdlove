<?php
   include('php/session.php');
?>

<!DOCTYPE html>
<html lang="en">
	<head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <title>J&D</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
				<link href="assets/css/facebook.css" rel="stylesheet">
    </head>
    
    <body>
        
        <div class="wrapper">
			<div class="box">
				<div class="row row-offcanvas row-offcanvas-left">
					
					<!-- sidebar -->
					<div class="column col-sm-2 col-xs-1 sidebar-offcanvas" id="sidebar">
					  
						<ul class="nav">
							<li><a href="#" data-toggle="offcanvas" class="visible-xs text-center"><i class="glyphicon glyphicon-chevron-right"></i></a></li>
						</ul>
					   
						<ul class="nav hidden-xs" id="lg-menu">
							<li class="active"><a href="#"><i class="glyphicon glyphicon-list-alt"></i> Memories</a></li>
							<li><a href="#"><i class="glyphicon glyphicon-list"></i> To do lists</a></li>
							<li><a href="#"><i class="glyphicon glyphicon-paperclip"></i> Love Story</a></li>
						</ul>
						<ul class="list-unstyled hidden-xs" id="sidebar-footer">
							<li>
							  <a href="#"><h3>J&D</h3> <i class="glyphicon glyphicon-heart-empty"></i> With Love</a>
							</li>
						</ul>
					  
						<!-- tiny only nav-->
					  <ul class="nav visible-xs" id="xs-menu">
							<li><a href="#featured" class="text-center"><i class="glyphicon glyphicon-list-alt"></i></a></li>
							<li><a href="#stories" class="text-center"><i class="glyphicon glyphicon-list"></i></a></li>
							<li><a href="#" class="text-center"><i class="glyphicon glyphicon-paperclip"></i></a></li>
						</ul>
					  
					</div>
					<!-- /sidebar -->
				  
					<!-- main right col -->
					<div class="column col-sm-10 col-xs-11" id="main">
						
						<!-- top nav -->
						<div class="navbar navbar-blue navbar-static-top">  
							<div class="navbar-header">
							  <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							  </button>
							  <a href="#" class="navbar-brand logo">&hearts;</a>
							</div>
							<nav class="collapse navbar-collapse" role="navigation">
							<ul class="nav navbar-nav">
							  <li>
								<a href="#"><i class="glyphicon glyphicon-home"></i> Home</a>
							  </li>
							  <li>
								<a href="#postModal" role="button" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i> Post to each other</a>
							  </li>
							</ul>
							<ul class="nav navbar-nav navbar-right">
							  <li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> Admin</a>
								<ul class="dropdown-menu">
								  <li><a href=""><?php echo $login_session; ?></a></li>
								  <li><a href="php/logout.php">Log Out</a></li>
								</ul>
							  </li>
							</ul>
							</nav>
						</div>
						<!-- /top nav -->
					  
						<div class="padding">
							<div class="full col-sm-9">
							  
								<!-- content -->                      
								<div class="row">
								  
								 <!-- main col left --> 
								 <div class="col-sm-5">
								   
									  <div class="panel panel-default">
										<div class="panel-thumbnail"><img src= <?php echo '"'.$profilePic.'"'; ?> class="img-responsive"></div>
										<div class="panel-body">
										  <p class="lead"><?php echo $login_session; ?></p>
										  <p>Posted n times</p>
										</div>
									  </div>

								  </div>
								  
								  <!-- main col right -->
								  <div class="col-sm-7">
										
									   
										<?php
										$sql = "SELECT * FROM `posts` ORDER BY `posts`.`timestamp` DESC";

										$result = mysqli_query($db,$sql);

										while($tableName = mysqli_fetch_row($result)) {
											
										$id = $tableName[0];
										$timestamp = $tableName[1];
										$who = $tableName[2];
										$body = $tableName[3];

										$ses_sql = mysqli_query($db,"select thumbnail from members where username = '$who' ");
										$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
										$thumbnail = $row['thumbnail'];

									   echo '<div class="panel panel-default">';
										 echo '<div class="panel-heading"><a href="#" class="pull-right">Edit</a> <h4> Posted by '. $who.'</h4></div>';
										 echo '<div class="panel-body">';
										 echo '<p><img src="'.$thumbnail.'" class="img-circle pull-right"><h>'.$body.'</h></p>';
										 echo '<div class="clearfix"></div>';
										 echo '<hr>';
										 echo 'Posted on ';
										//Adjust Time from cookie
										$timezone_offset_minutes = $_COOKIE['TimeZoneOffset'];  // $_GET['timezone_offset_minutes']

										// Convert minutes to seconds
										$timezone_name = timezone_name_from_abbr("", $timezone_offset_minutes*60, false);
										$clientTimeZone = new DateTimeZone($timezone_name);
										$serverTimeZone = new DateTimeZone(date_default_timezone_get());
										
										 //DateTime Object from mysql date
										 $dt = new DateTime($timestamp,$serverTimeZone);
										 $dt->setTimeZone($clientTimeZone);
										 echo $dt->format('M j Y g:i A');

										 echo '</div>';
										 echo '</div>';
										}
										 ?>

									   <div class="panel panel-default">
										 <div class="panel-heading"><a href="#" class="pull-right">View all</a> <h4>Stackoverflow</h4></div>
										  <div class="panel-body">
											<img src="assets/img/150x150.gif" class="img-circle pull-right"> <a href="#">Keyword: Bootstrap</a>
											<div class="clearfix"></div>
											<hr>
											
											<p>If you're looking for help with Bootstrap code, the <code>twitter-bootstrap</code> tag at <a href="http://stackoverflow.com/questions/tagged/twitter-bootstrap">Stackoverflow</a> is a good place to find answers.</p>
											
											<hr>
											<form>
											<div class="input-group">
											  <div class="input-group-btn">
											  <button class="btn btn-default">+1</button><button class="btn btn-default"><i class="glyphicon glyphicon-share"></i></button>
											  </div>
											  <input class="form-control" placeholder="Add a comment.." type="text">
											</div>
											</form>
											
										  </div>
									   </div>

									   <div class="panel panel-default">
										 <div class="panel-heading"><a href="#" class="pull-right">View all</a> <h4>Portlet Heading</h4></div>
										  <div class="panel-body">
											<ul class="list-group">
											<li class="list-group-item">Modals</li>
											<li class="list-group-item">Sliders / Carousel</li>
											<li class="list-group-item">Thumbnails</li>
											</ul>
										  </div>
									   </div>
									
									   <div class="panel panel-default">
										<div class="panel-thumbnail"><img src="assets/img/bg_4.jpg" class="img-responsive"></div>
										<div class="panel-body">
										  <p class="lead">Social Good</p>
										  <p>1,200 Followers, 83 Posts</p>
										  
										  <p>
											<img src="assets/img/photo.jpg" height="28px" width="28px">
											<img src="assets/img/photo.png" height="28px" width="28px">
											<img src="assets/img/photo_002.jpg" height="28px" width="28px">
										  </p>
										</div>
									  </div>
									
								  </div>
							   </div><!--/row-->
							  
								<div class="row">
								  <div class="col-sm-6">
									<a href="#">Twitter</a> <small class="text-muted">|</small> <a href="#">Facebook</a> <small class="text-muted">|</small> <a href="#">Google+</a>
								  </div>
								</div>
							  
								<div class="row" id="footer">    
								  <div class="col-sm-6">
									
								  </div>
								  <div class="col-sm-6">
									<p>
									<a href="#" class="pull-right">�Copyright 2013</a>
									</p>
								  </div>
								</div>
							  
							  <hr>
							  
							  <h4 class="text-center">
							  <a href="http://usebootstrap.com/theme/facebook" target="ext">Download this Template @Bootply</a>
							  </h4>
								
							  <hr>
								
							  
							</div><!-- /col-9 -->
						</div><!-- /padding -->
					</div>
					<!-- /main -->
				  
				</div>
			</div>
		</div>


		<!--post modal-->
		<div id="postModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
		  <div class="modal-dialog">
		  <div class="modal-content">
			  <div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
					Post only with love
			  </div>
			  <div class="modal-body">
				  <form action="php/postScript.php" method="post" class="form center-block">
					<div class="form-group">
					  <textarea id="postBody" name="body" class="form-control input-lg" autofocus="" placeholder="Say Something..."></textarea>
					</div>
					<div class="modal-footer">
				  <div>
				  <button type="submit" class="btn btn-primary btn-sm" aria-hidden="true">Post</button>
				  </div>	
			  </div>
				  </form>
			  </div>
		  </div>
		  </div>
		</div>
        
        <script type="text/javascript" src="assets/js/jquery.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.js"></script>
        <script type="text/javascript">
        $(document).ready(function() {
			$('[data-toggle=offcanvas]').click(function() {
				$(this).toggleClass('visible-xs text-center');
				$(this).find('i').toggleClass('glyphicon-chevron-right glyphicon-chevron-left');
				$('.row-offcanvas').toggleClass('active');
				$('#lg-menu').toggleClass('hidden-xs').toggleClass('visible-xs');
				$('#xs-menu').toggleClass('visible-xs').toggleClass('hidden-xs');
				$('#btnShow').toggle();
			});
        });
        </script>
</body></html>