<?php
        session_start();
?>

<html>
        <head>
                <meta charset="UTF-8">
                <meta name=viewport content="width=device-width, initial-scale=1">
                <title> Elli & Hugo</title>
                <link rel="stylesheet" type="text/css" href="css/login.css">
        </head>
        <body>
                  
                                <?php
                                        if(isset($_SESSION['id'])){
                                                echo "
                                                        <form action='includes/logout.php'>
                                                                <button type='submit' class='login-submit login'>Log out</button>
                                                        </form>                                                
                                                        <form>
                                                                <button type='submit' class='login-submit login'>Edit</button>
                                                        </form>                                                
                                                        <form action='includes/create-new.php'>
                                                                <button type='submit' class='login-submit login'>Add new</button>
                                                        </form>
                                                ";                                
                                        } else {                                        
                                                echo " 
                                                        <div class='center-vertically'>
                                                                <div class='login-card'> 
                                                                        <h1>Log-in</h1><br>
                                                                        <form action='includes/login.php' method='POST'>
                                                                                <input type='text' name='uid' placeholder='Username'>
                                                                                <input type='password' name='pass' placeholder='Password'>
                                                                                <button type='submit' class='login-submit login'>Login</button>
                                                                        </form>
                                                                </div>
                                                        </div>
                                                ";
                                        }
                                ?>
                        
        </body>
</hmtl>