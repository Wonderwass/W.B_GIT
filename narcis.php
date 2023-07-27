<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/narcis.css">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Réservation</h1>
        <hr>
        <form>
        <div class="div_3">
            <div class="div_1">
            <input type="text" id="nom" value="First Name">
            <input type="text" id="email"  value="Last Name">
            <input type="email" id="téléphone" value="Email">
            </div>
            <div class="div_2">
            <select name="" id="plat">
<option value="">Choisir un plat</option>
<option value="15">thiebou dieune </option>
<option value="12">salade de quinoa </option>
<option value="11">sushi burger</option>
<option value="9">filets de poulets panés</option>
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
            <input  class="totalttc"  type="text" value="Total TTC" id="totalttc">

           <div class="accepte">
            <input class="check" type="checkbox"> J’accepte les conditions générales
        </div>
     </form>
    </div>


    <script src="formulaire_exo.js"></script>
</body>
</html>