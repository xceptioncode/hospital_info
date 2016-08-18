<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>www.DocLab.com  </title>
   <link href="../css/startbootstrap.min.css" rel="stylesheet" type="text/css">
    <style>body{padding-top:50px;}.starter-template{padding:40px 15px;text-align:center;}</style>
   
    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400italic,700italic,400,700" rel="stylesheet" type="text/css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    
    
    
    <!--[if IE]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
  <!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">DocLab</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" title="Our Collection of Templates &amp; Themes">Services <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href=""><i class="fa fa-hospital-o fa-fw"></i> Hospital Record Manager</a>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-stethoscope fa-fw"></i> Doctor's Record Manager</a>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-medkit fa-fw"></i> Laboratory Record Manager</a>
                        </li>
                        
                    </ul>
                </li>
                <li>
                    <a href="" title="Sign up ">Sign up</a>
                </li>
                
                <li>
                    <a href="/help" title="Help with DocLab interface">Help</a>
                </li>
                <li>
                    <a href="/contact" title="Contact the DocLab Team">Contact</a>
                </li>
                <li class="pull-right">
                
                </li>
                
                
                
            </ul>
            
            
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>    
  <header class="sb-page-header">
    <div class="container">
        <h1>User's Information</h1>
        <p>Update details of users.</p>
        <script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?zoneid=1673&serve=C6AILKT&placement=startbootstrapcom" id="_carbonads_js"></script>

    </div>
</header>
    <div class="container">
     <div class='col-md-8'> 
         <h2 class='text-danger'><b> User's Details</b></h2>
         <?php
require_once "connection.php"; 
$id = $_REQUEST['user'];
$select_sql = "SELECT * FROM patient WHERE id= $id";
$result = mysqli_query($mysqli, $select_sql);
$row = mysqli_fetch_array($result);
       printf("<form action='updateDFP.php' method='post' name='forma'>
        <input type='hidden' name='id'  value='%s'><br/>
          <div class='form-group'>
            <label for='name'> User's Name:</label> 
          
              <input type='text' class='form-control' name='name' id='name' value='%s' >
           
          </div>
          <div class='form-group'>
            <label for='surname'> User's Surname:</label> 
          
              <input type='text' class='form-control' id='surname' name='surname' value='%s'>
             
          </div>
          <div class='form-group'>
            <label for='age'> Age:</label> 
          
              <input type='text' class='form-control' name='age' id='age' value='%s' >
              
          </div>
            <div class='form-group'>
            <label for='mobile'> Contact:</label> 
          
              <input type='text' class='form-control' name='contact' id='contact' value='%s' >
              
          </div>
           <div class='form-group'>
            <label for='address'> Address:</label> 
           
              <input type='text' class='form-control' name='address' id='address' value='%s' >
             
          </div>     
          <div class='form-group'>
            <label for='age'> City:</label> 
          
              <input type='text' class='form-control' name='city' id='city' value='%s' >
              
          </div>
          <div class='form-group'>
            <label for='age'> State:</label> 
          
              <input type='text' class='form-control' name='state' id='state' value='%s' >
              
          </div>
          <div class='form-group'>
       
              <button type='submit' class='btn btn-success'> Update </button>  
           </div>   
</form>",$row['id'], $row['name'], $row['father/spouse name'], $row['age'], $row['contact'], $row['address'], $row['city'], $row['state']);
?>     
    </div>
    
    
   </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
