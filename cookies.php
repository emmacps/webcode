<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Set Cookies</title>
</head>
<body>
    <?php 

    setcookie("username", "John Cater", time()+60);

    //echo $_COOKIE["username"];
    if(isset($_COOKIE["usename"])){
        echo $_COOKIE["username"];
    }else{
        echo "Welcome guest";
    }


    ?>
</body>
</html>