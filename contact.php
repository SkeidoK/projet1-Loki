<?php
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $contact = array_map('trim', $_POST);

    if (empty($contact['lastname'])) {
        $errors[] = 'Le nom est obligatoire';
    }

    $lastnameMaxLength = 70;
    if (strlen($contact['lastname']) > $lastnameMaxLength) {
        $errors[] = 'Le nom doit faire moins de ' . $lastnameMaxLength . ' caractères';
    }
    if (empty($contact['firstname'])) {
        $errors[] = 'Le prénom est obligatoire';
    }

    $firstnameMaxLength = 70;
    if (strlen($contact['firstname']) > $firstnameMaxLength) {
        $errors[] = 'Le prénom doit faire moins de ' . $firstnameMaxLength . ' caractères';
    }

    if (empty($contact['email'])) {
        $errors[] = 'L\'email est obligatoire';
    }

    $emailMaxLength = 255;
    if (strlen($contact['email']) > $emailMaxLength) {
        $errors[] = 'Le mail doit faire moins de ' . $emailMaxLength . ' caractères';
    }

    if (!filter_var($contact['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Mauvais format pour l\'email ' . htmlentities($contact['email']);
    }

    if (empty($contact['message'])) {
        $errors[] = 'Le message est obligatoire';
    }

    if (empty($errors)) {
        echo "Message reçu";
        header('Location: /contact.php');
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Parisienne&family=Prata&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Prata&display=swap" rel="stylesheet">

</head>

<body>

    <nav>

        <div>
            <img src="image/lokicvlogo.png" alt="Logo" width="35" height="35">

            <h1>Loki d'Asgard</h1>
        </div>

        <div>
            <ul>
                <li><a href="index.php">Accueil </a></li>
                <li><a href="./index.php#about-me">A propos </a></li>
                <li><a href="experience.html">Qualifications </a></li>
                <li><a href="contact.php">Contact </a></li>
                <div class="close" onclick="closeMenuMobile()">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>    if (!filter_var($contact['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Mauvais format pour l\'email ' . htmlentities($contact['email']);
    }
                </div>
            </ul>

        </div>
        <div class="burger" onclick="openMenuMobile()">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </div>
        <div class="mobile" onclick="closeMenuMobile()"></div>
    </nav>
    <header></header>
    <div class="main">
        <div class="formulaire">

            <h1>Contact</h1>
            <div class="line"></div>
            <p class="contact-text">Vous avez enfin compris que vous avez besoin de moi? <br>
                Remplissez le formulaire de contact ci-dessous,
                et peut-être que, si la demande m'apparait convenable, je vous répondrais.</p>

            <form class="contactForm" action="" method="POST" novalidate>
                <ul>
                    <?php foreach ($errors as $error) : ?>
                        <li><?= $error ?></li>
                    <?php endforeach; ?>
                </ul>
                <label for="lastname">Nom</label><br />
                <input type="text" id="lastname" name="lastname" value="<?= $contact['lastname'] ?? '' ?>" placeholder="ex: Fury" required/><br />
                <label for="firstname">Prénom</label><br />
                <input type="text" id="firstname" name="firstname" value="<?= $contact['firstname']  ?? '' ?>" placeholder="ex: Patrik" required/><br />
                <label for="email">Email</label><br />
                <input type="email" id="email" name="email" placeholder="ex: patriklesupervilain@tapeur.com " value="<?= $contact['email']  ?? '' ?>" required/><br />
                <label for="message">Message</label><br />
                <textarea id="message" name="message" placeholder="écrit ton message de super vilain ici" required> <?= $contact['message'] ?? '' ?> </textarea>
                <br /><br />
                <button class="button" type="submit">Envoyer</button>

            </form>

        </div>
        <div class="imagecontact">

        </div>
    </div>
    <footer class="contactFooter">
        <p class="footerAt">@Lokid'Asgard</p>
        <p class="disclaimer">Disclaimer : Loki n'est pas responsable de toute destruction et/ou dommages physiques
            et/ou
            psychologiques.</p>
    </footer>
    <script src="burger.js"></script>
</body>


</html>