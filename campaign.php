<?php
  include_once('session.php');  
  if(!isset($_SESSION['username']))
  {
    header('Location:index.php');
  }
  else
  {
    $username = $_SESSION['username'];
    $id = $_GET['id'];
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Ronak Patel">
    <title>Praxis</title>
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://getbootstrap.com/examples/dashboard/dashboard.css" rel="stylesheet">
    <script src="./js/ie-emulation-modes-warning.js"></script>
 </head>
 <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://praxisonline.mybluemix.net/dashboard.php">Praxis</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php">Logout</a></li>
            <li><a href="settings.php">Settings</a></li>
            <li><a href="help.php">Help</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="dashboard.php">Dashboard<span class="sr-only">(current)</span></a></li>
            <li><a href="analytics.php">Analytics</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      <h1 class="page-header">Dashboard</h1>
        <div class="container">
          
            <form class="form-horizontal" role="form" action="campaigne.php?id=<?php echo $id;?>" method="POST">
              <div class="form-group">
                <label class="control-label col-sm-2" for="email">Name</label>
                <div class="col-sm-10">
                  <input type="text" name="campaignname" class="form-control" placeholder="Campaign Name">
                </div>
                 <label class="control-label col-sm-2" for="email">Text</label>
                <div class="col-sm-10">
                  <input type="text" name="campaigntext" class="form-control" placeholder="Campaign Text">
                </div>
              </div>
              <div class="form-group"> 
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </div>
            </form>
         
        </div>
    </div>
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./js/ie10-viewport-bug-workaround.js"></script>
  
</body>
</html>