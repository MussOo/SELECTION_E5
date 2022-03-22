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
        VERIF CODE

       
    </div>
    <a href="?deconnexion">Annuler</a>

    <body>
        <form  method="POST">
            <div>

                <div>
                    ENTRER LE CODE : <br>
                    <input name="code-verif" type="text">
                </div>
                <?php  echo $otp->now();?>
                <a href="../../c/verif/code.php">zadazdazd</a>
                <a href="?EnvoieCode=true">dzoljkahdiozhd</a>
                <div>
                    <input type="submit" name="sendCode" value="Verifier">
                </div>
            </div>
        </form>
    </body>

</html>