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
         <br>
        <form class="formulaire" method="GET" >
            <div>
                <div>
                    ID Candidat : <br>
                    <input name="id_candidat" type="text">
                </div>
                <div id="error_idcandidat" none>
                    <p style="color: red;">Votre dossier n'a pas encore été traité</p>
                </div>
                <div>
                    <input type="submit" name="id_candidat_form">
                </div>
            </div>
        </form>
    </body>
<script>
    var currentLocation = window.location.search;
    
    document.getElementById("error_idcandidat").style.display = "none";
    if(currentLocation == '?error_idcandidat'){
        
        document.getElementById("error_idcandidat").style.display = "block";
        setTimeout(function() {
            
            document.location.href="?";
            
        }, 1500);

    }
</script>
</html>