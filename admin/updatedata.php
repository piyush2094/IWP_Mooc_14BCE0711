<?php
include('../dbcon.php');
    $rolno= $_POST['rollno'];
    $name= $_POST['name'];
    $city= $_POST['city'];
    $pcon= $_POST['pcon'];
    $std= $_POST['std'];
     $id=$_POST['sid'];
    

    $imagename = $_FILES['simg']['name'];
    $tempname = $_FILES['simg']['tmp_name'];
    
    move_uploaded_file($tempname,"../dataimg/$imagename");
    
    
   $qry="UPDATE `student` SET `name` = '$name', `city` = '$city', `pcont` = '$pcon', `standard` = '$std', `image` = '$imagename' WHERE `rollno`= '$rolno'";
    $run= mysqli_query($con,$qry);
    if($run == true)
    {
        ?>
<script>
alert('Data Updated Successfully.');
    
   window.open('updateform.php?sid=<?php echo $rolno;?>','_self');
    
</script>
<?php
    }

  ?>   