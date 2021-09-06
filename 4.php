<!doctype html>
<html>
<body>

<?php

$login = $_POST['login'];
$pass = $_POST['pass'];

$tab_log = ['jacek','jd','jd2','jd3','jd4'];
$tab_pass = ['owca','haslo','haslo2','haslo3','haslo4'];

if($login == "jd" && $pass=='haslo'){
echo "zostales zalogowany";

}

else{

    echo "naura";
}
?>

<form action = "" method = "POST">
         Login: <input type = "text" name = "login" />

         <form action = "" method = "POST">
         Hasło: <input type = "text" name = "pass" />

         <input type = "submit" />
         




</body>
</html>