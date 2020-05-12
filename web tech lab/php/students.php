<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="interface.css">
    <title>get result</title>
</head>
<body>
    <div class="center-box">
        <form class="main-form" id="main-form">

            <div>
                <label>Roll No</label>
                <input placeholder="enter roll"  type="text" name="text" onkeyup="showResult(this.value)">
            </div>
            <div class = "answer" id="answer">
            </div>
        </form>
    </div>
    <script defer>
        function showResult(str) {
            console.log("inside function!");
            if (str.length == 0) {
                document.getElementById("answer").innerHTML = "";
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("answer").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "fetch_result.php?par=" + str, true);
                xmlhttp.send();
            }
        }
    </script>
</body>
</html>