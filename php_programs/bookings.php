<?php

require_once 'database.php';

?>
<html>
    <head><style>
        table {
            align-items: center;
        }

        table tr:nth-child(even) {
        background-color: #D6EEEE;
        }    
        
        table tr td{
            border: none;
            margin: auto;
        }

        h2{
            text-align: center;
            font-size: 20px;
            color: #318CE7;
            padding-top: 20px;
        
        }
    </style></head>
    <body>
<div>
    <h2><b> USERS BOOKING INFORMATION <b></h2>
    <table border="2px" style="width:50%; margin-left:auto;margin-right:auto;padding: top 20px; " >
        <tr>
            <td> name </td>
            <td> phone </td>
            <td> AC_NONAC </td>
            <td>types</td>
            <td>date</td>
            <td>time</td>

        </tr>
    </html>
    </body>


     <tr>
<?php

$query1 = "select * from room";
$result = mysqli_query($conn,$query1);

while($row = mysqli_fetch_assoc($result)){
 ?>
 <td> <?php echo $row['name'];?></td>
 <td> <?php echo $row['phone'];?></td>
 <td> <?php echo $row['AC_NONAC'];?></td>
 <td> <?php echo $row['types'];?></td>
 <td> <?php echo $row['date'];?></td>
 <td> <?php echo $row['time'];?></td>
</tr>
<?php
}
?>
