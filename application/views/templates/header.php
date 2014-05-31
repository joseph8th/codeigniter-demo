<!DOCTYPE html>
<html>
  <head>

    <title>CI Demo App for CinemaEquip | <?php echo $title ?></title>

    <!-- Used Twitter Bootstrap for quick & lazy CSS -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="/assets/css/custom.css" rel="stylesheet" media="screen">
 
    <!-- jQuery CDNs for jquery.validate plugin -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>

  </head>

  <body>
    <nav id="myNavbar" class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">CodeIgniter Demo</a>
        </div>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="nav navbar-nav">
            <li>
              <a href="/">Home</a>
            </li>
            <li>
              <a href="/index.php/users">Users</a>
            </li>
            <li>
              <a href="/index.php/users/create">Add User</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      <div class="jumbotron">

