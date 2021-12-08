<?php
include'db.php';

?>
 <table>
   
   <tr>
       
     <th>id</th>
     <th>name</th>
     <th>email</th>
     <th>update</th>
     <th>delete</th>
 
   </tr>

<?php
$query="SELECT*FROM datacrud";
$myquery=mysqli_query($conn,$query);
while($result=mysqli_fetch_array($myquery)){
   $formid=$result['id'];
   $formname=$result['name'];
   $formemail=$result['email'];
    
?>
 
   
 
  <tr>
    <td><?php echo $formid ?> </td>
    <td><?php echo $formname ?></td>
    <td><?php echo $formemail ?></td>
    <td><a href="edit.php?update=<?php echo $formid;?>">update </td>
    <td><a href="edit.php?delete=<?php echo $formid;?>">delete </td>
  </tr>
  <?php } ?>
</table>



