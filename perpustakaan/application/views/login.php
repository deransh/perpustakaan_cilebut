<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Admin login form</title>
  
  
  
      <link rel="stylesheet" href="../assets/css/styles.css">

  
</head>

<body>
  <div id="clouds">
	<div class="cloud x1"></div>
	<!-- Time for multiple clouds to dance around -->
	<div class="cloud x2"></div>
	<div class="cloud x3"></div>
	<div class="cloud x4"></div>
	<div class="cloud x5"></div>
</div>

 <div class="container">


      <div id="login">

        <form action="proses" method="post">

          <fieldset class="clearfix">

            <p><span class="fontawesome-user"></span> <input type="text" id="user_name" name="user_name" class="form-control" placeholder="user_name" required="required" onfocus="this.style.color='#000'"></p> <!-- JS because of IE support; better: placeholder="Username" -->
            <p><span class="fontawesome-lock"></span> <input type="password" id="password" name="password" class="form-control" placeholder="Password" required="required" onfocus="this.style.color='#000'"></p> <!-- JS because of IE support; better: placeholder="Password" -->
            <p><input type="submit" value="Sign In"></p> 

          </fieldset>

        </form>

      </div> <!-- end login -->

    </div>
    <div class="bottom">  <a href="forgot_password">Forgot Password?</a></div>
  
  
</body>
</html>
