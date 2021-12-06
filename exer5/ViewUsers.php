<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $servername = "mysql.eecs.ku.edu";
        $username = "c675b713";
        $password = "ni3gooMi";
        $dbname = "c675b713";
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        $sql = "SELECT user_id FROM Users";
        $result = $conn->query($sql);
        echo '<table class="users" style="outline-color: black;">
            <tr><td>Users</td></tr>';
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td> ". $row["user_id"]. "</tr></td>";
            }
        } else {
            echo "0 results";
        }
        echo '</table>';
        $conn->close();
    ?>
</body>
</html>