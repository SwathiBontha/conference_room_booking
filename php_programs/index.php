<?php
#require_once 'login.php';   
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
    <h1>login</h1>
    <p>No Account? <a href="register.php">register here!</a><p>

    <form action="login_info.php" method="post">
        <input type="text" name="id" id="id" placeholder="Manager or Employee"> 
        <input type ="text" name="name" id="name" placeholder="Enter your username">
        <input type ="password" name="password" id="password" placeholder="Enter your password">
        <button type="submit" name="submit">Login</button>
    </form>
</div>
</body>
</html>
<?php
require_once 'footer.php';
