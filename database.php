<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    define('DB_HOST', '127.0.0.1');
    define('DB_NAME', 'gestion_etudians');
    define('DB_USER' , 'root');
    define('DB_PASSWORD','');

    try{

        $pdo = new PDO( 
            'mysql:host=' .DB_HOST .';
            dbname=' .DB_NAME .';
            charset=utf8',
            DB_USER,
            DB_PASSWORD

        );
        echo "connexion reussir a la base de données.";
    }catch(PDOException $error){
        echo"echec de connection a la base de données:" .$error->getmessage();
        exit;

    }

    ?>
</body>
</html>