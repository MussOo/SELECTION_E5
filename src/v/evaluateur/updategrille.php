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

<?php 
            if(isset($updategrille)){
                foreach($updategrille as $key => $grille){ 
                    ?>
<tr> <?php
                    echo '    
                            <form method="POST">
                                <div>
                                    <div>
                                        <span>Nom</span>
                                        <input type="text" name="Nom" value="'. $grille->get("Nom") . '">
                                    </div>
                                    <div>
                                        <span>Prenom</span>
                                        <input type="text" name="Prenom" value="'. $grille->get("Prenom") . '">
                                    </div>
                                    <div>
                                        <span>N° Candidat</span>
                                        <input type="text" name="N_candidat" value="'. $grille->get("Numero_Candidat") . '">
                                    </div>
                                </div>

                                <div>
                                    <div>
                                        <label for="1">Provenance:</label>
                                        <span> ancienne valeur : '. $grille->get("point_bac") . '</span>
                                        <select name="P" id="1" value="'. $grille->get("point_bac") . '">
                                            <option value="">--Please choose an option--</option>
                                            <option value="Pro (08)">Pro (08)</option>
                                            <option value="S/ES (12)">S/ES (12)</option>
                                            <option value="L (09)">L (09)</option>
                                            <option value="STMG (10)">STMG (10)</option>
                                            <option value="Autres (05)">Autres (05)</option>
                                        </select>
                            
                                        <label for="2">Travail serieux:</label>
                                        <span> ancienne valeur : '. $grille->get("point_travail_serieux") . '</span>
                                        <select name="TS" id="2">
                                            <option value="">--Please choose an option--</option>
                                            <option value="OUI (+1)">OUI (+1)</option>
                                            <option value="NON (-1)">NON (-1)</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="3">Absence:</label>
                                        <span> ancienne valeur : '. $grille->get("point_absence") . '</span>
                                        <select name="AB" id="3">
                                            <option value="">--Please choose an option--</option>
                                            <option value="OUI (+1)">OUI (+1)</option>
                                            <option value="NON (-1)">NON (-1)</option>
                                        </select>
                            
                                        <label for="4">Attitude:</label>
                                        <span> ancienne valeur : '. $grille->get("point_attitude") . '</span>
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
                                        <span> ancienne valeur : '. $grille->get("point_etude_superieure") . '</span>
                                        <select name="ES" id="1">
                                            <option value="">--Please choose an option--</option>
                                            <option value="OUI (+1)">OUI (+1)</option>
                                            <option value="NON (-1)">NON (-1)</option>
                                        </select>
                            
                                        <label for="2">Avis Professeur Principal:</label>
                                        <span> ancienne valeur : '. $grille->get("point_avis_PP") . '</span>
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
                                        <span> ancienne valeur : '. $grille->get("point_avis_proviseur") . '</span>
                                        <select name="AP" id="3">
                                            <option value="">--Please choose an option--</option>
                                            <option value="Bien (+2)">Bien (+2)</option>
                                            <option value="Assez Bien (+1)">Assez Bien (+1)</option>
                                            <option value="insuffisant (-1)">insuffisant (-1)</option>
                                            <option value="Negative (-2)">Negative (-2)</option>
                                        </select>
                            
                                        <label for="4">Lettre de Motivation:</label>
                                        <span> ancienne valeur : '. $grille->get("point_lettre_motivation") . '</span>
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
                                        <span> ancienne valeur : '. $grille->get("remarque") . '</span>
                                        <div>
                                        
                                            <textarea id="story" name="remarque" rows="8" cols="44"></textarea>
                                        </div>
                            
                                    </div>
                                    <div id="Dossier">
                            
                                        <label for="pet-select">ETAT DU DOSSIER</label>
                                        <span> ancienne valeur : '. $grille->get("statut_dossier") . '</span>
                                        <select name="Dossier" id="pet-select">
                                            <option value="">Dossier</option>
                                            <option value="Dossier_Validé" name="Dossier_Validé">Dossier Validé</option>
                                            <option value="Dossier_a_ré-examiner" name="Dossier_a_ré-examiner">Dossier a ré-examiner</option>
                                            <option value="Dossier_refuser" name="Dossier_refuser">Dossier refuser</option>
                                        </select>
                            
                                    </div>
                                </div>
                                <input type="submit" value="MODIFIER" name="updategrille">
                            </form>
                    ';
                }
               ?> </tr> <?php          
            }else{
                echo 'Aucune grilles existantes';
            }
            ?>


<div>

</div>

</body>

</html>