<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="index.css">
    <title>CV de Loki</title>
    <link href="https://fonts.googleapis.com/css2?family=Parisienne&family=Prata&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Prata&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<?php include 'quote.php' ?>
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
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </div>
            </ul>

        </div>
        <div class="burger" onclick="openMenuMobile()">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </div> 
        <div class="mobile" onclick="closeMenuMobile()"></div>
    </nav>
    <header>
        <div class="headerTitle">
            <h1> Mon nom est Loki d'Asgard, <br> <span class="titlePart2">et vous avez besoin de moi.</span></h1>
        </div>
        <div class="headerImg">
        </div>
        <div class="quoteSpace">
        <blockquote class="quoteSpace">
             <?php echo $RandomList[rand(0,count($RandomList)-1)] ?>
            </blockquote>
        </div>
    </header>
    <main id="main">
        <div class="background">
            <section id="about-me">
                <div class="aboutmeImg"></div>
                <div class="about-me">
                    <h2>A propos de moi</h2>
                    <div class="line"></div>
                    <h3>Le supervilain le plus influent de l'univers</h3>
                    <div class="about-me-text"> 
                        <p>
                        Ai-je vraiment besoin de me présenter? <br>
                        Loki, le Dieu de la malice, Prince chéri d'Asgard - et même Roi adoré, à deux reprises.
                        Je suis un supervilain talentueux et charismatique; de la magie à la métamorphose, j'ai plus d'une corde à mon arc. 
                        Et tout ça sans compter mon armée de fans qui sont prêts à tout pour moi.
                        Alors? Qu'attendez-vous? <br>
                        <a class="aboutMeContact" href="contact.php">Vous avez besoin de moi !</a>


                    </p>
                </div>
                    </div>
                </div>
            </section>
        </div>
        <footer>
            <p class="footerAt">@Lokid'Asgard</p>
            <p class="disclaimer">Disclaimer : Loki n'est pas responsable de toute destruction et/ou dommages physiques
                et/ou psychologiques.</p>
        </footer>
        <script src="burger.js"></script>
</body>

</html> 