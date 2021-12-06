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

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
            // collect value of input field
            $usrName = $_REQUEST['userName'];
            $usrContent = $_REQUEST['userpost'];
          
            if (empty($usrName) || empty($usrContent)) {
                echo "Input fields cannot be blank.";
            }else{
                $sql = "INSERT INTO Posts (content, author_id) VALUES ('$usrContent', '$usrName')";

                if ($conn->query($sql) === TRUE) {
                    echo "New post submitted successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
        }

        $conn->close();
    ?>
</body>
</html>