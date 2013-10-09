<?php

try {
    // Connect to SQLite database.
    $dbh = new PDO('sqlite:db/exhibits.sdb');
    print '<table>';
    $sql = 'SELECT * FROM exhibits';
    $rows = $dbh->query($sql);
    if ( $rows === FALSE ) {
        print 'boo';
        exit;
    }
    foreach ($rows as $row) {
        print '<tr>'
            .   '<td>' . $row['exhibit_id'] . '</td>'
            .   '<td>' . $row['exhibit_name'] . '</td>'
            .   '<td>' . $row['description'] . '</td>'
            .   '<td>' . $row['image_file_name'] . '</td>'
            .   '<td>' . $row['thumbnail_file_name'] . '</td>'
            . '</tr>';
    }
    print '</table>';
    //Close the database connection.
    $dbh = null;
}
catch(PDOException $e) {
    echo $e->getMessage();
}