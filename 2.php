<!doctype html>
<html>
<body>


<?php
    $pobierz = $_POST['name'];
    for($i=1; $i<$pobierz; $i++) { 
    

        $liczba = rand(0,100);
        if($liczba%2==0){
        echo $liczba;
        echo "<br>";
        }
        }
   
?>
<html>
   <body>
   
      <form action = "" method = "POST">
         Liczbę daj: <input type = "number" name = "name" />
         <input type = "submit" />
      </form>
      
   </body>
</html>



</html>
</body>