<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.o"/>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <title>Exercice 5 de la partie 7 du PHP</title>
        <!--Vous devez agrémenter votre code avec de l'HTML 5 valide (DOCTYPE, ....)-->
        <!--Créer un formulaire sur la page index.php avec :
                - Une liste déroulante pour la civilité (Mr ou Mme)
                - Un champ texte pour le nom
                - Un champ texte pour le prénom
            Ce formulaire doit rediriger vers la page index.php.Vous avez le choix de la méthode.-->
    </head>
    <body>
        <p>
            Veuillez taper vos nom et prénom :
        </p>
        <!--Redirection du formulaire par la méthode POST vers la page index.php-->        
        <form action="index.php" method="POST">
            <div id="form">
                <select name="gender">
                    <option>Monsieur</option>
                    <option>Madame</option>
                </select>
                <label for="lastname">Votre nom de famille</label>
                <input type="text" name="lastname" />
                <label for="firstname">Votre prénom</label>
                <input type="text" name="firstname" />
                <input type="submit" value="Valider" />
            </div>
        </form>
        <div class="buttons">
            <a class="button" href="http://partie7/exercice1/index.php" title="Exercice 1">Exercice 1</a>
            <a class="button" href="http://partie7/exercice2/index.php" title="Exercice 2">Exercice 2</a>
            <a class="button" href="http://partie7/exercice3/index.php" title="Exercice 3">Exercice 3</a>
            <a class="button" href="http://partie7/exercice4/index.php" title="Exercice 4">Exercice 4</a>
            <a class="button" href="http://partie7/exercice5/index.php" title="Exercice 5">Exercice 5</a>
            <a class="button" href="http://partie7/exercice6/index.php" title="Exercice 6">Exercice 6</a>
            <a class="button" href="http://partie7/exercice7/index.php" title="Exercice 7">Exercice 7</a>
            <a class="button" href="http://partie7/exercice8/index.php" title="Exercice 8">Exercice 8</a>
        </div>
    </body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>exo 5</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <ul id="menu_horizontal">
            <li><a href="../exercice4/index.php">Exercice 4</a></li>
            <li><a href="../exercice6/index.php">Exercice 6</a></li>
        </ul>
        <form name="index" action="index.php" method="POST">
            <div id="formulaire">
                <select name="sexe" size="1">
                    <option>Homme</option>
                    <option>Femme</option>
                </select>
                <label for="nom">Nom : </label>
                <input type="text" name="nom" placeholder="Nom">
                <label for="prenom">Prénom : </label>
                <input type="text" name="prenom" placeholder="Prénom">
                <input type="submit" value="Valider" />
            </div>
        </form>
        <p>
            Bonjour, tu t'appelles 
            <?php echo isset($_POST['prenom']) ? strip_tags($_POST['prenom']) : ''; ?> 
            <?php
            if (isset($_POST['nom'])) {
                echo strip_tags($_POST['nom']);
            } else {
                echo '';
            }
            ?>
            et tu es un(e) 
            <?php echo strip_tags(isset($_POST['sexe'])) ? $_POST['sexe'] : ''; ?>
        </p>
    </body>
</html>