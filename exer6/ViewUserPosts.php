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
        //usrname from html user selected
        $usrname = $_POST['usrname'];

        echo "<tr><th>Posts by " . $usrname . "<br></th></tr>";
        $query = 'SELECT content FROM Posts WHERE author_id="' . $usrname . '";';

        if($result = $conn->query($query)){
                while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["content"] . "<br></td></tr>";
                }
                $result->free();
        }
        else
            echo "<tr><td>No posts made by this user yet.</td></tr>";
        
        echo "</table>";
        // Close Connection
        $conn->close();
    ?>
</body>
</html>