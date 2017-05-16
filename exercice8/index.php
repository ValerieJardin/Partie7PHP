<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.o"/>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <title>Exercice 8 de la partie 7 du PHP</title>
        <!--Sur le formulaire de l'exercice 6, en plus de ce qui est demandé sur les exercices précédent, vérifier 
        que le fichier transmis est bien un fichier pdf..-->
    </head>
    <body>
        <p>
            Mon formulaire :
        </p>
        <?php
        /** Récupération de  l'extension du fichier dans une variable. La fonction pathinfo() renvoie un tableau 
          contenant entre autres l'extension du fichier dans $fileName['extension']. On stocke cela dans
          une variable $fileType.Une fois l'extension récupérée, on peut la comparer à un tableau
          d'extensions autorisées (un array) et vérifier si l'extension récupérée fait bien partie des
          extensions autorisées à l'aide de la fonction in_array().* */
        if (isset($_POST['gender']) && isset($_POST['lastname']) && isset($_POST['firstname']) && isset($_FILES['myFile']) && $_FILES['myFile']['error'] == 0) {
            $fileInformation = pathinfo($_FILES['myFile']['name']);
            // Récupération du nom du fichier
            $fileName = $fileInformation['filename'];
            // Récupération de l'extension du fichier 
            $fileExtention = $fileInformation['extension'];
            ?>
        <p>Votre fichier se nomme <?= $fileName; ?>.</p>
        <p> Il a pour extension <?= $fileExtention; ?>.</p>
            <!--Vérification que l'extention du fichier est bien un pdf-->
            <?php
            if ($fileExtention == 'pdf') {
                ?><p>Votre fichier <?= echobasename($_FILES['myFile']['name']); ?> est au format pdf.</p>
                <?php
            } else {
                ?> <p>Ton fichier </p><?= basename($_FILES['myFile']['name']); ?> n'est pas au format pdf.</p>
            <?php
        }
        ?>
        <br/>
        <?php
        echo 'Bonjour ' . $_POST['gender'] . ' ' . $_POST['firstname'] . ' ' . $_POST['lastname'] . ' votre fichier ' . basename($_FILES['myFile']['name']) . ' a bien été reçu.';
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
                <label for=""></label>
                <input type="file" name="myFile" />
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

<?php
include '../index.php';
?>
<p> Énoncé : Sur le formulaire de l'exercice 6, en plus de ce qui est demandé sur les exercices précédent,
    vérifier que le fichier transmis est bien un fichier pdf..</p>
<div>
<?php
// verifie que les champs sont valides et non vide. 
if (empty($_POST['nom']) || empty($_POST['prenom'])) {
    ?>
    <form action="ex8.php" method="POST" enctype="multipart/form-data">
        <select name="choix">
            <option value="M">M</option>
            <option value="Mme">Mme</option>
        </select>
        <label for="nom">Votre nom </label>
        <input type="text" name="nom">
        <label>Votre prénom <input type="text" name="prenom" ></label>
        <label>Envoi de fichier<input type="file" name="fichier"></label>
        <input type="submit" value="Valider"/>
    </form>
<?php } else {
    ?>  
    <p>Bonjour <?php echo $_POST['choix']; ?></p>
    <p> Ton nom est  <?php echo $_POST['nom']; ?> !</p>
    <p> Ton prénom est  <?php echo $_POST['prenom']; ?> !</p>
<?php
}
// isset sert a vérifier si les champs existent. 
if (isset($_FILES['fichier']) && $_FILES['fichier']['error'] == 0) {
    // on récup les données du fichier
    $fileInfo = pathinfo($_FILES['fichier']['name']);
    // on récup le nom 
    $fileName = $fileInfo['filename'];
    // on récup l'extension 
    $fileExtension = $fileInfo['extension'];
    ?>
    <p> Votre fichier est <?php echo $fileName;?> </p>
    <p> L'extension de votre fichier est <?php echo $fileExtension;?> </p>
    <?php
    // si l'extension est un pdf
    if($fileExtension == 'pdf'){
        ?>
       <p>Votre fichier est au format pdf</p><?php
    }else{
        ?>
    <p>Votre fichier n'est pas au format pdf</p><?php 
    }
}
?>
</div>
</body>
</html>