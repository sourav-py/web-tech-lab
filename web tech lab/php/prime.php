<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="interface.css">
    <title>Prime Sum</title>
</head>
<body>
    <div class="center-box">
        <form class="main-form" id="main-form" action = "prime.php" method = "post">
            <div>
                <label>First Number</label>
                <input placeholder="x" id="x" type="text" name = "x">
            </div>

            <div>
                <label>Second Number</label>
                <input placeholder="y" id="y"type="text" name = "y">
            </div>
            <div class="buttons">
                <button type = "submit">calculate</button>
            </div>
            <div class="answer" id="answer">
                <?php
                    if($_SERVER['REQUEST_METHOD'] == 'POST')
                    {
                       
                        if(isset($_POST))
                        {
                            $required = array('x', 'y');

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
                                $x = $_POST['x'];
                                $y = $_POST['y'];
                                $sum = 0;
                                for($num = $x;$num <= $y;$num++)
                                {
                                    $notPrime = false;
                                    for($i = 2;$i <= $num;$i++)
                                    {
                                        if($num % $i == 0 and $i != $num)
                                        {
                                            $notPrime = true;
                                        }
                                    }
                                    if($notPrime == false and $num != 1)
                                    {
                                        $sum += $num;
                                    }
                                }
                                echo "Sum is : ";
                                echo $sum;
                            
                            }
                        }
                    }
                ?>
            </div>
        </form>
    </div>
</body>
</html>