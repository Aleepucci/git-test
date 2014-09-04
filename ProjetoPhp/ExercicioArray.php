<?php

    $array [0][0] = "02K01";
    $array [0][1] = "Tecnologia Web II";
    $array [0][2] = "Segunda";
    $array [0][3] = "Charles";
    $array [1][0] = "02J01";
    $array [1][1] = "Linguagem de Prog I";
    $array [1][2] = "Terça";
    $array [1][3] = "João";
    $array [2][0] = "02K01";
    $array [2][1] = "Linguagem de Prog I";
    $array [2][2] = "Quarta";  
    $array [2][3] = "Charles";
           


?>




<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <table border="1">
            <tr>
                <td><b>Turma</b></td>
                <td><b>Disciplina</b></td>
                <td><b>Semana</b></td>
                <td><b>Professor</b></td>
            </tr>
            
           <?php
             for($linha = 0; $linha <= 2; $linha++){
                echo '<tr>';
                for($coluna = 0; $coluna<= 3; $coluna++){
                    echo '<td>';
                    echo $array[$linha][$coluna];
                    echo '</td>';
                }
                echo '</tr>';
            }
           
           ?>
            
            
        </table>
    </body>
</html>

            
            
            