<?php session_start();

if( isset($_SESSION["ad"]) || isset($_SESSION["sifre"]) ):

    echo "giris var";
else:


@$name=htmlspecialchars($_POST["ad"]);
@$password=htmlspecialchars($_POST["sifre"]);

$db_ad="Tamerlan";
$db_pass="123";

if($name!="" && $password!=""):

       if($name==$db_ad && $password==$db_pass) {

       $_SESSION['ad'] = $name;
       $_SESSION['sifre'] = $password;
       echo "Giriş başarıyla gerçekleşti";

       }
       else
       {

       echo "Bilgiler yalnis <a href='test.php'>Geri Qayit</a>";

       }
else:
       echo "Bilgi girilmedi";
endif;

endif;
?>