<?php
        if(!empty($_POST)){
                session_start();
                require_once('class-db.php');
                $login = $_POST['uid']; 
                $pass = $_POST['pass'];
                
                function test_input($data) {
                        $data = trim($data);
                        $data = stripslashes($data);
                        $data = htmlspecialchars($data);
                        return $data;
                }
                
                $login = test_input($login);
                $pass = test_input($pass);
                
                $query = "SELECT * FROM user WHERE email = '$login' AND pwd = '$pass'";                
                $result = $db->select($query);
                
                $id = $result[0]->ID;
                
                $_SESSION['id'] = $id;
                header("Location: http://localhost/elliandhugo/admin/login.php");
                die();
        }
?>