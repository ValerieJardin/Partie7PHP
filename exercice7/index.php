<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.o"/>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <title>Exercice 7 de la partie 7 du PHP</title>
        <!--Au formulaire de l'exercice 5, ajouter un champ d'envoi de fichier. Afficher en plus de ce qui est 
        demandé à l'exercice 6, le nom et l'extension du fichier.-->
    </head>
    <body>
        <p>
            Mon formulaire :
        </p>
        <?php
        /** Utilisation de la fonction isset() pour vérifier que les différentes variables existent. Détermine si une variable 
         * est définie et est différente de NULL **/
        if (isset($_POST['gender']) && isset($_POST['lastname']) && isset($_POST['firstname']) && isset($_FILES['myFile']) && $_FILES['myFile']['error'] == 0) {
            /** Récupération de  l'extension du fichier dans une variable. La fonction pathinfo() renvoie un tableau 
              contenant entre autres l'extension du fichier dans $fileName['extension']. On stocke cela dans 
              une variable $fileType. **/
            $fileName = pathinfo($_FILES['myFile']['name']);
            $fileType = $fileName['extension'];
            echo 'Bonjour ' . strip_tags($_POST['gender']) . ' ' . strip_tags($_POST['firstname']) . ' ' . strip_tags($_POST['lastname']) . ' votre fichier ' . basename($_FILES['myFile']['name']) . ' a bien été reçu.';
        } else {
            echo'<form action="index.php" method="POST" enctype="multipart/form-data">
            <div id="form">
                <select name="gender">
                    <option value="Monsieur">Monsieur</option>
                    <option value="Madame">Madame</option>
                </select>
                <label for="lastname">Votre nom de famille</label>
                <input type="text" name="lastname" />
                <label for="firstname">Votre prénom</label>
                <input type="text" name="firstname" />
                <input type="submit" value="Valider" />
            </div>
        </form>';
        }
        ?>
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
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <meta charset="utf-8">
        <title>Exercice 7</title>
    </head>
    <body>
        <nav>
            <h2>Liens des exercices</h2>
            <ul>
                <li><a href="http://partie7/exercice1/">Exercice 1</a></li>
                <li><a href="http://partie7/exercice2/">Exercice 2</a></li>
                <li><a href="http://partie7/exercice3/">Exercice 3</a></li>
                <li><a href="http://partie7/exercice4/">Exercice 4</a></li>
                <li><a href="http://partie7/exercice5/">Exercice 5</a></li>
                <li><a href="http://partie7/exercice6/">Exercice 6</a></li>
                <li><a href="http://partie7/exercice8/">Exercice 8</a></li>
            </ul>
        </nav>
        <p>Au formulaire de l'exercice 5, ajouter un champ d'envoi de fichier. Afficher en plus de ce qui est demandé à l'exercice 6, le nom et l'extension du fichier.</p> 
        <!-- Ouverture des balises PHP dans une balise p -->
        <p>Vérification et affichage des paramètres de l'URL :</p>
            <?php
            // Vérification que les variables ne sont pas vides
            if (empty($_POST['firstName']) || empty($_POST['secondName']) || empty($_POST['civility']) || empty($_FILES['file']['name']) || $_FILES['file']['error'] != 0) {
                echo 'Il faut renseigner un nom, un prénom et votre fichier';
                ?>
            <form method="post" action="index.php" enctype="multipart/form-data">
                <select name="civility">
                    <option value="Monsieur">Monsieur</option>
                    <option value="Madame">Madame</option>
                </select>
                <label for="firstName">Prénom: <input type="text" name="firstName" id="firstName"/></label>
                <label for="secondName">Nom: <input type="text" name="secondName" id="secondName"/></label>
                <label for="file">Nom: <input type="file" name="file" id="file"/></label>
                <button type="submit">Envoyer</button>
            </form>
            <?php
            } else { 
                $file_info = pathinfo($_FILES['file']['name']);
                $file_extension = $file_info['extension'];
                $file_name = $file_info['filename'];
                    /** Affiche les elements en sécurisant les valeurs pour ne pas afficher les balises HTML et supprimer les 
                        espaces avant et après. trim() retourne la chaîne , après avoir supprimé les caractères invisibles 
                        en début et fin de chaîne. **/
                    echo strip_tags(trim($_POST['civility'])) . ' ' . strip_tags(trim($_POST['firstName'])) . ' ' . strip_tags(trim($_POST['secondName'])) .  ' ' . $file_extension . ' ' . $file_name;                              
            }
            ?>
         </p>
    </body>
</html>