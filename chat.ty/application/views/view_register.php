<html>
    <head>
        <title>Registration Form</title>
        
<style type="text/css">
    form li {
        list-style:none;
    }
        
</style>
    </head>
    <body>
        <h1>User Registration</h1>
        <p>Please fill in the details below.</p>
        
        <?php
        
        echo form_open($base_url . 'user/register');
        
        $username = array(
            'name'      =>      'reg_username',
            'id'        =>      'reg_username',
            'value'     =>      ''
             
        );
        $name = array(
            'name'      =>      'name',
            'id'        =>      'name',
            'value'     =>      ''
             
        );
        $email = array(
            'name'      =>      'email',
            'id'        =>      'email',
            'value'     =>      ''
             
        );
        $password = array(
            'name'      =>      'password',
            'id'        =>      'password',
            'value'     =>      ''
             
        );
        $password_conf = array(
            'name'      =>      'password_conf',
            'id'        =>      'password_conf',
            'value'     =>      ''
             
        );       
?>
<ul>
    <li>
    <label>Username</label>
        <div>
            <?php echo form_input($username); ?>
        </div>
    </li>
    <li>
    <label>Name</label>
        <div>
            <?php echo form_input($name); ?>
        </div>
    </li>
    <li>
    <label>Email Address</label>
        <div>
            <?php echo form_input($email); ?>
        </div>
    </li>
    <li>
    <label>Password</label>
        <div>
            <?php echo form_password($password); ?>
        </div>
    </li>
    <li>
    <label>Email</label>
        <div>
            <?php echo form_password($password_conf); ?>
        </div>
    </li>
    <li>
        <div>
            <?php echo form_submit(array('name' => 'register'), 'Register'); ?>
                    
        </div>
    </li>
</ul>        
        
        
        <?php echo form_close(); ?>
    </body>
</html>