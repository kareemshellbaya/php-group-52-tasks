<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width; initial-scale=1.0">
    <title>Form 2</title>
</head>
<body>
    
    <form action="" method="GET">
     <div><label for="">Salutation</label></div>   
    <select name="salutation" id=""> 
            <optgroup label="-- Choose --">
            <option name="wb" value="Web server1">-- None --</option>
            <option name="wb" value="Good Morning">Good Morning</option>
            <option name="wb" value="Good Afternoon">Good Afternoon</option>
            <option name="wb" value="Good Evening">Good Evening</option>
            </optgroup>
        </select>
        <br><br>
        <div>
        <label for="">First name &nbsp; &nbsp; </label>
        <input type="text" name="first">
        <br><br>
        </div>
        <div>
        <label for="">Last name &nbsp;&nbsp;&nbsp;</label>
        <input type="text" name="last">
        </div>
        <br>
        <label>Gender :</label>
        <input type="radio" name="Gender" value="Male"><label>Male</label>
        <input type="radio" name="Gender" value="Female"><label>Female</label>
        <br><br>
        <label for="">Email:</label>
        <input type="email" name="email">
        <br><br>
        <label for="">Date of Birth:</label>
        <input type="date" name="date" id="">
        <br><br>
        <div><label for="">Address:</label></div>
        <textarea name="address" id="" cols="30" rows="3"></textarea>
        <br><br>
        <input type="submit" value="submit">
        <br><br>
    </form>

    <?php
        $salutation = $_GET['salutation'];
        $firstName = $_GET['first'];
        $lastName = $_GET['last'];
        $Gender = $_GET['Gender'];
        $Email = $_GET['email'];
        $date = $_GET['date'];
        $address = $_GET['address'];
        
        echo $salutation . "<br>";
        echo $firstName . "<br>";
        echo $lastName . "<br>";
        echo $Gender . "<br>";
        echo $Email . "<br>";
        echo $date . "<br>";
        echo $address . "<br>";
    
    
    ?>
</body>
</html>