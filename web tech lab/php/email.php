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
        <form class="main-form" id="main-form" method="post" action = "email.php">

            <div>
                <label>user name</label>
                <input placeholder="user name" id="name" type="text" name="username">
            </div>

            <div>
                <label>email</label>
                <input placeholder="e-mail" id="mail" type="text" name="email">
            </div>

            
            <div class="buttons">
                <button type = "submit">submit</button>
                
            </div>
            <?php
                if($_SERVER['REQUEST_METHOD'] == 'POST')
                {
                   
                    if(isset($_POST))
                    {
                        $required = array('username', 'email');

                    // Loop over field names, make sure each one exists and is not empty
                        $error = false;
                        foreach($required as $field) {
                        if (empty($_POST[$field])) {
                            $error = true;
                        }
                        }
                        if ($error) 
                        {
                        echo "All fields are required.";
                        } 
                        else 
                        {
                            $email = $_POST['email'];
                            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
                            {
                                echo '<script type="text/javascript">';
                                echo ' alert("Invalid email format")'; 
                                echo '</script>';
                            }
                            else
                            {
                                echo '<script type="text/javascript">';
                                echo ' alert("Email verified")'; 
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