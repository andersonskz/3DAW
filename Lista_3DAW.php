<?php
    $a;
    $Nomes = array("Pedro", "Maria", "Lucas", "Ana", "Lia", "Caio");
    $Notas = array("8", "6.9", "8", "7", "5.3", "9.1");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Lista com arrays</title>
</head>

<body>
<table>
    <tr>
        <th>Nome</th> 
        <th>Nota</th>
    </tr>
        <?php 
        for ($a=0; $a<6; $a++)
        {    
            echo "<tr>
            <td>$Nomes[$a]</td> <td>$Notas[$a]</td>
            </tr>";
        }
        ?>
    </table>

</body>
</html>
   