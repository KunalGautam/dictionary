<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Installation of Dictionary App</title>
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../css/stickyfooter.css" rel="stylesheet">
   
   
  </head>
  <body>
    <!-- Wrap all page content here -->
    <div id="wrap">
      <!-- Fixed navbar -->
      
      
      
      
      <nav class="navbar navbar-default" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand">Dictionary App</a>
    </div> 
  </div><!-- /.container-fluid -->
</nav>
      <!-- Begin page content -->
      <div class="container">
        <div class="page-header">
          <h1>Dictionary App Installation</h1>
        </div>
        <p class="lead">Step 1: <code>Checking Prequisites</code></p>
        <p class="lead">
		<div class="row">
		  	<div class="col-6 col-sm-6 col-lg-6">
              <?php
//Calling require.php for checking the prequisites and assigning scores
include ('require.php');
?></div>
		  	<div class="col-6 col-sm-6 col-lg-6"></div>
		</div>
		<div class="row">
		  	<div class="col-lg-4">&nbsp;</div>
	  		<div class="col-lg-4 col-offset-4">
			<?php
//If any of the prequisites is not fullfiled, score will be less then 2 and hence recheck button will appear.
if ($score < "2") {
    echo "<a href=\"check.php\" type=\"button\" class=\"btn btn-primary\">Recheck Requirements</a>&nbsp;";
    echo "<a href=\"step1.php\" type=\"button\" class=\"btn btn-danger\">Proceed Anyway</a>";
} else {
    echo "<a href=\"step1.php\" type=\"button\" class=\"btn btn-success\">Proceed</a>";
}
?>
			</div>
		</div>
		</p>	
      </div>
    </div>
    <div id="footer">
      <div class="container">
         <p class="text-muted credit">Fork our code at <a href="https://github.com/KunalGautam/dictionary">GitHub</a></p>
      </div>
    </div>
    
  </body>
</html>
