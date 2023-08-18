<?php
$servername = "localhost";// nom du server 
$username = "root";
$password = "";
$db = "biblio";//nom de la base donnée crée
try {//il essaye de se connecter à la base de donné 
$pdo = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
// set the PDO error mode to exception
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Connected successfully";
}
catch(PDOException $e)
{
echo "Connection failed: " . $e->getMessage();
}

echo"<pre>";
var_dump($_POST);
echo"</pre>";
die;

// // Données à insérer
// $firstname = "John";
// $lastname = "Doe";
// $email = "john@example.com";
// $com = "Hi, It's my first message.";

// // Requête d'insertion préparée
// $sql = "INSERT INTO user (firstname, lastname, email, com) VALUES (:firstname, :lastname, :email, :com)";
// $stmt = $pdo->prepare($sql);

// // Associer les valeurs aux paramètres
// $stmt->bindParam(':firstname', $firstname);
// $stmt->bindParam(':lastname', $lastname);
// $stmt->bindParam(':email', $email);
// $stmt->bindParam(':com', $com);

// // Exécuter la requête
// try {
//     $stmt->execute();
//     echo "Données insérées avec succès.";
// } catch (PDOException $e) {
//     echo "Erreur d'insertion : " . $e->getMessage();
// }
?>
