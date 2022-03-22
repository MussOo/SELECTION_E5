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
<h2>modification de compte</h2>

<div>
    <form method="POST">
        <table>
            <tr>
                <td>identifiant</td>
                <td>mot de passe</td>
                <td>type_de_compte</td>
            </tr>
            <tr>
                <?php 
            if(isset($Usermodif)){
                foreach($Usermodif as $key => $user){ //$situation->get("situation_date_creation") // disabled

                    echo '<td><input type="text" name="identifiant" id="" value="'. $user->get("identifiant") . '"></td>';
                    echo '<td><input type="text" name="mdp" id="" value="'. $user->get("mdp") . '"></td>';
                    
                    echo ' <td> <p>Le compte etait : '.$user->get("type_de_compte").'</p> 
                    <select name="type_de_compte">
                    <option value="evaluateur">evaluateur</option>
                    <option value="secretaire">secretaire</option>
                    <option value="administrateur">administrateur</option>
                  </select></td>';
                }
            }else{
                echo '';
            }
            ?>
            </tr>
            
        </table>
        <input type="submit" value="envoie" name="Sendmodif">
    </form>
</div>
</body>

</html>