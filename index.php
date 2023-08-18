<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com%22%3E/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@100&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1>Réservation</h1>
        <hr>
        <!-- la méthode post permet de pas afficher les informations sur l'url à l'inverse de la méthode get -->
        <form action="action.php" method="post">
            <select class="cv" name="civilite">
                <?php
                $civilites = ["Monsieur", "Madame", "Mademoiselle"]; //Je déclare une variable, et un tableau.
                foreach ($civilites as $value) { //foreach est une boucle qui me permettra d'afficher mes 3 ellement du tableau qui commencera par Monsieur ainsi de suite 
                    // je ferme ma balise php pour ajouter un element html ?>
                    <option value="<?php echo ($value); //sera utile pour la base de données  ?>"> <?php echo $value; //pour afficher mes ellement dans le menu déroulant?></option>;
                    <?php
                }

                ?>
            </select>
            <div class="div_3">
                <div class="div_1">
                    <input type="text" id="nom" value="NOM" name="name">
                    <input type="email" id="email" value="EMAIL" name="email">
                    <input type="number" id="téléphone" placeholder="numero de telephone" value="n° de téléphone" name="tel">
                </div>
                <div class="div_2">
                    <select name="" id="plat">
                        <option value="">Choisir un plat</option>
                        <option value="15">thiebou dieune </option>
                        <option value="12">salade de quinoa </option>
                        <option value="11">sushi burger</option>
                        <option value="9">filets de poulet panes</option>
                    </select>
                    <select name="" id="dessert">
                        <option value="">Choisir un déssert</option>
                        <option value="churros maison">churros maison </option>
                        <option value="biscuits au pepites">biscuits au pepites</option>
                        <option value="buche de noel">buche de noel</option>
                        <option value="gateau au fromage">gateau au fromage</option>
                    </select>
                </div>
            </div>
            <input class="totalht" type="text" value="Total HT" id="totalht">
            <input class="totalttc" type="text" value="Total TTC" id="totalttc">

            <div class="accepte">
                <input class="check" type="checkbox"> J’accepte les conditions générales
            </div>

            <textarea name="" id="" cols="40" rows="10"></textarea>
    </div>
    <button type="submit"></button>

    </form>



    <script src="formulaire_exo.js"></script>
</body>

</html>