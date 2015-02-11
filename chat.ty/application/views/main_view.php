<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Welcome</title>
        
        
        
    </head>
    <body>
        
        <?php echo "Testing Database App" ;?>
        <br/>
        <?php 
        
        foreach($user_data as $row)
        {
            echo "your username is: " . $row->username;
            echo "<br/>";
            echo "your password is: " . $row->password;
            
        }
        
        ?>
        
    </body>
    
</html>

