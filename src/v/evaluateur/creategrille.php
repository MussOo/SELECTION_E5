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

<form method="POST">

<div>
    <div>
        <span>Nom</span>
        <input type="text" name="Nom">
    </div>
    <div>
        <span>Prenom</span>
        <input type="text" name="Prenom">
    </div>
    <div>
        <span>N° Candidat</span>
        <input type="text" name="N_candidat">
    </div>

</div>
<div></div>
    <div>  
        <div>
            <label for="1">Provenance:</label>

            <select name="P" id="1">
                <option value="">--Please choose an option--</option>
                <option value="Pro (08)">Pro (08)</option>
                <option value="S/ES (12)">S/ES (12)</option>
                <option value="L (09)">L (09)</option>
                <option value="STMG (10)">STMG (10)</option>
                <option value="Autres (05)">Autres (05)</option>
            </select>

            <label for="2">Travail serieux:</label>
            <select name="TS" id="2">
                <option value="">--Please choose an option--</option>
                <option value="OUI (+1)">OUI (+1)</option>
                <option value="NON (-1)">NON (-1)</option>
            </select>
        </div>
        <div>
            <label for="3">Absence:</label>

            <select name="AB" id="3">
                <option value="">--Please choose an option--</option>
                <option value="OUI (-2)">OUI (-2)</option>
                <option value="NON (+1)">NON (+1)</option>
            </select>

            <label for="4">Attitude:</label>

            <select name="ATT" id="4">
                <option value="">--Please choose an option--</option>
                <option value="OUI (Dossier refusé)">OUI (Dossier refusé)</option>
                <option value="NON (+1)">NON (+1)</option>
            </select>
        </div>
    </div>

    <div>
        <div>
            <label for="1">Etude superieur:</label>

            <select name="ES" id="1">
                <option value="">--Please choose an option--</option>
                <option value="OUI (+1)">OUI (+1)</option>
                <option value="NON (-0)">NON (-0)</option>
            </select>

            <label for="2">Avis Professeur Principal:</label>

            <select name="APP" id="2">
                <option value="">--Please choose an option--</option>
                <option value="Bien (+2)">Bien (+2)</option>
                <option value="Assez Bien (+1)">Assez Bien (+1)</option>
                <option value="insuffisant (-1)">insuffisant (-1)</option>
                <option value="Negative (-2)">Negative (-2)</option>
            </select>
        </div>
        <div>
            <label for="3">Avis Proviseur:</label>

            <select name="AP" id="3">
                <option value="">--Please choose an option--</option>
                <option value="Bien (+2)">Bien (+2)</option>
                <option value="Assez Bien (+1)">Assez Bien (+1)</option>
                <option value="insuffisant (-1)">insuffisant (-1)</option>
                <option value="Negative (-2)">Negative (-2)</option>
            </select>

            <label for="4">Lettre de Motivation:</label>

            <select name="LM" id="4">
                <option value="">--Please choose an option--</option>
                <option value="Bien (+2)">Bien (+2)</option>
                <option value="Assez Bien (+1)">Assez Bien (+1)</option>
                <option value="insuffisant (-1)">insuffisant (-1)</option>
                <option value="Negative (-2)">Negative (-2)</option>
            </select>
        </div>

        <div>
            <span for="story">Remarque:</span>
            <div>
                <textarea id="story" name="remarque" rows="8" cols="44"></textarea>
            </div>

        </div>
        <div id="Dossier">

<label for="pet-select">ETAT DU DOSSIER</label>

<select name="Dossier" id="pet-select">
    <option value="">Dossier</option>
    <option value="Dossier_Validé" name="Dossier_Validé">Dossier Validé</option>
    <option value="Dossier_a_ré-examiner" name="Dossier_a_ré-examiner">Dossier a ré-examiner</option>
    <option value="Dossier_refuser" name="Dossier_refuser">Dossier refuser</option>
</select>

</div>
    </div>
    <input type="submit" value="Envoie" name="SendGrille">
</form>

<div>

</div>

</body>

</html>