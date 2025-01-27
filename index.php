<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros</title>
</head>
<body>
    <h1>Lista de Libros</h1>
    <table border="2">
    <tr>
        <th>ID</th>
        <th>Titulo</th>
        <th>Autor</th>
    </tr>


    <?php
    $servername = "localhost";
    $database = "articulos";
    $username = "dbadmin";
    $password = "dbadmin";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT id, titulo, autor FROM libros";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>".$row["id"]."</td><td>".$row["titulo"]."</td><td>".$row["autor"]."</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    mysqli_close($conn);
?>
</table>
</body>
</html>