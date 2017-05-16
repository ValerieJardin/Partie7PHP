<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.o"/>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <title>Exercice 6 de la partie 7 du PHP</title>
        <!--Avec le formulaire de l'exercice 5, Si des données sont passées en POST ou en GET, le formulaire 
        ne doit pas être affiché. Par contre les données transmises doivent l'être. Dans le cas contraire, 
        c'est l'inverse. Utiliser qu'une seule page.-->
    </head>
    <body>
        <p>
            Mon formulaire :
        </p> 
        <!--Utilisaton de la fonction if(isset): "ce que l'on doit faire", à savoir que les 2 points signifient que 
        ce qui à après eux fait partie du if soit ici c'est echo, le tout est suivi d'un endif; -->
        <?php if (isset($_POST['gender']) && isset($_POST['lastname']) && isset($_POST['firstname'])): ?>
            <p>Bonjour : <?php echo strip_tags($_POST['gender']) . ' ' . strip_tags($_POST['firstname']) . ' ' . strip_tags($_POST['lastname']) . ' !'; ?></p>
            <!-- Bouton de retour au formulaire -->
            <div class="buttons">
                Pour changer les informations, <a href="index.php"><button>Cliquez ici</button></a> pour revenir au formulaire.
            </div>
        <?php endif; ?>
        <?php if (!isset($_POST['gender']) && !isset($_POST['lastname']) && !isset($_POST['firstname'])): ?>
            <form action="index.php" method="POST">
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
            </form>
        <?php endif; ?>
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
$genderList = array('Monsieur', 'Madame');
// Déclaration de variables avec une valeur par défaut
$name = '';
$firstName = '';
$genderUser = 0;
// Récupération des données en $_GET ou $_POST
if (isset($_POST['nom'])) {
    $name = $_POST['nom'];
} elseif (isset($_GET['nom'])) {
    $name = $_GET['nom'];
}
if (isset($_POST['prenom'])) {
    $firstName = $_POST['prenom'];
} elseif (isset($_GET['prenom'])) {
    $firstName = $_GET['prenom'];
}
if (isset($_POST['sexe'])) {
    $genderUser = $_POST['sexe'];
} elseif (isset($_GET['sexe'])) {
    $genderUser = $_GET['sexe'];
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>exo 6</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <ul id="menu_horizontal">
            <li><a href="../exercice5/index.php">Exercice 5</a></li>
            <li><a href="../exercice7/index.php">Exercice 7</a></li>
        </ul>
        <?php
        if ($name != '' || $firstName != '') {
            ?>
            <p> Bonjour <?= $genderList[$genderUser] ?> <?= $name ?> <?= $firstName ?></p>
            <?php
        } else {
            ?>
            <form name="index" action="index.php" method="POST">
                <div id="formulaire">
                    <select name="sexe">
                        <?php
                        // On génère les options en allant chercher les données dans le tableau $genderList
                        foreach ($genderList as $key => $gender) {
                            ?>
                            <option value="<?= $key ?>"><?= $gender ?></option>
                            <?php
                        }
                        ?>
                    </select>
                    <label for="nom">Nom : </label><input type="text" name="nom" placeholder="Nom" required>
                    <label for="prenom">Prénom : </label><input type="text" name="prenom" placeholder="Prénom" required>
                    <input type="submit" value="Valider" />
                </div>
            </form>
            <?php
        }
        ?>
    </body>
</html>

<?php
$genderList = array('Monsieur', 'Madame');
// Déclaration de variables par défaut
$name = '';
$firstName = '';
$genderUser = 0;
// Récupération des données en $_GET ou $_POST
if (isset($_POST['nom'])) {
    $name = $_POST['nom'];
} elseif (isset($_GET['nom'])) {
    $name = $_GET['nom'];
}
// On retire tout ce qui peut être malveillant 
$name = strip_tags($name);
// Récupération des données en $_GET ou $_POST
if (isset($_POST['prenom'])) {
    $firstName = $_POST['prenom'];
} elseif (isset($_GET['prenom'])) {
    $firstName = $_GET['prenom'];
}
// On retire tout ce qui peut être malveillant 
$firstName = strip_tags($firstName);
// Récupération des données en $_GET ou $_POST
if (isset($_POST['sexe'])) {
    $genderUser = $_POST['sexe'];
} elseif (isset($_GET['sexe'])) {
    $genderUser = $_GET['sexe'];
}
// On retire tout ce qui peut être malveillant 
$genderUser = strip_tags($genderUser);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>exo 6</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <ul id="menu_horizontal">
            <li><a href="../exercice5/index.php">Exercice 5</a></li>
            <li><a href="../exercice7/index.php">Exercice 7</a></li>
        </ul>
        <?php
        if ($name != '' || $firstName != '') {
            ?>
            <p> Bonjour <?= $genderList[$genderUser] ?> <?= $name ?> <?= $firstName ?></p>
            <?php
        } else {
            ?>
            <form name="index" action="index.php" method="POST">
                <div id="formulaire">
                    <select name="sexe">
                        <?php
                        // On génère les options en allant chercher les données dans le tableau $genderList
                        foreach ($genderList as $key => $gender) {
                            ?>
                            <option value="<?= $key ?>"><?= $gender ?></option>
                            <?php
                        }
                        ?>
                    </select>
                    <label for="nom">Nom : </label><input type="text" name="nom" placeholder="Nom" required>
                    <label for="prenom">Prénom : </label><input type="text" name="prenom" placeholder="Prénom" required>
                    <input type="submit" value="Valider" />
                </div>
            </form>
            <?php
        }
        ?>
    </body>
</html>