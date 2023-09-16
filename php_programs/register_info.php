<?php
require_once 'database.php';   

if(isset($_POST['submit'])){

    $id = $_POST['id'];
    $name = $_POST['name'];
    $password = $_POST['password'];

    if( empty($id) || empty($name) || empty($password) ){
        header("location: ../register.php?error=emptyfields&name=");
        exit();
    }

    $conn=new mysqli('localhost','root','','php_programs');
    $stmt=$conn->prepare("insert into manager(id,name,password) values(?,?,?)");
    $stmt->bind_param("sss",$id,$name,$password);
    $stmt->execute();
    echo " registration successful and click here to book your conference room..";
    $stmt->close();
    $conn->close();
   

    if($_POST["name"] == "$name")
    {
        header("location:  welcome1.php");
    }


}

   



/*
    $sql= "select * from managers where name= '$name' and password= '$password' ";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count=mysqli_num_rows($result);
    if($count==1){
        header("location:welcome.php");
    }
    else{
        echo '<script>
             window.location.href= "index.php";
             alert("login failed. invalid username or password")
             </script>';

    }
*/
?>
