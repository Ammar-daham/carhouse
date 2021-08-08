<?php
$this_filename = $_SERVER['PHP_SELF'];
?>


<html>

<body>
    <form action="<?php echo $this_filename; ?>" method="post">
        Search by register number:<br>
        <input type="text" name="reg" size="10"> <br>
        Search by maker: <br>
        <input type="text" name="make" size="30"> <br>
        Search by yearmodel:<br>
        <input type="text" name="year" size="5"> <br>
        Search by mileage:<br>
        <input type="text" name="miles" size="10"> <br>
        Search:<br>
        <input type="submit" value="Search"> <br>
    </form>
</body>

</html>

<?php


if (isset($_POST['reg'])){
    $m1 = $_POST['reg'];
    $sql ="SELECT * FROM cars WHERE regnr = '$m1' ";
    fetchData($sql);
}
if (isset($_POST['make'])){
    $m2 = $_POST['make'];
    $sql ="SELECT * FROM cars WHERE  make = '$m2' ";
    fetchData($sql);
}
if (isset($_POST['year'])){
    $m3 = $_POST['year'];
    $sql ="SELECT * FROM cars WHERE yearmodel = '$m3' ";
    fetchData($sql);
}

if (isset($_POST['miles'])){
    $m4 = $_POST['miles'];
    $sql ="SELECT * FROM cars WHERE mileage = '$m4' ";
    fetchData($sql);
}

    

// fetching data
function fetchData($sql) {
    include 'connect_to_carhouse.php';
    $result = mysqli_query($connection, $sql);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck > 0) {
    print "<TABLE BORDER = 1>";
    while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
        print "<TR><TD>$row[0] </TD><TD>$row[1] </TD><TD>$row[2] </TD><TD>$row[3]</TD></TR>";
    }
    print "</TABLE>\n";
    } 
    }


?>