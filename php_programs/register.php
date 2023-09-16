<?php
#require_once 'login.php';   
require_once 'register_info.php';   

?>

<html>
<head>
    <title> Conference_room_booking </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="conference_room_booking.php">HOME</a></li>
            <li><a href="index.php">LOGIN</a></li>
            <li><a href="register.php">REGISTER</a></li>
        </ul>
    </nav>
</header>

<div>
    <h1>Register here</h1>
    <p>already have an account <a href="login.php">login</a><p>

    <form action="register_info.php" method="post">
        <input type="text" name="id" id="id" placeholder="Manager or Employee"> 
        <input type ="text" name="name" id="name" placeholder="Enter your Username">
        <input type ="password" name="password" id="password" placeholder="Enter your Password">

        <button type="submit" name="submit">Register</button>
    </form>
</div>

</body>
</html>

<?php
require_once 'footer.php';

