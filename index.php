<?php
include 'db.php';



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
<form action="index.php" method="POST">
<label>name</label>
<input type="text" name="name"><br><br>
<label>email</label>
<input type="text" name="email"><br><br>
<input type="submit" name="submit">
</form>
</body>
</html>

<?php
if(isset($_POST['submit'])){

    $username=$_POST['name'];
    $email=$_POST['email'];
    $query="INSERT INTO datacrud (name,email) VALUES ('$username','$email')";
    $result=mysqli_query($conn,$query);
    if( $result===true){
        echo"data inserted suceesfully";
    }
    else{
        echo"data not inserted";
    }
}

?>