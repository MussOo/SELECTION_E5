<?php
require_once('src/v/global/header.php')
?>
<style type="text/css">
    html,
    body {
        margin: 0;
        padding: 0;
        height: 100%;
        font-family: 'Trebuchet MS', Verdana, sans-serif;
        text-align: center;
        color: #000;
        background-color: #ffefd5;
    }
</style>

<h1 style="text-align: center;">Espace Administrateur </h1>
<h2>Ajout Utilisateur</h2>

<div>
    <form action="?AjoutUser" method="POST">

    <div>
        <span>Identifiant</span>
        <input type="text" name="identifiant" id="">
    </div>
    <div>
        <span>mot de passe</span>
        <input type="text" name="mot_de_passe" id="">
    </div>
    <div>
        <span>type de compte</span>
        <select name="type_de_compte" id="">
            <option value="administrateur">administrateur</option>
            <option value="secretaire">secretaire</option>
            <option value="evaluateur">evaluateur</option>
        </select>
    </div>
        <input type="submit" value="envoie" name="AjoutUser">
    </form>
</div>
</body>

</html>