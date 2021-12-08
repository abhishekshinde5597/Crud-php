
<?php

include'db.php';
//$formid=
if(isset($_GET['update'])){
$upadte=$_GET['update'];
$query="SELECT*FROM datacrud WHERE id='$upadte'";
$myquery=mysqli_query($conn,$query);
$result=mysqli_fetch_array($myquery);

$formname=$result['name'];
$formemail=$result['email'];




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
<form action="" method="POST">
<label>name</label>
<input type="text" name="name" value="<?php echo $formname;?>"><br><br>
<label>email</label>
<input type="text" name="email" value="<?php echo $formemail;?>"><br><br>
<input type="submit" name="submit">
</form>
</body>
</html>

<?php

if(isset($_POST['submit'])){
    $newusername=$_POST['name'];
    $newuseremail=$_POST['email'];
    $upate="UPDATE datacrud SET name= '$newusername',email='$newuseremail' where id='$upadte'";
    $result=mysqli_query($conn,$upate);
    if( $result===true){
        echo"data updated succesfully";
    }
    else{
        echo"data not updated";
    }
}

?>

<?php
if(isset($_GET['delete'])){
    $delete=$_GET['delete'];
    $query="DELETE FROM datacrud WHERE id='$delete'";
    $myquery=mysqli_query($conn,$query);
    if($myquery===true){
        echo "dste deleted";
    }
    else{
        echo "datsa not deletd";
    }
}
?>