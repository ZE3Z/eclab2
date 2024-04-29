<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Multiplication Table</title> <!-- The title of the document -->
    <style>
        table, th, td { border: 1px solid black; border-collapse: collapse; } /* Styles for the table, table headers, and table cells */
        th, td { padding: 5px; text-align: left; } /* Additional styling for table headers and cells */
    </style>
</head>
<body>
    <form action="" method="get">
        Number: <input type="number" name="number" min="1"> <!-- Input field for the number -->
        <input type="submit"> <!-- Submit button -->
    </form>

    <?php
    if (isset($_GET['number']) && is_numeric($_GET['number'])) { // Checks if the number is set and is numeric
        $number = intval($_GET['number']); // Converts the input to an integer
        echo "<table>"; // Starts the table
        for ($i = 1; $i <= $number; $i++) { // Loops through rows
            echo "<tr>"; // Starts a table row
            for ($j = 1; $j <= $number; $j++) { // Loops through columns
                if ($i == 1 || $j == 1) { // Checks if it's the first row or column
                    echo "<th>" . $i*$j . "</th>"; // Uses table headers for the first row and column
                } else {
                    echo "<td>" . $i*$j . "</td>"; // Uses table data cells for multiplication values
                }
            }
            echo "</tr>"; // Ends the table row
        }
        echo "</table>"; // Ends the table
    }
    ?>
</body>
</html>