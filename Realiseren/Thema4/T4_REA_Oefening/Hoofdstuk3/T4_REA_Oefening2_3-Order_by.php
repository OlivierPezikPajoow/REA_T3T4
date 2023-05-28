<?php
/**
 * User: Olivier Pezik Pajoow
 * Date: 26/05/2023
 * File: T4_REA_Oefening2_3-Order_by.php
 */
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <title>
        <?php
        echo 'Opdracht 2 3';
        ?>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/Realiseren/Thema3/Hoofdstuk2/Oefening/styles/style.css" rel="stylesheet">
</head>
<body>

<?php
include "../../../Includes/Header.php"
?>
<main id="wrapper">
    <table>
        <tr>
            <td>
                <h2>Text</h2>
            </td>
            <td>
                <h2>Answer</h2>
            </td>
            <td>
                <h2>Creator</h2>
            </td>
            <td>
                <h2>Date</h2>
            </td>
        </tr>
    <?php
    include "../../../Includes/Nav.php";
    include "../../../Includes/Functions_DB.php";
//    verbinding maken met data base
    StartConnection("ijdb");
//    Query aanmaken met volgorder
    $query = "SELECT * FROM tblRiddles ORDER BY CreateDate;";
//    query uitvoeren
    $result = executeQuery($query);
//  query weergeven in een tabel
    while ($row = $result->fetch(PDO::FETCH_ASSOC))
    {
        echo "<tr>";
        echo "<td>".$row["RiddleText"]."</td>";
        echo "<td>".$row["RiddleAnswer"]."</td>";
        echo "<td>".$row["Creator"]."</td>";
        echo "<td>".$row["CreateDate"]."</td>";
        echo "</tr>";
    }
    ?>
    </table>
</main>
<?php
include "../../../Includes/Footer.php";
?>
</body>
</html>
