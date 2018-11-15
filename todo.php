<?php
   include('session.php');
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>The EMObook</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"-->

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/clean-blog.css" rel="stylesheet">


    
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="index.php">J&D:Welcome <?php echo $login_session; ?></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="todo.php">To Do Lists</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="post.php">Posting to Eachother</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="memories.php">Memories</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Log Out</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/pescadores.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading">
              <h1>This page is meant to have to do lists with everything we will do</h1>
              <span class="subheading">EVERYTHING!!!!!!.</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
<div class="container">
	<div class="row">
		<div class = "col-lg-10 col-md-10 mx-auto">

      <div class="container">
        <h4>Food<h4>
      </div>

      <div class="table-responsive">
        <table id="mytable" class="table table-bordred table-striped">
                          
            <thead>
              <th></th>
              <th>To do</th>
              <th>Details</th>
              <th>Responsible</th>
              <th>Delete</th>
            </thead>

            <tbody>
            
            <tr>
              <td><input type="checkbox" class="checkthis" /></td>
              <td>Pizza</td>
              <td>Made with love</td>
              <th>Daniel</th>
              <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
            </tr>
            
            <tr>
                <td><input type="checkbox" class="checkthis" /></td>
                <td>Crepes</td>
                <td>Also made with love</td>
                <th>Daniel</th>
                <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
            </tr>

            <tr>
                <td><input type="checkbox" class="checkthis" /></td>
                <td>Carne en su jugo</td>
                <td>Yep.. same as before</td>
                <th>Daniel</th>
                <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
            </tr>

            <tr>
              <td><input type="checkbox" class="checkthis" /></td>
              <td>Tortilas recien hechecitaus</td>
              <td>Read it with gringo accent</td>
              <th>Jacqueline</th>
              <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
            </tr>
            
            </tbody>
        </table>

      <div class="container">
        <div class="col-md-2 col-md-offset-5 mx-auto"><h4>Movies<h4></div>
      </div>

      <div class="table-responsive">
        <table id="mytable" class="table table-bordred table-striped">
                          
            <thead>
              <th></th>
              <th>To do</th>
              <th>Details</th>
              <th>Responsible</th>
              <th>Delete</th>
            </thead>

            <tbody>
            
            <tr>
              <td><input type="checkbox" class="checkthis" /></td>
              <td>Watch Pride and Prejudice</td>
              <td>Watch it until we die</td>
              <th>Both</th>
              <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
            </tr>
            
            <tr>
                <td><input type="checkbox" class="checkthis" /></td>
                <td>Intestellar</td>
                <td>Best movie evaa</td>
                <th>Both</th>
                <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
            </tr>

            <tr>
              <td><input type="checkbox" class="checkthis" /></td>
              <td>The Notebook</td>
              <td>awwwwww</td>
              <th>Both</th>
              <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
            </tr>
            
            <tr>
                <td><input type="checkbox" class="checkthis" /></td>
                <td>Any Comedy that i liked</td>
                <td>You have to watch it just because</td>
                <th>Both</th>
                <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
            </tr>
            
            </tbody>
        </table>

      <div class="container">
        <div class="col-md-2 col-md-offset-5 mx-auto"><h4>Places<h4></div>
      </div>

      <div class="table-responsive">
        <table id="mytable" class="table table-bordred table-striped">
                          
            <thead>
              <th></th>
              <th>To do</th>
              <th>Details</th>
              <th>Responsible</th>
              <th>Delete</th>
            </thead>

            <tbody>
            
            <tr>
              <td><input type="checkbox" class="checkthis" /></td>
              <td>All Mayan Riviera</td>
              <td>Your home</td>
              <th>Both</th>
              <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
            </tr>
            
            <tr>
                <td><input type="checkbox" class="checkthis" /></td>
                <td>Guanajuato</td>
                <td>A lot of kisses in the kissing alley</td>
                <th>Both</th>
                <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
            </tr>

            <tr>
              <td><input type="checkbox" class="checkthis" /></td>
              <td>Mazamitle</td>
              <td>Just to cuddle all day/night</td>
              <th>Both</th>
              <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
            </tr>
            
            <tr>
                <td><input type="checkbox" class="checkthis" /></td>
                <td>Tailantia</td>
                <td>We must</td>
                <th>Both</th>
                <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
            </tr>

            <tr>
                <td><input type="checkbox" class="checkthis" /></td>
                <td>Colombia</td>
                <td>Anoother international option</td>
                <th>Both</th>
                <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
            </tr>

            <tr>
                <td><input type="checkbox" class="checkthis" /></td>
                <td>Zapotiltic</td>
                <td>jajajajajajaja</td>
                <th>Both</th>
                <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
            </tr>

            <tr>
                <td><input type="checkbox" class="checkthis" /></td>
                <td>Potosinian Huasteca</td>
                <td>Yeiiii</td>
                <th>Both</th>
                <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
            </tr>

            </tbody>
        </table>


      </div>

    </div>
  </div>
</div>



    <hr>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-10 col-md-10 mx-auto">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
            <p class="copyright text-muted">Copyright &copy; Your Website 2018</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/clean-blog.min.js"></script>


  </body>

</html>
