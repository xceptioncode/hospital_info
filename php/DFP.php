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
    <style>
        .jumbotron{
   position: relative;
    background: #2a3 url("../images/doctors.jpg") ;
    width: 100%;
    height: 100%;
    background-size: cover;
    overflow: hidden;
    
        }
    </style>
    
    
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
 
   
        <div class='jumbotron'>
            <div class='container'>
        <h1 style='color: crimson;'>Registered Users</h1>
        <p>Add, Update and Delete users.</p>
        <form action="../html/patient.html">
        <button class='btn btn-success'>    Add New    </button>
        </form>
        <script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?zoneid=1673&serve=C6AILKT&placement=startbootstrapcom" id="_carbonads_js"></script>
        </div>
    </div>
    
 
    <div class="container">
        
     <div class='col-md-10'>
         <div class='row'>
             <div class='col-md-2'>
                        <img src="../images/user1.png" class="img-circle" alt="user" width="60" height="60">
             </div>
<h2 class='text-danger'><b> Registered Users</b></h2>
             
         </div>
        <hr/>
   <form action="editDFP.php" method="post">       
        <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Surname</th>
        <th>Age</th>
        <th>Contact</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>35</td>
        <td>xxxxxxxxxx</td>
          <td><button class='btn btn-success'>update</button>
          <button class='btn btn-danger'>delete</button></td>
      </tr>
      <?php
        require_once "connection.php"; 
        $select_sql = "SELECT id, name, `father/spouse name`, age, contact FROM patient";
        $result = mysqli_query($mysqli, $select_sql);
        while ($row=mysqli_fetch_array($result)){
            $pole1=$row['name'];
            $pole2=$row['father/spouse name'];
            $pole3=$row['age'];
            $pole4=$row['contact'];
        echo "<tr><td>$pole1</td><td>$pole2</td><td>$pole3</td><td>$pole4</td><td>";
        printf("<input button class='btn btn-success' type='submit'  name='user' value='update' onclick=this.value='%s';>", $row['id']);
        echo " ";
        printf("<input button class='btn btn-danger' type='submit'  name='user' value='delete'  onclick=this.value='%s' formaction='delete.php'>", $row['id']);
        echo "</td></tr>";
        }
    ?>
    </tbody>
  </table>
</form>
         
         
         </div>
    </div>
    
    
   </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
