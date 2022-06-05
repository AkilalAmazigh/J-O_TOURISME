<h2> Liste des services </h2>

<table border="1">
    <tr>
        <td> Id Service </td>
        <td> Libellé </td>
        <td> Adresse </td>
        <td> Prix (moyen) </td>
        <td> Téléphone </td>
        <td> Email </td>
        <td> Id type-services </td>
        <td> Opérations </td>
    </tr>

    <?php
        foreach($lesServices as $unService)
        {
            echo 
            "<tr>
                <td>".$unService["idservice"]."</td>
                <td>".$unService["libelle"]."</td>
                <td>".$unService["adresse"]."</td>
                <td>".$unService["prix"]."</td>
                <td>".$unService["tel"]."</td>
                <td>".$unService["email"]."</td>
                <td>".$unService["idtypeservices"]."</td>";
        

        //Opération supprimer et modifier
        echo "<td>";
            echo "<a href='index.php?page=2&action=sup&idservice=".$unService['idservice']."'>";
            echo "<img src='images/Delete.jpeg' height='30' width='30'";
            echo "</a>";
            echo "<a href='index.php?page=2&action=edit&idservice=".$unService['idservice']."'>";
            echo "<img src='images/Edit.png' height='30' width='30'";
            echo "</a>";
        echo "</td>";
        echo "</tr> ";
    }

    ?>
</table>