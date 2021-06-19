<?php
$severname="localhost";
$user="root";
$password="";
try  {
    $server ="mysql:host=localhost;dbname=newdata";
$user = "root";
$pass = "";
$conn = new PDO($server, $user, $pass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $name = $_POST['name'] ? $_POST['name'] : die("Name is empty");
    $age = $_POST['age'] ? $_POST['age'] : die("Age is empty");
    $village = $_POST['village'] ? $_POST['village'] : die("Village is empty");
    // echo "Connected successfully";
    $q = "INSERT INTO full_form(name, age, village) VALUES('$name',$age, '$village')";
    $conn->exec($q);
    echo "<br>";
    echo "Data Inserted";
} 

}
catch(PDOException $e) {
    echo $e->getMessage();
    echo "please enter an correct data";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    <div>
    <label for="name">Name</label>
    <input type="name" name="name"placeholder="enter your name"/>
    </div>
    <br>
    <div>
    <label for="age">Age</label>
    <input type="age" name="age"placeholder="enter your age"/>
    </div>
    <br>
    <div>
    <label for="village">village</label>
    <input type="village" name="village"placeholder="enter your village"/>
    </div>
    <br>
    <div>
    <button type="submit" name="submit">Save</button>
    </div>
    </form>
</body>
</html>