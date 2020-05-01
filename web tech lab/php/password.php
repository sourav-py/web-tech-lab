<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="interface.css">
    <title>sign up</title>
</head>
<body>
    <div class="center-box">
        <form class="main-form" id="main-form" method="post" action = "password.php">
            <div>
                <label>user name</label>
                <input placeholder="user name" id="name" type="text" name="username">
            </div>

            <div>
                <label>password</label>
                <input placeholder="password" id="pass" type="password" name="pass">
            </div>

            <div>
                <label>retype password</label>
                <input placeholder="retype password"  id="repass" type="password" name="repass">
            </div>

            <div class="buttons">
                <button type = "submit">submit</button>
            </div>
            <?php
                if($_SERVER['REQUEST_METHOD'] == 'POST')
                {
                    if(isset($_POST))
                    {
                        $required = array('username','pass','repass');
                        $error = false;
                        foreach($required as $var)
                        {
                            if(empty($_POST[$var]))
                            {
                                $error = true;
                            }
                        }
                        if($error == true)
                        {
                            echo '<script type="text/javascript">';
                            echo ' alert("Please fill both fields")'; 
                            echo '</script>';
                        }
                        else
                        {
                            $pass = $_POST['pass'];
                            $repass = $_POST['repass'];
                            if($pass == $repass)
                            {
                                echo '<script type="text/javascript">';
                                echo ' alert("Passwords match")'; 
                                echo '</script>';
                            }
                            else
                            {
                                echo '<script type="text/javascript">';
                                echo ' alert("Passwords do not match")'; 
                                echo '</script>';
                            }
                        }
                    }
                }
            ?>  
        </form>
    </div>
</body>
</html>