<!DOCTYPE html>

<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700" > 
<link rel="stylesheet" href="resumeform.css" >
<script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
</head>
<body>
<div id="form-main">
  <div id="form-div">

<div>
<!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" >Information</a></li>
    <li role="presentation"><a href="#Education"  >Education</a></li>
    <li role="presentation"><a href="#work" >Professional Skills</a></li>
    <li role="presentation"><a href="#Interests" >Interest</a></li>
    <li role="presentation"><a href="#Project" >Projects</a></li>
    <li role="presentation"><a href="#Pro" >Profile</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
   
    <form class="form form-group" action="buildresume.php" method="post" enctype="multipart/form-data" autocomplete="off">
       <div  id="home">
      <p><font color="#C0C0C0">Full name</font></p>
      <p class="name">
        <input name="name" type="text" class="form-control validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Name" id="name" required />
      </p>
      <p><font color="#C0C0C0">E-mail</font></p>
      <p class="email">
        <input name="email" type="email" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email" required />
      </p>
      <p><font color="#C0C0C0">Address</font></p>
      <p class="text">
        <textarea name="address" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="Address"></textarea>
      </p>
      <p><font color="#808080">Phone no.</font></p>
       <p class="number">
        <input name="phoneno" type="number" class="form-control validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="phone no." id="name" required />
      </p></div>
      <div  id="Education">
        <p><font color="#C0C0C0">Education</font></p>
      <p class="text">
        <textarea name="eductaion" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="School,College....(max 50 word)"></textarea>
      </p>
    
      </div>
      <div  id="work">
        <p><font color="#C0C0C0">Professional Skills</font></p>
      <p class="text">
        <textarea name="professionalskills" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="Professional skills(max 50 word)"></textarea>
      </p>
      </div>
       <div  id="Interests">
        <p><font color="#C0C0C0">Fiels of Interests</font></p>
      <p class="text">
        <textarea name="interests" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="Field of interests(max 50 word)"></textarea>
      </p>
     </div>
     <div id="Project">
      <p><font color="#C0C0C0">Projects</font></p>
      <p class="text">
        <textarea name="projects" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="Your Projects(max 50 word)"></textarea>
      </p>
      
         </div>
         <div  id="Pro">
          <p><font color="#C0C0C0">Profile</font></p>
      <p class="text">
        <textarea name="profile" class="validate[required,length[6,10]] feedback-input" id="comment" placeholder="Your Profile(max 50 word)"></textarea>
      </p>
      
       </div>
      <div class="submit">
        <input type="submit" value="SEND" id="button-blue"/>
        <div class="ease"></div>
      </div>
      
    </form>
     


    
    
        </div>
     

 


    
     



    





        
  


     





 
  </div>
  </div>
  <!-- close script -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </div>
</body>
</html>







            