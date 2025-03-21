<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<script>
    function myfunction(){
        const http = new XMLHttpRequest();
        http.open("POST", "demo.php", true);
        http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        http.onload = function(){
            document.getElementById("demo").innerHTML = this.responseText;
        }
        http.send("fname=Henry");
    }
</script>
<body>
    <button onclick="myfunction()">Click me</button>
    <h1 id="demo"></h1>
</body>
</html>