<?php

try {
    // Connect to SQLite database.
    $dbh = new PDO("sqlite:db/exhibits.sdb");
    if ( $dbh === FALSE ) {
        print 'No go';
        exit;
    }
    $sql = "CREATE TABLE exhibits ( 
        exhibit_id INT NOT NULL PRIMARY KEY,
        exhibit_name CHAR(100) NOT NULL,
        description TEXT,
        image_file_name CHAR(50),
        thumbnail_file_name CHAR(50)
    )";
    $result = $dbh->exec($sql);
    if ( $result === FALSE ) {
        print 'boo hoo';
        exit;
    }
    print '<p>Created exhibits table.</p>';
    //Close the database connection.
    $dbh = null;
    }
catch(PDOException $e) {
    echo $e->getMessage();
}


        
