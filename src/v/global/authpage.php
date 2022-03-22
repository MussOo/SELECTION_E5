<!doctype html>
<html lang="fr">

    <head>
        <meta charset="utf-8">
        <title>Suivi de compétences SIO</title>
        <link rel="stylesheet" href="public/css/main.css">
        <link rel="icon" type="image/png" href="public/image/logo.png" />
        <script src="https://raw.githack.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>
        <script src="public/script/main.js"></script>
    </head>

    <div class="header">
        SELECTION
    </div>

    <body>
        <form class="formulaire" method="post" action="index.php?Connexion=true">
            <div>

                <div>
                    Nom d'utilisateur : <br>
                    <input name="identifiant" type="text">
                </div>
                <div>
                    Mot de passe : <br>
                    <input name="mdp" type="password">
                </div>
                <div>
                    <input type="submit" value="Se connecter">
                </div>

                <div>
                    Login : <br><br>
                     administrateur  -  administrateur <br>
                    evaluateur  -  evaluateur<br>
                    secretaire  -  secretaire
                </div>
            </div>
        </form>
    </body>

</html>