<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.o"/>
        <!--Lien pour cssiser la vue-->
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <title>Exercice 7 de la partie 7 du PHP</title>
        <!--Au formulaire de l'exercice 5, ajouter un champ d'envoi de fichier. Afficher en plus de ce qui est 
        demandé à l'exercice 6, le nom et l'extension du fichier.-->
    </head>
    <body>
        <p>
            Mon formulaire :
        </p> 
      
        <div class="contenu_exercice">            
            <?php
            if (isset($_POST['genre']) AND isset($_POST['nom']) AND isset($_POST['prenom']) AND isset($_FILES['fichier']) AND $_FILES['fichier']['error'] == 0 ) {
                if($_FILES['fichier']['size'] <= 1000000){
                    $filesName = pathinfo($_FILES['fichier']['name']);
                    $filesType = $filesName['extension'];
                    $extentionAutorisé = array('pdf','odt', 'doc');
                    if(in_array($filesType, $extentionAutorisé)){
                        move_uploaded_file($_FILES['fichier']['tmp_name'], '/home/valerie/Documents/www/partie7/exercice7/'. basename($_FILES['fichier']['name']));
                        echo 'Ton fichier ' . basename($_FILES['fichier']['name']) . ' a bien été reçu ';                        
                    }else {
                        echo 'Votre fichier n\'a pas été reçu ';
                    }                  
                }
                echo 'Vous êtes un : '. $_POST['genre'] . ' Votre nom est : ' . $_POST['nom'] .' et votre prenom est : '. $_POST['prenom'];
            }else{
                echo '<form method = "POST" action = "index.php" enctype="multipart/form-data">
            <select name="genre">
            <option value = "homme">Homme</option>
            <option value = "femme">Femme</option>
            </select>
            <label for = "nom">Nom</label> <input type = "text" name = "nom" placeholder = "nom" />
            <label for = "prenom">Prenom</label> <input type = "text" name = "prenom" placeholder = "prenom"/>
            <input type="file" name="fichier" value="Uploader"/>
            <button type = "submit" name = "Envoyer">Envoyer</button>
            </form>';
            }
            ?>
        </div>
            
 

            <!--Redirection du formulaire par la méthode POST vers la page index.php avec un attribut enctype qui permet 
            au navigateur du visiteur de savoir qu'un fichier va être envoyé. Input de type file pour que le navigateur du
            visiteur sache qu'un fichier va être envoyé.-->
     
        <a href="http://partie7/exercice1/index.php"><button>Exercice 1</button></a>
        <a href="http://partie7/exercice2/index.php"><button>Exercice 2</button></a>
        <a href="http://partie7/exercice3/index.php"><button>Exercice 3</button></a>
        <a href="http://partie7/exercice4/index.php"><button>Exercice 4</button></a>
        <a href="http://partie7/exercice5/index.php"><button>Exercice 5</button></a>
        <a href="http://partie7/exercice6/index.php"><button>Exercice 6</button></a>
        <a href="http://partie7/exercice7/index.php"><button>Exercice 7</button></a>
        <a href="http://partie7/exercice8/index.php"><button>Exercice 8</button></a>
    </div>
</body>
</html>