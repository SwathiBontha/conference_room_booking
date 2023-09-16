<html>
    <head><title>Dashboard</title>
    </head>

    <style>
        header{
            height:60px;
            background-color:#FFFFE0;;
            box-shadow: 0 0 10px #000;
        }

        ul{
            float:right;
            position: relative;
            right:10%;
        }

        ul li{
            display:inline;
           list-style: none;
        }

        ul li a{
            text-decoration: none;
            color: #000;
            font-size: 18px;
            padding: 0px 0px 0px 20px;
        }

        .slot_booking{
            padding-top: 50px;
            text-align: center;
           
        }

        .slot_booking p {
          text-align: center;
          font-size: 25px;
          color: #;
        
        }

        .slot_booking input{
            align-content: center;
            font-size: 25px;
            
        }

        .button button {
            width: 240px;
            height: 60px;
            background-color: #000;
            color:#000
    
        }

        .button button a {
            text-decoration: none;
            display:inline;
            text-decoration: none;
            color: #FFFFE0;
        }

        .rooms {
            padding-top: 40px;
            text-align: center;

        }

        .rooms p{
            text-align: center;
            font-size: 25px;
            
        }

        .rooms input{
            align-content: center;
            font-size: 25px;
        }

        .slots{
            padding-top: 40px;
            text-align: center;
        }

        .slots p{
            text-align: center;
            font-size: 25px;
        }

        .slots input{
            align-content: center;
            font-size: 15px;
        }

        .slots select{
            align-content: center;
            font-size: 15px;
        }

        .all{
            background-color: #FFF8DC;
            box-shadow: 0 0 10px #000;
        
        }



    
    




    </style>

    <body>
        
    <header>
    <div class="home">
        <ul>   
        <li><a href ="bookings.php">BOOKINGS</a></li>
        
        <li><a href="conference_room_booking.php">LOGOUT</a></li>

        </ul> 
    </div>
    </header>
   <div class="all">
    <div class="slot_booking">
        <p><b>ROOMS AVAILABLE<b></p>

        <form  action="room.php" method="post">
        <input type="radio" name="rooms" value="AC" required>AC ROOOMS
        </br></br>
        <input type="radio" name="rooms" value="NONAC" >NON-AC ROOOMS
        <br></br>
    </div>
    <div class="rooms">
        <p><b> TYPES OF ROOMS</b></p>
        <div class="types">
        <input type="radio" name="types" value="small" required>SMALL <br><br>
        <input type="radio" name="types" value="medium">MEDIUM<br> <br>
        <input type="radio" name="types" value="large">LARGE<br><br>
    </div>
    <div class="slots">
        <p><b>SLOTS AVAILABLE</b</p><br><br>
        <input type="date" name="dates" id="dates" required><br><br>
        <select name="time" id="time" value="time" required>
            <option value="10:00 to 12:00">10:00 to 12:00</option>
            <option value="1:00 to 3:00">1:00 to 3:00</option>
            <option value="4:00 to 6:00">4:00 to 6:00</option>
            <option value="7:00 to 9:00">7:00 to 9:00</option>
        </select><br><br>
        <input type="text" name="name" id="name" placeholder="Enter your Company Name" required><br><br>
        <input type="phone" name="phone" id="phone" placeholder="Enter your Contact Number" required>
        
    </div>
    
    <div class="button">
        <button type="submit" name="submit">
            <a href="room.php" >MAKE PAYMENT</a>
        </button>
    </div>

    </form>
    </div>
    </div>

    </body>
</html>