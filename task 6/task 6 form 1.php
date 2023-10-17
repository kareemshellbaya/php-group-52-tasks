<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 1</title>
</head>
<body>
    <?php
    // First Method
    function helper($get){
        echo"<pre>";
        var_dump($get);
        echo"</pre>";
    }
    helper($_GET);
    
    // Second Method
    echo "Username Input Field Is (". $_GET['user'] .")<br>";
    echo "Password Input Field Is (". $_GET['pass'] .")<br>";
    echo "Employment Input Field Is (". $_GET['Employ'] .")<br>";
    echo "Web server Input Field Is (". $_GET['Webserver'] .")<br>";
    echo "Web server Input Field Is (". $_GET['job'] .")<br>";
    echo "Web server Input Field Is (". $_GET['method'] .")<br>";

    // Third Method

    $username = $_GET['user'];
    $password = $_GET['pass'];
    $Employment = $_GET['Employ'];
    $Webserver = $_GET['Webserver'];
    $job = $_GET['job'];
    $method = $_GET['method'];

    echo $username, $password, $Employment, $Webserver, $job,$method;



    ?>
    <h1>Form 1</h1>
    <form action="" method="get">
        <div>
        <label for="">Username &nbsp; &nbsp; </label>
        <input type="text" name="user">
        <br><br>
        </div>
        <div>
        <label for="">Password &nbsp;&nbsp;&nbsp; &nbsp;</label>
        <input type="password" name="pass">
        </div>
        <br>
        <div>
        <label for="">Employment</label>
        <input type="text" name="Employ">
        </div>
        <br>
        <label for="">Web server</label>
        <select name="Webserver" id=""> 
            <optgroup label="-- Choose a Server --" >
            <option name="wb" value="Web server1">Server 1</option>
            <option name="wb" value="Web server2">Server 2</option>
            <option name="wb" value="Web server3" selected>Server 3</option>
            </optgroup>
        </select>
        <br><br>
        <div><label>Please Specify Your Role</label></div>
        <div><input type="radio" name="job" value="Admin"><label>Admin</label></div>
        <div><input type="radio" name="job" value="Engineer"><label>Engineer</label></div>
        <div><input type="radio" name="job" value="Manager" checked><label>Manager</label></div>
        <div><input type="radio" name="job" value="Guest"><label>Guest</label></div>
        <br><br>
        <div><label>Single Sign-on To The Following</label></div>
        <div><input type="checkbox" name="method" value="Mail"><label>Mail</label></div>
        <div><input type="checkbox" name="method" value="Payroll"><label>Payroll</label></div>
        <div><input type="checkbox" name="method" value="Self-service" checked><label>Self-service</label></div>
        <br>
        <button>Login</button>
        <button type="reset">Reset</button>
    </form>
</body>
</html>