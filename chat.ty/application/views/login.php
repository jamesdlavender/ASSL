<?php include'template/menu.php'; ?>

<img style="padding-left: 20px; padding-top: 10px; "src="../../images/logo_black.png" alt=""/>
<h3>Login ...</h3>


<?php  echo form_open('main/login_validation'); 
       echo validation_errors(); 
       echo"<p>Username";
	   echo form_input('username');
	   echo"</p>";
	   echo"<p>Password";
	   echo form_password('password');
	   echo"</p>";
	   echo"<p>";
      echo form_submit('login_submit','Login');
	   echo"</p>";

       echo form_close();

?>
<div style="padding-left: 20px;">
<a href='<?php echo base_url()."main/signup" ?>'>Sign Up!</a>
</div>