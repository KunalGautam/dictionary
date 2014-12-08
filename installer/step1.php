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
          <h1>MySQL Database Connectivity Details:</h1>
        </div>
        <?php
// as this file may be called directly from check.php, no error number is assigned. Hence initialised it with blank error variable
$error = "";
if (isset($_GET['error'])) {
    // This error is called from step2.php is database detail is wrong.
    if ($_GET['error'] == '1') {
        echo "<code>Error while connecting database. Please check all details again</code>";
    } else {
        echo "<code>Database doesn't exsists. Please check all details again</code>";
    }
}
?>
        <p class="lead">We require some details to setup config file.</p>
				<form class="form-horizontal" action="step2.php" method="post">
					  <div class="form-group">
					    <label class="col-lg-2 control-label">Server</label>
					    <div class="col-lg-8">
					      <input type="text" class="form-control" name="server" placeholder="Default is usually localhost">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="col-lg-2 control-label">Database Name</label>
					    <div class="col-lg-8">
					      <input type="text" class="form-control" name="db" placeholder="Database Name">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="col-lg-2 control-label">Database User</label>
					    <div class="col-lg-8">
					      <input type="text" class="form-control" name="user" placeholder="Database UserName">
					    </div>
					  </div>
    				  <div class="form-group">
					    <label for="inputPassword" class="col-lg-2 control-label">Database Password</label>
					    <div class="col-lg-8">
					      <input type="password" class="form-control" name="password" placeholder="Password">
					    </div>
					  </div>
					<div class="row">
					 	 <div class="col-lg-3 col-offset-3">&nbsp;</div>
			  			<div class="col-lg-3 col-offset-3"><button type="submit" class="btn btn-success">Save and Proceed</button></div>
					</div>
			 	 </form>
	</div>
    </div>
    <div id="footer">
      <div class="container">
          <p class="text-muted credit">Fork our code at <a href="https://github.com/KunalGautam/dictionary">GitHub</a></p>
      </div>
    </div>
    
  </body>
</html>
