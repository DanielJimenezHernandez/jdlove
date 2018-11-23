<?php
   include('php/session.php');
?>

<!DOCTYPE html>
<html lang="en">
	<head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <title>J&D - Home</title>
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
							<li class="active"><a href="memories.php"><i class="glyphicon glyphicon-list-alt"></i> Memories</a></li>
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
								<a href="index.php"><i class="glyphicon glyphicon-home"></i> Home</a>
							  </li>
							  <li>
								<a href="#postModal" role="button" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i> Post to each other</a>
							  </li>
							</ul>
							<ul class="nav navbar-nav navbar-right">
							  <li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> Admin</a>
								<ul class="dropdown-menu">
								  <li><a href=""><?php echo $_SESSION['login_userName']; ?></a></li>
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
										<div class="panel-thumbnail"><img src= <?php echo '"'.$_SESSION['login_profilePic'] .'"'; ?> class="img-responsive"></div>
										<div class="panel-body">
										  <p class="lead"><?php echo $_SESSION['login_userName']; ?></p>
										  <p>Posted n times</p>
										</div>
									  </div>

								  </div>
								  
								  <!-- main col right -->
								  <div class="col-sm-7">
										
									   
										<?php
										$sql = "SELECT Posts.post_body, Posts.timestamp, Posts.post_id, Posts.posted_by, Posts.user_id  FROM Posts  WHERE Posts.user_id = ".$_SESSION['login_userId']." OR Posts.user_id = ".$_SESSION['login_significantOther']." ORDER BY timestamp DESC";
										$result = $db->query($sql);

										while($fetch_posts = $result->fetch_array(MYSQLI_ASSOC)) {
											
										$postId = $fetch_posts['post_id'];
										$postBody = $fetch_posts['post_body'];
										$postTimestamp = $fetch_posts['timestamp'];
										$postedBy = $fetch_posts['posted_by'];
										$postedByID = $fetch_posts['user_id'];

										$sql = "SELECT profile_pic FROM User_Profile_Info where user_id = '$postedByID' ";
										$result_profilePic = $db->query($sql);
										$fetch_profilePic = $result_profilePic->fetch_array(MYSQLI_ASSOC);
										$profilePic = $fetch_profilePic['profile_pic'];

									   echo '<div class="panel panel-default">';
										 echo '<div class="panel-heading"><a href="#" class="pull-right">Edit</a> <h4> Posted by '. $postedBy.'</h4></div>';
										 echo '<div class="panel-body">';
										 echo '<p><img src="'.$profilePic.'" class="img-circle pull-right"><h>'.$postBody.'</h></p>';
										 echo '<div class="clearfix"></div>';
										 echo '<hr>';
										 echo 'Posted on ';
										 $dt = new DateTime($postTimestamp);
										 echo $dt->format('M j Y g:i A');
										 echo '</div>';
										 echo '</div>';
										}
										?>


									
								
								  </div>
							   </div><!--/row-->
							  
								<div class="row">
								  <div class="col-sm-6">
								  <a href="https://www.facebook.com/danny.vocal.core">Facebook</a>
								  </div>
								</div>
							  
								<div class="row" id="footer">    
								  <div class="col-sm-6">
									
								  </div>
								  <div class="col-sm-6">
									<p>
									<a href="#" class="pull-right">�Copyright 2018</a>
									</p>
								  </div>
								</div>
							  
							  <hr>
							  
								
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