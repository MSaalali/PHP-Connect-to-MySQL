<?php
if(isset($_POST["submit"])){
 
try {
 $connect = new PDO ("mysql: host=localhost; dbname=brief1","root","");
 $connect->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 echo "connexion réussite";
}
catch(PDOException $e){
echo "Erour de conexion".$e->getMessage();
}
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>brief1</title>
</head>
<body>
 <form action="" method="POST">
    <input type="submit" name="submit" value= "Click" >
 </form>
</body>
</html>

<style>
 body{
 position: relative;
 background-color: rgb(197, 186, 200);
 background-repeat: no-repeat;
 height: 100vh;
 display: flex;
 justify-content: center;
 }
 input{
  background-color: ;
  border-radius:50px;
  height: 30px;
  width:100px;
 }
</style>
<?php 
?>