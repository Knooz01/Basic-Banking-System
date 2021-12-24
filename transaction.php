

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


input{
    width:100%;
}
</style>
</head>

<body>
    

<?php 
include 'conn.php';
include 'main.php';

$result = mysqli_query($conn,"SELECT * FROM users");

echo "<br>";
$name=$_GET['trans'];
// echo $id;
?>
<div class="text-box">

 <br>  <br>  <br> <br>
 <form action="authenticate.php" method="POST">

  <table style=" border: 1px solid #ca3d33">
  
  <tr>
    <th >Sender</th>
    <th><input  name="sender" value="<?php echo $name; ?>" type="text"></th>
    
  </tr>
  <tr>
    <th >Receiver</th>
    <th><input name="receiver" type="text"></th>
    
  </tr><tr>
    <th >Amount</th>
    <th><input name="amount" type="number"></th>
    
  </tr>
  <tr>
    
    <th colspan="2"><button name="submit">submit</button></th>
    
  </tr>
 


</table>
</form>
</div>

</body>
</html>