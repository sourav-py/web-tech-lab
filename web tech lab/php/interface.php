<!---- UE183106 SOURAV SINGH --->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="interface.css">
    
    <title>Salary</title>
</head>
<body>
    <!---- UE183106 SOURAV SINGH --->
    <div class="center-box">
        <form class="main-form" id="main-form" action="test.php" method = "POST" name='salary'>
            <div>
                <label>Basic Salary</label>
                <input placeholder="basic salary" id="bs" type="text" name="bs">
            </div>

            <div>
                <label>DA Percentage</label>
                <input placeholder="da percentage" id="dp"type="text" name="da">
            </div>

            <div>
                <label>TA</label>
                <input placeholder="ta"  id="ta" type="text" name="ta">
            </div>

            <div class="button">
                <button type = "submit">calculate</button>
            </div>
            <div class="answer" id="answer">

            <!---FILL THE DIVISION WITH PHP-->
            <?php
                if($_SERVER["REQUEST_METHOD"] == "POST")
                {
                    if(isset($_POST))
                    {
                        $required = array('bs', 'da', 'ta');

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
                            $bs = $_POST['bs'];
                            $da = $_POST['da'];
                            $ta = $_POST['ta'];
                            $res = $bs + ($da/100)*$bs + $ta; 
                            echo "Net Salary : ";
                            echo($res); 
                        }       
                    }
                }
            ?>           
            </div>
        </form>
    </div>
</body>
</html>

