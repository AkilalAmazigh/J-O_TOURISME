<h2> Liste des typeservices </h2>

<table border="1">
    <tr>
        <td> Id typeservices </td>
        <td> Libellé </td>
    </tr>

    <?php
        foreach($lesTypeservices as $unTypeservice){
            echo 
                "<tr>
                <td>".$unTypeservice["idtypeservices"]."</td>
                <td>".$unTypeservice["libelle"]."</td>";
            echo "</tr>";
        }
    ?>
</table>