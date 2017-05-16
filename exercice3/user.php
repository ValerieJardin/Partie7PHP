<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.o"/> 
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <title>Transcription du formulaire</title>
    </head>
    <body>
        <!--script php pour afficher les variables de tableau associatif $_GET + utilisation de la fonction strip_tags 
            qui permet d'effacer les balises HTMP-->
        <p>Tu t'appelles : <?php echo strip_tags($_GET['firstname']) . ' ' . strip_tags($_GET['lastname']); ?> !</p>
        <div class="buttons">
            Pour changer les informations, <a href="index.php"><button>Cliquez ici</button></a> pour revenir au formulaire.
        </div>
    </body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP - partie 7, Exercice 3 </title>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="centered">
            <h1>Exercice 3</h1>
            <?php
            //on vérifie simplement que l'utilisateur a bien rempli le formulaire. Si ce n'est pas le cas...
                if(empty($_GET['name']) && empty($_GET['lastName'])) {
            ?>
            <!-- on affiche un message d'erreur : -->
                <p>Nous n'avons pas pu récupérer vos informations</p>
            <?php
            //sinon, isset vérifie la présence du paramètre dans l'url...
                }else{
            ?>
            <!-- nous récupérons les paramètres de l'url en utilisant le tableau associatif spécifique $_GET qui stocke les valeurs demandées -->
                <p>Vous vous appelez <?php echo $_GET['name'] . ', ' . $_GET['lastName']; ?></p>
            <?php
                }
            ?>
        </div>
        <!-- inclusion d'un template qui reprend le menu de navigation pour les exercices-->
        <?php include("../nav/index.php"); ?>
    </body>
</html>