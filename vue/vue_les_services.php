<h2> Liste des évènements </h2>

<table border="1">
    <tr>
        <td> Id Service </td>
        <td> Libellé </td>
        <td> Adresse </td>
        <td> Prix (moyen) </td>
        <td> Téléphone </td>
        <td> Email </td>
        <td> Id type-services </td>
    </tr>

    <?php
        foreach($lesServices as $unService){
            echo 
            "<tr>
                <td>".$unService["idevenement"]."</td>
                <td>".$unService["libelle"]."</td>
                <td>".$unService["adresse"]."</td>
                <td>".$unService["prix"]."</td>
                <td>".$unService["tel"]."</td>
                <td>".$unService["email"]."</td>
                <td>".$unService["idtypeservices"]."</td>";
            echo "</tr>";
        }
    ?>
</table>