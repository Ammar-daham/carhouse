<?php

include 'connect_to_carhouse.php';

$sql = "CREATE TABLE cars (
    regnr varchar (10),
    make varchar(30),
    yearmodel int,
    mileage int
    ); ";

    if(mysqli_query($connection, $sql)) {
        echo '<p> Table created. </p>';
    }
    else {
        echo '<p> Failed: check the sql:';
        echo $sql;
    }