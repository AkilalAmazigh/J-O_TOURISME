<h2> Liste des évènements </h2>

<table border="1">
    <tr>
        <td> Id Evenement </td>
        <td> Type </td>
        <td> Date Evenement </td>
        <td> Nom Evenement </td>
        <td> Description </td>
        <td> Adresse </td>
        <td> Horraire Début </td>
        <td> Horraire Fin </td>
        <td> Capacite </td>
        <td> Idcategorie </td>
        <td> Opérations </td>
    </tr>

    <?php
    foreach ($lesEvenements as $unEvenement) {
        echo
        "<tr>
                <td>" . $unEvenement["idevenement"] . "</td>
                <td>" . $unEvenement["type"] . "</td>
                <td>" . $unEvenement["dateEvent"] . "</td>
                <td>" . $unEvenement["nomEvenement"] . "</td>
                <td>" . $unEvenement["description"] . "</td>
                <td>" . $unEvenement["adresse"] . "</td>
                <td>" . $unEvenement["horraireD"] . "</td>
                <td>" . $unEvenement["horraireF"] . "</td>
                <td>" . $unEvenement["capacite"] . "</td>
                <td>" . $unEvenement["idcategorie"] . "</td>";

        //Opération supprimer et modifier
            echo "<td>";
            echo "<a href='index.php?page=1&action=sup&idevenement=" . $unEvenement['idevenement'] . "'>";
            echo "<img src='images/Delete.jpeg' height='30' width='30'";
            echo "</a>";
            echo "<a href='index.php?page=1&action=edit&idevenement=" . $unEvenement['idevenement'] . "'>";
            echo "<img src='images/Edit.png' height='30' width='30'";
            echo "</a>";
            echo "</td>";
        echo "</tr>";
    }
    ?>
</table>