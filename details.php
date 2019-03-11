<?php

$con= mysqli_connect('localhost','root','','creatorsadda');
        if (!$con) {
            
            die("Connection Failed:". mysqli_error);
        }
//mysqli_select_db('creatorsadda') or die(mysqli_error());

if(isset($_POST["submit"]))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $qualif = $_POST['qualif'];
    $ema = $_POST['ema'];
    $pho = $_POST['pho'];
    $abo = $_POST['abo'];

    session_start();
        $_SESSION['sess_user']=$user;
    
$sql = "insert into profile (username,f_name,l_name,qualification,email,phone_no,about) values ('".$user."','".$fname."','".$lname."','".$qualif."','".$ema."','".$pho."','".$abo."')";
//    print_r($sql);die;
$query= mysqli_query($con, $sql);

    
//    $_SESSION['fname']=$fname;
//    $_SESSION['lname']=$lname;
//    $_SESSION['qualif']=$qualif;
//    $_SESSION['ema']=$ema;
//    $_SESSION['pho']=$pho;
//    $_SESSION['abo']=$abo;
//if(!mysqli_query($query,$con))
//{
//    die('Error inserting records !'.mysqli_error);
//}
//else
//{
//    echo('Data inserted');
//}
header("Location: procard.php");
}
else {  
    echo "ERRORR";  
    } 
?>