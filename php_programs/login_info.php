<?php
require_once 'database.php';   

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $password = $_POST['password'];

    $select=mysqli_query($conn,"select * from manager where id='$id' and name='$name' and password='$password'");
    $row=mysqli_fetch_array($select);

    if(is_array($row)){
        $_SESSION["name"]= $row['name'];
        $_SESSION["password"]= $row['password'];
    }
        else{
        echo'<script type ="text/css">';
        echo'alert("invalid username")';
        echo'</script>';
        }
    
}
if(isset($_SESSION["name"])){
    header("location:welcome.php");
    

}
else{
    echo"<center>invalid username or password</center>";
}

?>