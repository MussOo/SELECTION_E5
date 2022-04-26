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
    <p>SELECTION</p>
</div>


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



<table class="situations" style="width: 100%;border: 1px solid black;border-collapse: collapse;">
    <tr class="topLine">
        <td class="situations">Nom</td>
        <td class="situations">Prenom</td>
        <td class="situations">Note</td>
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
                    echo '<td class="situations">'. $grille->get("total_point") . '</td>';
                    echo '<td class="situations">'. $grille->get("point_bac") . '</td>';
                    echo '<td class="situations">'. $grille->get("point_travail_serieux") . '</td>';
                    echo '<td class="situations">'. $grille->get("point_absence") . '</td>';
                    echo '<td class="situations">'. $grille->get("point_attitude") . '</td>';
                    echo '<td class="situations">'. $grille->get("point_etude_superieure") . '</td>';
                    echo '<td class="situations">'. $grille->get("point_avis_PP") . '</td>';
                    echo '<td class="situations">'. $grille->get("point_avis_proviseur") . '</td>';
                    echo '<td class="situations">'. $grille->get("point_lettre_motivation") . '</td>';
                    echo '<td class="situations">'. $grille->get("remarque") . '</td>';
                    echo '<td class="situations">'. $grille->get("statut_dossier") . '</td>';
                }
               ?> </tr> <?php          
            }else{
                echo 'dzadazd';
            }
            ?>
    </tr>
</table>