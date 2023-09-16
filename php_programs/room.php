<html>
    <head>
        <style>

            .payment button{
            text-decoration: none;
            display:inline;
            color: #fff0ff;
            width: 240px;
            height: 60px;
            background-color: #000;
            color :#fff0ff;
            text-align: center;
            display: inline;
            }


        </style>
    </head>
    <body>
<?php

require_once 'database.php';


if(isset($_POST['submit'])){
  echo $rooms = $_POST['rooms'];
  echo $types = $_POST['types'];
  echo $dates = $_POST['dates'];
  echo $time = $_POST['time'];
  echo $name = $_POST['name'];
  echo $phone = $_POST['phone'];
  

  $query="insert into room(AC_NONAC, types, date, time, name, phone) values('$rooms','$types', '$dates', '$time', '$name', '$phone')";


 $query_run = mysqli_query($conn,$query);

/*
  if($query_run){
    echo" Room selected" .$_POST['$rooms'];
  }
  else{
    echo "there was an error";
 }
*/
}
?>


<div class="payment">
<button type="payment" name="payment"> Done </button>
</div>
</body>
</html>
