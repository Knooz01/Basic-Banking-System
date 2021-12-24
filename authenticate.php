<?php
include 'conn.php';

$sen=$_POST['sender'];
$rec=$_POST['receiver'];
$amount=$_POST['amount'];
// echo $sen;
// echo $rec;
$sub=$_POST['submit'];
// echo $sub;

if(isset($_POST["submit"]))
{
    $result = mysqli_query($conn,"SELECT * FROM users WHERE name IN('$sen','$rec')");

    if (mysqli_num_rows($result)==2 )
    {
        $result = mysqli_query($conn,"SELECT balance FROM users WHERE name='$sen'");
        $row = mysqli_fetch_array($result);
$result=$row['balance'];
        if($result>$amount)
        {
        //    $r=$result-$amount;
            $result=$result-$amount;
            mysqli_query($conn,"INSERT INTO transaction (Sender, Receiver, Balance)
            VALUES ('$sen', '$rec', '$amount')");
            mysqli_query($conn,"UPDATE users SET balance='$result' WHERE name='$sen'");
            $res = mysqli_query($conn,"SELECT balance FROM users WHERE name='$rec'");
            $ro = mysqli_fetch_array($res);
    $res=$ro['balance'];
    $res=$res+$amount;
            mysqli_query($conn,"UPDATE users SET balance='$res' WHERE name='$rec'");
            echo "<script>alert('Transaction successfully done!')</script>";
        }
        else
        {
            echo "<script>alert('You have less balance')</script>";
            // header('Location:transaction.php');
        }
    }
    // echo mysqli_num_rows($result);
    else
    {
        echo "<script>alert('Sender or Receiver name is wrong')</script>";
        // header('Location:transaction.php');
    }



}


?>