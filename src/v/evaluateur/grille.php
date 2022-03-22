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
    <table class="situations" style="width: 100%;border: 1px solid black;border-collapse: collapse;">
        <tr class="topLine">
            <td class="situations">Numero Candidat</td>
            <td class="situations">Note</td>
            <td class="situations">Details</td>
            <td class="situations">Options</td>
        </tr>
        <tr>
            <?php 
            if(isset($ListGrille)){
                foreach($ListGrille as $key => $grille){ 
                    ?>
        <tr> <?php
                    echo '<td class="situations">'. $grille->get("Numero_Candidat") . '</td>';
                    echo '<td class="situations">'. $grille->get("total_point") . '</td>';
                    echo '<td class="situations"><a href="?detailsgrille&amp;id='. $grille->get("id") . '" target="_blank">+ Details</a></td>';
                    echo '<td class="situations"><a href="?deletegrille&amp;id='. $grille->get("id") . '">Supprimer</a> <a href="?updategrille&amp;id='. $grille->get("id") . '">Modifier</a></td>';
                }
               ?> </tr> <?php          
            }else{
                echo 'Aucune grilles existantes';
            }
            ?>
        </tr>
        <tr><td></td><td></td><td></td><td><a href="?CreateGrille"><img src="https://img.icons8.com/material-outlined/48/000000/plus.png"/></a></td></tr>
    </table>

</div>