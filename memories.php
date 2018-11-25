<?php
   include('php/session.php');
?>

<!DOCTYPE html>
<html lang="en">
	<head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <title>J&D - Memories</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
				<link href="assets/css/facebook.css" rel="stylesheet">
				<link href="upload-style.css" rel="stylesheet">

			<link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
			<link rel="stylesheet" href="thumbnail-gallery.css">

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
							
							  
								<!-- content -->
							<div class="row">
							<div class="full col-sm-9">
								<div class="well well-lg text-center"> 
									<form class="form" role="form" action="php/fileUpload.php" method="post" enctype="multipart/form-data">
										<input type="hidden" value=<?php echo '"'.$_SESSION['login_userId'] .'"'; ?> name="user_id" />
										<input type="hidden" value="img/pics/" name="path" />
										<h4>Upload a Memory</h4>
										<hr>
												<div class="form-group">
														<label>Upload Image</label>
														<div class="input-group">
																<span class="input-group-btn">
																		<span class="btn btn-primary btn-file">
																				Browse… <input type="file" name="photo" id="fileToUpload" accept=".jpg,.jpeg">
																		</span>
																</span>
																<input type="text" class="form-control" readonly>
														</div>
														<img id='img-upload'/>
												</div>
											<br>
											<input class="form-control" type="text" name="photoName" id="photoId" placeholder="Name this memory" style="text-align: center" required>
											<br>
											<textarea name="caption" id="caption" class="form-control" placeholder="Put your feelings about this pic here" style="text-align: center"></textarea>
											<br>
											<button type="submit" name="submit" class="btn btn-primary ">Upload</button>
									</form>
								</div>
							</div><!-- /col-9 -->
							</div>
							
							<div class="row">
								<div class="tz-gallery">
									 <?php
										$sql  = 'SELECT foto_name, path, caption FROM Pictures WHERE user_id = '.$_SESSION['login_userId'].' or user_id = '.$_SESSION['login_significantOther'].' ORDER BY RAND()';
										$result = $db->query($sql);
										$counter = 0;

										while($fetch_posts = $result->fetch_array(MYSQLI_ASSOC)) {
											
										$fotoName = $fetch_posts['foto_name'];
										$path = $fetch_posts['path'];
										$caption = $fetch_posts['caption'];

										echo '<div class="col-sm-12 col-md-6 col-md-4">';
										echo  '<div class="thumbnail">';
										echo		'<a class="lightbox" href="'.$path.'">';
										echo				'<img class="img-thumbnail" style="height:200px; width: 100%; object-fit: cover;"  src="'.$path.'" alt="'.$fotoName.'">';
										echo		'</a>';
										echo		'<div class="caption">';
										echo				'<h3>'.$fotoName.'</h3>';
										echo				'<p>'.$caption.'</p>';
										echo '<div class="clearfix"></div>';
										echo '<hr>';
										echo 'Uploaded by:  ';
										echo		'</div>';
										echo	'</div>';
										echo '</div>';

										}
										?>

								</div>
							<div class="row">

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
				<!--Script for image preview upload-->
				<script type="text/javascript">
							$(document).ready( function() {
						$(document).on('change', '.btn-file :file', function() {
					var input = $(this),
						label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
					input.trigger('fileselect', [label]);
					});

					$('.btn-file :file').on('fileselect', function(event, label) {
							
							var input = $(this).parents('.input-group').find(':text'),
									log = label;
							
							if( input.length ) {
									input.val(log);
							} else {
									if( log ) alert(log);
							}
						
					});
					function readURL(input) {
							if (input.files && input.files[0]) {
									var reader = new FileReader();
									
									reader.onload = function (e) {
											$('#img-upload').attr('src', e.target.result);
									}
									
									reader.readAsDataURL(input.files[0]);
							}
					}

					$("#fileToUpload").change(function(){
							readURL(this);
					}); 	
				});
				</script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
		<script>
			baguetteBox.run('.tz-gallery');
		</script>
</body></html>