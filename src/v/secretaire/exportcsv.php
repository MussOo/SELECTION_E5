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
<h1 style="text-align: center;">CSV</h1>


<button type="button" onclick="tableToCSV()">
        download CSV
</button>

<div>
     <table class="situations" style="width: 100%;border: 1px solid black;border-collapse: collapse;">
         <tr class="topLine">
             <td class="situations">Numero Candidat</td>
             <td class="situations">Note</td>
             <td class="situations">Remarque</td>
         </tr>
         <tr>
         <?php 
            if(isset($ListGrille)){
                foreach($ListGrille as $key => $grille){ 
                    ?> <tr> <?php
                    echo '<td class="situations">'. $grille->get("Numero_Candidat") . '</td>';
                    echo '<td class="situations">'. $grille->get("total_point") . '</td>';
                    echo '<td class="situations">'. $grille->get("remarque") . '</td>';
                }
            ?> </tr> <?php          
            }else{
                echo '';
            }
            ?>
         </tr>
     </table>
     
 </div>

 <script type="text/javascript">
        function tableToCSV() {
 
            // Variable to store the final csv data
            var csv_data = [];
 
            // Get each row data
            var rows = document.getElementsByTagName('tr');
            for (var i = 0; i < rows.length; i++) {
 
                // Get each column data
                var cols = rows[i].querySelectorAll('td,th');
 
                // Stores each csv row data
                var csvrow = [];
                for (var j = 0; j < cols.length; j++) {
 
                    // Get the text data of each cell
                    // of a row and push it to csvrow
                    csvrow.push(cols[j].innerHTML);
                }
 
                // Combine each column value with comma
                csv_data.push(csvrow.join(";"));
            }
 
            // Combine each row data with new line character
            csv_data = csv_data.join('\n');
 
            // Call this function to download csv file 
            downloadCSVFile(csv_data);
 
        }
 
        function downloadCSVFile(csv_data) {
 
            // Create CSV file object and feed
            // our csv_data into it
            CSVFile = new Blob([csv_data], {
                type: "text/csv"
            });
 
            // Create to temporary link to initiate
            // download process
            var temp_link = document.createElement('a');
 
            // Download csv file
            temp_link.download = "dossiers_acceptés.csv";
            var url = window.URL.createObjectURL(CSVFile);
            temp_link.href = url;
 
            // This link should not be displayed
            temp_link.style.display = "none";
            document.body.appendChild(temp_link);
 
            // Automatically click the link to
            // trigger download
            temp_link.click();
            document.body.removeChild(temp_link);
        }
</script>

</body>

</html>