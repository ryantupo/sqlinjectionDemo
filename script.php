
<?php

$db_host = 'localhost';
$db_username = 'root';
$db_password = 'root';
$db_database = '8ta';

$connection = @mysqli_connect($db_host, $db_username, $db_password, $db_database) or die("Connection error" . mysqli_connect_error());

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully \n";

$query = "SELECT * FROM users WHERE name ='" . $_POST['name'] . "'";

$result = mysqli_query($connection, $query);

?>


<h1>Result</h1>
<table border="1">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
    </tr>


    <?php
while ($row = mysqli_fetch_assoc($result)) {
    ?>

<tr>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['password']; ?></td>
</tr>
<?php
}
?>
</table>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test OUTPUT Page</title>
</head>

<body>

<div style="display:none;">
    <?php print_r($_POST);?>
</div>


<h1>Query</h1>
<?php $query_display = "SELECT * FROM users where name = '" . $_POST['name'] . "'";?>

<div><pre style="color:#00f;"><?php echo $query_display; ?></pre></div>

</body>
</html>
