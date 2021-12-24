
<?php
include_once 'conn.php';
$result = mysqli_query($conn,"SELECT * FROM transaction");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->

    <style>
        table{
            font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    background-color: #ca3d33;
    color:black;
    font-size: 20px;

        }
        td, th {
    border: 1px solid black;
    text-align: center;
    padding: 8px;

}

tr:nth-child(even) {
    background-color: white;
}
    </style>
</head>


<?php
include 'main.php';

?>

<div class="text-box">

<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table style=" border: 1px solid #ca3d33">
  
  <tr>
    <th >SNo:</th>
    <th>Sender</th>
    <th>Receiver</th>
    <th>Balance</th>
    <th>DateTime</th>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["SNo"]; ?></td>
    <td><?php echo $row["Sender"]; ?></td>
    <td><?php echo $row["Receiver"]; ?></td>
    <td><?php echo $row["Balance"]; ?></td>
    <td><?php echo $row["DateTime"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
</div>

</body>
</html>