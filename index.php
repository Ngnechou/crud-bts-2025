
<?php
include 'database.php';
echo "hello world!";


if(isset($_POST['create'])){
echo"formulaire soumis";
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];

if(empty($nom) || empty('prenom') || empty($email)){
    echo'<div style="color:red"> tous les champs sont requis.
    </div>';
    
}
}
echo "<pre>";
print_r($_POST);
echo "</pre>";
include 'create.php';
?>






<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body> -->
<!-- </html> -->