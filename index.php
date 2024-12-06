<?php
try {
    $connect = mysqli_connect(
        'db:3306', 
        'php_docker',
        'password',
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
    
    echo("hhhh");
} catch(Exception $e) {
    echo "This is new " . $e->getMessage();
} 
