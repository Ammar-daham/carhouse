<?php
$connection = mysqli_connect('localhost', 'root', '', '');

if (!$connection) {
    echo '<p> Can not connect now</p>';
    exit();
}
if (!mysqli_select_db($connection, 'CarHouse')) {
    exit('Can not choose database.');
}
else 

?>