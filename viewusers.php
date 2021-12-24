
<?php
include_once 'conn.php';
$result = mysqli_query($conn,"SELECT * FROM users");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
<body>
<?php
include 'main.php';
include 'conn.php';
?>
<div class="text-box">

<?php
if (mysqli_num_rows($result) > 0) {
?>
 <br>  <br>  <br> <br>
 

  <table style=" border: 1px solid #ca3d33">
  
  <tr>
    <th >Id</th>
    <th>Name</th>
    <th>Email</th>
    <th>Balance</th>
    <th>Transfer Money</th>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result))
{ 
     $a;
?>
<tr>
    <td><?php echo $row["id"]; ?></td>
    <td><?php echo $row["name"]; ?></td>
    <td><?php echo $row["email"]; ?></td>
    <td><?php echo $row["balance"]; ?></td>
    <td> <a href="transaction.php?trans=<?php echo $row['name']; ?>">transfer</a></td>
   
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