<?php
try {
    $connect = mysqli_connect(
        'db', // Hostname (Docker service name)
        'myuser', // Username
        'mypassword', // Password
        'my_database' // Database name
    );
    
    $table_name = "user";
    
    $query = "SELECT * FROM $table_name";
    
    
    $response = mysqli_query($connect, $query);
    
    echo "<strong>$table_name: </strong>";
    while($i = mysqli_fetch_assoc($response))
    {
        echo "<p>".$i['title']."</p>";
        echo "<p>".$i['body']."</p>";
        echo "<p>".$i['date_created']."</p>";
        echo "<hr>";
    }
    
} catch(Exception $e) {
    echo "This is new " . $e->getMessage();
} 
// <br>
echo("hhhh");
