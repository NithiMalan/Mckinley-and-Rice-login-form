<?php
session_start();
session_unset();
session_destroy();
?>

<html>
<head>
<title>Login Page</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<style>
body{
	
	background-image:url("bg.jpg") ;
	background-repeat: no-repeat ;
	background-attachment: fixed;
    
	background-size: cover;
	
}
h2 { color:#900C3F;}
h3 { color:#F1C40F;}</style>
</head>
<body>
<div id="main">
  <!-- content -->
  <div id="content">
    <div class="indent1">
      <h1>Login</h1>
      <h3>Please enter your login information.</h3>
      <form name="loginForm" method="post" action="https://reqres.in/api/login">
      <table align="center">
        <tr>
          <td style="color:#89b700"><b>Login</b></td>
          <td><input name="login" type="text" id="login" /></td>
        </tr>
		<tr>
          <td style="color:#89b700"><b>Password</b></td>
          <td><input name="password" type="password"/></td>
        </tr>
		<tr>
		  <td>	</td>
		  <td>	</td>
		 </tr>
		<tr>
          <td colspan="2" align="center" >
            <input type="submit" name="submit" value="Login" /></td>
         </tr>
      </table>
    </div>
  </div>
</div>
</body>
</html>
