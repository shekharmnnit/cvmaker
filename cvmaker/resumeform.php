
<!DOCTYPE html>

<html>
<head><title>lkjjkkl</title>
  <?php
if(isset($_POST['1']))
$name="tempmain1.php";
elseif (isset($_POST['2'])) {
 $name="tempmain2.php";

}
elseif (isset($_POST['3'])) {
 $name="tempmain3.php";

}
elseif (isset($_POST['4'])) {
 $name="tempmain4.php";

}
elseif (isset($_POST['5'])) {
 $name="tempmain5.php";

}elseif (isset($_POST['6'])) {
 $name="tempmain6.php";

}
else
echo"<script>alert('Acess Denied');window.location='index.php'</script>";
if(!isset($_POST['2']))
{
?>
<style type="text/css">
#colortemp2{
display:none;
}</style>
<?php
}?>
<?php
if(!isset($_POST['3']))
{
?>
<style type="text/css">
#colortemp3{
display:none;
}</style>
<?php
}?>
<?php
if(!isset($_POST['4']))
{
?>
<style type="text/css">
#colortemp4{
display:none;
}</style>
<?php
}?>
<?php
if(!isset($_POST['5']))
{
?>
<style type="text/css">
#colortemp5{
display:none;
}</style>
<?php
}?>
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
    <li role="presentation"><a href="#fonts" >Fonts</a></li>

  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
   
    <form class="form form-group" action="<?php echo $name ?>" method="post" enctype="multipart/form-data" autocomplete="off">
       <div  id="home">
      <p><font color="#C0C0C0">Full name</font></p>
      <p class="name">
        <input name="name" type="text" class="form-control validate[custom[onlyLetter],length[0,100]] feedback-input" placeholder="Name" id="name"  />
      </p>
      <p><font color="#C0C0C0">E-mail</font></p>
      <p class="email">
        <input name="email" type="email" class="validate[custom[email]] feedback-input" id="email" placeholder="Email"  />
      </p>
      <p><font color="#C0C0C0">Address</font></p>
      <p class="text">
        <textarea name="address" class="validate[length[6,300]] feedback-input" id="comment" placeholder="Address"></textarea>
      </p>
      <p><font color="#808080">Phone no.</font></p>
       <p class="number">
        <input name="phoneno" type="number" class="form-control validate[custom[onlyLetter],length[0,100]] feedback-input" placeholder="phone no." id="name"  />
      </p></div>
      <div  id="Education">
        <p><font color="#C0C0C0">Education</font></p>
      <p class="text">
        <textarea name="eductaion" class="validate[length[6,300]] feedback-input" id="comment" placeholder="School,College....(max 50 word)"></textarea>
      </p>
    
      </div>
      <div  id="work">
        <p><font color="#C0C0C0">Professional Skills</font></p>
      <p class="text">
        <textarea name="professionalskills" class="validate[length[6,300]] feedback-input" id="comment" placeholder="Professional skills(max 50 word)"></textarea>
      </p>
      </div>
       <div  id="Interests">
        <p><font color="#C0C0C0">Fiels of Interests</font></p>
      <p class="text">
        <textarea name="interests" class="validate[length[6,300]] feedback-input" id="comment" placeholder="Field of interests(max 50 word)"></textarea>
      </p>
     </div>
     <div id="Project">
      <p><font color="#C0C0C0">Projects</font></p>
      <p class="text">
        <textarea name="projects" class="validate[length[6,300]] feedback-input" id="comment" placeholder="Your Projects(max 50 word)"></textarea>
      </p>
      
         </div>
         <div  id="Pro">
          <p><font color="#C0C0C0">Profile</font></p>
      <p class="text">
        <textarea name="profile" class="validate[length[6,300]] feedback-input" id="comment" placeholder="Your Profile(max 50 word)"></textarea>
      </p>
      
       </div>
       <div class="fonts" id="#fonts">
        <p><font color="#C0C0C0">Choose Fonts</font></p>
        <select name="fonts" class="form-control">
  <option value="arial">Original</option>
  <option value="comic sans ms">Comic Sans MS</option>
  <option value="times new roman">Times New Roman</option>
  <option value="tahoma">Tahoma</option>
  <option value="verdana">Verdana</option>
  <option value="courier new">Courier New</option>
  <option value="geogia">Georgia</option>
  <option value="garamond">Garamond</option>
  <option value="impact">Impact</option>
</select></div><br>
<div class="colortemp2" id="colortemp2">
  <p><font color="#C0C0C0">Choose Color scheme</font></p>
  <select name="colorscheme2" class="form-control">
  <option value="#F5DEB3">Original</option>
  <option value="#00ced1">DarkTurquoise(Blue)</option>
  <option value="#33ff33">Green</option>
  <option value="#ff1aff">DarkPink</option>
  <option value="#800080">Voilet</option>
  <option value="#cc9900">Mustard</option>
  <option value="#009933">DarkGreen</option>
</select>
</div>
<div class="colortemp3" id="colortemp3">
  <p><font color="#C0C0C0">Choose Color scheme</font></p>
  <select name="colorscheme3" class="form-control">
  <option value="#ffb3b3">Original</option>
  <option value="#00ced1">DarkTurquoise(Blue)</option>
  <option value="#33ff33">Green</option>
  <option value="#ff1aff">DarkPink</option>
  <option value="#800080">Voilet</option>
  <option value="#cc9900">Mustard</option>
  <option value="#009933">DarkGreen</option>
</select>
</div>
<div class="colortemp4" id="colortemp4">
  <p><font color="#C0C0C0">Choose Color scheme</font></p>
  <select name="colorscheme4" class="form-control">
  <option value="#ffe8e6">Original</option>
  <option value="#00ced1">DarkTurquoise(Blue)</option>
  <option value="#33ff33">Green</option>
  <option value="#ff1aff">DarkPink</option>
  <option value="#800080">Voilet</option>
  <option value="#cc9900">Mustard</option>
  <option value="#009933">DarkGreen</option>
</select>
</div>
<div class="colortemp5" id="colortemp5">
  <p><font color="#C0C0C0">Choose Color scheme</font></p>
  <select name="colorscheme5" class="form-control">
  <option value="#800080">Original</option>
  <option value="#00ced1">DarkTurquoise(Blue)</option>
  <option value="#33ff33">Green</option>
  <option value="#ff1aff">DarkPink</option>
  <option value="#800080">Voilet</option>
  <option value="#cc9900">Mustard</option>
  <option value="#009933">DarkGreen</option>
</select>
</div>
<div class="resumepic">
  <label>Resume pic</label>
  <p><input type="file" name="image"></p>
</div>
<br><br>

      <div class="submit">
        <input type="submit" value="QUICK PREVIEW" name="preview" id="button-yellow"/>
        <div class="ease"></div>
      </div><br><br>
      <div class="submit">
        <input type="submit" value="SEND" name="submit" id="button-blue"/>
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







            