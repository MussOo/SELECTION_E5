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


<table class="situations" style="width: 100%;border: 1px solid black;border-collapse: collapse;">
    <tr class="topLine">
        <td class="situations">identifiant</td>
        <td class="situations">mot de passe</td>
        <td class="situations">type de compte</td>
        <td class="situations">operation</td>

    </tr>
    
        <?php 
            if(isset($Listuser)){
                foreach($Listuser as $key => $user){ //$situation->get("situation_date_creation")
                    ?> <tr> <?php
                    echo '<td style="padding:0px; text-align:left;" class="situations">'. $user->get("identifiant") . '</td>';
                    echo '<td style="padding:0px; text-align:left;" class="situations">'. $user->get("mdp") . '</td>';
                    echo '<td style="padding:0px; text-align:left;" class="situations">'. $user->get("type_de_compte") . '</td>';
                    echo '<td style="padding:0px; text-align:left;" class="situations">
                                <a href="?modif='. $user->get("id") . '">Modifier</a>
                                <a href="?delete='. $user->get("id") . '">Supprimer</a>
                          </td>';
                }
               ?> </tr> <?php          
            }else{
                echo '';
            }
            ?>
    <tr><td></td><td></td><td></td><td><a href="?AjoutUser"><img src="https://img.icons8.com/material-outlined/48/000000/plus.png"/></a></td></tr>
</table>




</body>

</html>