<?php   session_start();  ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Oturum</title>
</head>
<body>
<?php
if(!isset($_SESSION["ad"]) || !isset($_SESSION["sifre"])):
?>
<center>
    <form action="git.php" method="post" style="background: cornsilk">
        <hr>
      <input type="text" name="ad"><br><br>
      <input type="password" name="sifre"> <br><br>
        <hr>
      <input type="submit" name="button" style="background: seagreen; color: beige">
    </form>
</center>
<?php
else:
echo "Zaten giris yapmissiniz <a href='git.php'>Profile ged</a>";
endif;
?>
</body>
</html>