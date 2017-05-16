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