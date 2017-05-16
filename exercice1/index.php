<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.o"/>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <title>Exercice 1 de la partie 7 du PHP</title>
        <!--Vous devez agrémenter votre code avec de l'HTML 5 valide (DOCTYPE, ....)-->
        <!--Créer un formulaire demandant le nom et le prénom. Ce formulaire doit rediriger vers la page user.
            php avec la méthode GET.-->
    </head>
    <body>
        <p>
            Veuillez taper vos nom et prénom :
        </p>
        <!--Insertion d'un formulaire avec la méthode GET (passage en paramètre URL) et qui a pour action d'être 
            dirigé vers user.php-->
        <form action="user.php" method="GET">
            <div id="form">
                <input type="text" name="lastname" />
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