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
        <form class="main-form" id="main-form" method="post" action = "sort.php">

            <div>
                <label>sentence</label>
                <input placeholder="sentence/text"  type="text" name="text">
            </div>

            
            <div class="buttons">
                <button type = "submit">submit</button>
                
            </div>
            <div class="answer">
                <?php
                    if($_SERVER['REQUEST_METHOD'] == 'POST')
                    {
                    
                        if(isset($_POST))
                        {
                            if(empty($_POST['text']))
                            {
                            echo "Field is empty.";
                            } 
                            else 
                            {
                                $str = isset($_POST['text'])?$_POST['text']:'';
                                $str1 = ''.$str;
                                $str1 = strtolower($str1);
                                $array = explode(' ',$str);
                                $array1 = explode(' ',$str1);
                                for($i=0;$i<sizeof($array);$i++)
                                {
                                    for($j=$i+1;$j<sizeof($array);$j++)
                                    {
                                        if($array1[$i]>$array1[$j])
                                        {
                                        $temp=$array1[$i];
                                        $array1[$i]=$array1[$j];
                                        $array1[$j]=$temp;
                                        $temp=$array[$i];
                                        $array[$i]=$array[$j];
                                        $array[$j]=$temp;
                                        }
                                    }
                                }
                                echo "--Sorted--<br>";
                                for($i=0;$i<sizeof($array);$i++)
                                {
                                    echo($array[$i]);
                                    echo " ";
                                }
                                
                            }
                                                
                            
                        }
                    }
                ?>
            </div>
                
        </form>
    </div>
</body>
</html>