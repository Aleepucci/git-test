<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <table border="1">
        <?php
        
        for($linha=1;$linha<10;$linha++){
            echo "<tr>";
        
         for($coluna=1;$coluna<10;$coluna++){
            
            echo "<td>";
            echo "linha".$linha;
            echo "coluna".$coluna;
            echo "</td>";
         }
         echo "</tr>";
                      
                
                
            }
         
        
        ?>
    </body>
</html>
