<?php

try {
    $exhibits = array(
        array(
            'exhibit_name' => 'test1',
            'description' => 'Desc 1',
            'image_file_name' => 'image1.png',
            'thumbnail_file_name' => 'thumbnail1.png',
        ),
        array(
            'exhibit_name' => 'test2',
            'description' => 'Desc 2',
            'image_file_name' => 'image2.png',
            'thumbnail_file_name' => 'thumbnail2.png',
        ),
        array(
            'exhibit_name' => 'test3',
            'description' => 'Desc 3',
            'image_file_name' => 'image3.png',
            'thumbnail_file_name' => 'thumbnail3.png',
        ),
        array(
            'exhibit_name' => 'test4',
            'description' => 'Desc 4',
            'image_file_name' => 'image4.png',
            'thumbnail_file_name' => 'thumbnail4.png',
        ),
    );
    // Connect to SQLite database.
    $dbh = new PDO('sqlite:db/exhibits.sdb');
    $qry = $dbh->prepare(
        "INSERT INTO exhibits 
            (exhibit_id, 
             exhibit_name, 
             description, 
             image_file_name,
             thumbnail_file_name) 
            VALUES (?, ?, ?, ?, ?)"
    );
    if ( $qry === FALSE ) {
        print 'Prepare insert failed.';
        exit;
    }
    $id = 1;
    foreach( $exhibits as $exhibit ) {
        $qry->execute(
                array(
                    $id,
                    $exhibit['exhibit_name'], 
                    $exhibit['description'], 
                    $exhibit['image_file_name'],
                    $exhibit['thumbnail_file_name'],
                )
              );
        if ( $qry === FALSE ) {
            print 'Insert failed: ' . $exhibit['exhibit_name'];
        }
        $id ++;
        print '<p>Added record for ' . $exhibit['exhibit_name'] . '</p>';
    }
    //Close the database connection.
    $dbh = null;
}
catch(PDOException $e) {
    echo $e->getMessage();
}