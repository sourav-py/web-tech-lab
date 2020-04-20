
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="bootstrap.css">
    <style>
        label{
            font-size: 20px;
            font-weight: bold;
        }
        h6{
            font-size: 45px;
            font-weight: bold;
            color:green;
            text-shadow: black 2px 2px 2px;
            margin-top: 5px;
            margin-left: 20px;
        }
        form{
            margin-top: 150px;
            margin-left: 250px;
             margin-right: 350px;
             border:solid green 4px;
             padding-left: 45px;
             padding-right: 45px;
             padding-bottom: 20px;
             box-shadow:10px 15px 28px #077cb3;
             background: rgba(255, 255, 255, 0.5)      
        }
    </style>
    <title>SORT TEXT</title>
</head>
<body style="background:url('st.jpg'), rgba(0, 0, 0, 0.2);
background-repeat: no-repeat;background-size: cover;">
<div class="container">
<form method="post">
<!-- title of the project -->    
    <h6>Sorting the TEXT</h6>
<!--  EXTER SOME TEXT FIELD -->
    <div class="form-group">
        <label>Enter some Paragraph<font color="red">*</font></label>
        <input type="text" placeholder="This is a paragraph" class="form-control" id="text" name="text"/>
    </div>

<!--   submit button -->
    <div>
        <button name="button1" type="submit" class="btn btn-success btn-lg"style="margin-left:100px">Sort text</button>
    </div> 
    <?php
    if(array_key_exists('button1', $_POST)) { 
            button1(); 
        }
          function button1()
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
            $x = "=>".$array[0];
            for($i=1;$i<sizeof($array);$i++)
            {
                $x = $x." <br>  "."=>".$array[$i];
            }
          echo "<h4> Sorted words is: <br> <font color='red'>" .$x. "</font></h4>";
        }
    ?>
</form>
</div>
</body>
</html>

