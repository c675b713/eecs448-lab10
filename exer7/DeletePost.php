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
    //while the 
    while(!empty($_POST['toDelete'])){
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        foreach($_POST['toDelete'] as $post){
            $sql = 'DELETE FROM Posts WHERE post_id=' . $post . ';';
            if($result = $conn->query($sql)){
                echo "Post " . $post . " was successfully deleted!";
                $result->free();
            }else{
                echo "Post " . $post . " encountered an error while being deleted. Try again";
            }
        }    
    }
    //close connection
    $conn->close();
    ?>
</body>
</html>