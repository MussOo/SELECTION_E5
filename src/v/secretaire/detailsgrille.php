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

<div>

    <input type="button" onClick="parent.close()" value="Fermer la page">

</div>

<table class="situations" style="width: 100%;border: 1px solid black;border-collapse: collapse;">
    <tr class="topLine">
        <td class="situations">Nom</td>
        <td class="situations">Prenom</td>
        <td class="situations">point Bac</td>
        <td class="situations">point travail serieux</td>
        <td class="situations">point absence</td>
        <td class="situations">point attitude</td>
        <td class="situations">point etude superieure</td>
        <td class="situations">point avis Professeur Principal</td>
        <td class="situations">point avis Proviseur</td>
        <td class="situations">point lettre motivation</td>
        <td class="situations">remarque</td>
        <td class="situations">status dossier</td> 
    </tr>
    <tr>
        <?php 
            if(isset($grillecible)){
                foreach($grillecible as $key => $grille){ 
                    ?>
    <tr> <?php
                    echo '<td class="situations">'. $grille->get("Nom") . '</td>';
                    echo '<td class="situations">'. $grille->get("Prenom") . '</td>';
                    echo '<td class="situations">'. $grille->get("point_bac") . '</td>';
                    echo '<td class="situations">'. $grille->get("point_travail_serieux") . '</td>';
                    echo '<td class="situations">'. $grille->get("point_absence") . '</td>';
                    echo '<td class="situations">'. $grille->get("point_attitude") . '</td>';
                    echo '<td class="situations">'. $grille->get("point_etude_superieure") . '</td>';
                    echo '<td class="situations">'. $grille->get("point_avis_PP") . '</td>';
                    echo '<td class="situations">'. $grille->get("point_avis_proviseur") . '</td>';
                    echo '<td class="situations">'. $grille->get("point_lettre_motivation") . '</td>';
                    echo '<td class="situations">'. $grille->get("remarque") . '</td>';
                    echo '<td class="situations">'. $grille->get("status_dossier") . '</td>';
                }
               ?> </tr> <?php          
            }else{
                echo '';
            }
            ?>
    </tr>
</table>