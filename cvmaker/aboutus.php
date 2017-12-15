<!DOCTYPE html>
<html>
  <head>
    <title>CVDESK</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="form.css" type="text/css">
    <script type="text/javascript" src="jquery.min.js"></script>
  <script type="text/javascript" src="bootstrap.js"></script>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
              
  </head>
  <body style="background-color: #00CED1">
    <nav class="navbar navbar-inverse navbar-fixed-top ">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand active" href="index.php">CVDESK</a>
    </div>
    <div class="colllapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav">
      <li ><a href="index.php">Home</a></li>
      <li ><a  data-toggle="modal" href="#myModal">Sign up</a></li>
      <li ><a data-toggle="modal" href="#myModal1">Login</a></li>
      <li class="active" ><a href="">About us</a></li>
      <li ><a href="#footer">Contact us</a></li>
    </ul>
  </div>
</div>
</nav>
  
<!-- <ul class="ul">
  <li class="li"><a href="#home">Home</a></li>
  <li class="li"><a href="#news">News</a></li>
  <li class="li"><a href="#contact">Contact</a></li>
  <li class="li"><a href="#about">About</a></li>
</ul>
 -->
<br>
<br>
<br>

  <div class="first">
  <img src="small.png" alt="Smiley face" width="46" height="46" class="pic">
  <p id="cvmaker">cvmaker</p>

  <div ><p class="abt">About Us</p></div>
 
  <p class="abt"><div class="cre" >Create beautiful,professional resumes in <br/>minutes,<strong>free</strong>.</div></p>
  <img src="big1.jpg" alt="cv" class="img-responsive pic" height="60%" width="60%" style="margin-top:5px; margin-left:3%; float:left">
  <div style="font:normal normal 30px cursive; margin-top:200px"><p>CV Maker hosts your<br/> resumes for you to <br/>share with the world</p></div>
  </div>
  
  <div style="background-color:white; clear:left; height:110px">
  <div class="one"><h1 style="text-align:center; padding:10px; font-size: 116%">more than 800<br/>CV</h1></div>
  <div class="one"><h1 style="text-align:center; padding:10px; font-size: 116%">more than 800<br/>themes</h1></div>
  <div class="one"><h1 style="text-align:center; padding:10px; font-size: 116%">more than 800<br/>text</h1></div>
  </div>

  <div class="para">
<h1 class="tot">About Us</h1>
<p style="font:normal normal 20px cursive">IndiaMART is India’s largest online marketplace, connecting buyers with suppliers. The online channel focuses on providing a platform to SMEs, large enterprises as well as individuals.<p>
<p style="font:normal normal 20px cursive">IndiaMART is India’s largest online marketplace, connecting buyers with suppliers. The online channel focuses on providing a platform to SMEs, large enterprises as well as individuals.</p>

</div>











<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="color:white">Register now</h4>
        </div>
<div class="modal-body"> 
<div class="body-content" >
  <div class="module" style="color:white; font-family:cursive">
    <h1>Create an account</h1>
    <form class="form" action="signup.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="form-group">
      <input class="form-control" type="text" placeholder="Name" name="name" required />
      </div>
      <div class="form-group">
      <input class="form-control" type="text" placeholder="User Name" name="username" required />
      </div>
      <div class="form-group">
      <input class="form-control" type="email" placeholder="Email" name="email" required />
      </div>
      <div class="form-group">
      <input class="form-control" type="password" placeholder="Password" name="password" autocomplete="new-password" required />
      </div>
      <div class="form-group">
      <input class="form-control" type="password" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" required />
      </div>
      <div class="avatar"><label>Select your avatar: </label><input type="file" name="image" accept="image/*" required /></div>
      <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
        </form>
  </div>
</div>
  </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  


 
 <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
       
     <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="color:white">User login</h4>
        </div>
<div class="modal-body"> 
<div class="body-content" >
  <div class="module" style="color:white; font-family:cursive">
    <h1>login</h1>
    <form class="form" action="login.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="form-group">
      <input class="form-control" type="text" placeholder="User Name" name="username" required />
      </div>
      
      <div class="form-group">
      <input class="form-control" type="password" placeholder="Password" name="password" autocomplete="new-password" required />
      </div>
      
      
      <input type="submit" value="login" name="register" class="btn btn-block btn-primary" />
  
    </form>
  </div>
</div>
  </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
















<div class="container wow fadeInUp" style="position: relative; background-color:black; margin-left: 0px; width: 100%; height: 400px; padding-left: 5%; padding-top: 5%">

<h3>CVDESK<span class="glyphicon glyphicon-copyright-mark"></span>All rights reserved.</h3><hr><br><br>

<div class="row" id="footer">
  <div class="col-sm-4">
     <h3><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal ttt"></i>E-mail</h3>
     vaibhavraizada.28398@gmail.com<br>
     shekhark221@gmail.com    
  </div>
  <div class="col-sm-4">
    <h3><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>Mobile No.</h3>
          
    7753846243<br>
    7388341343
  </div>
  <div class="col-sm-4">
    <h3>Contact us on facebook:</h3>
    <h4><a href="https://www.facebook.com/vaibhav.raizada.18" target="_">Vaibhav Raizada</a></h4>
    <h4><a href="https://www.facebook.com/profile.php?id=100006482882966" target="_">Shekhar Kumar</a></h4>
      
  </div>
</div><hr>

</div>

  </body>
</html>