<?php
ob_start();
?>

<h1 class="text-primary"><i class="fas fa-edit"></i> Update Students</h1>
<ol class="breadcrumb">
    <li><a href="index.php?page=dashboard"><i class="fa fa-tachometer-alt"></i>Dashboard / </a></li>
    <li><a href="index.php?page=all-student"><i class="fa fa-users"></i>All Students / </a></li>
<li class="breadcrumb-item active" aria-current="page"><i class="fas fa-edit"></i> update Student</li>
</ol>

<?php

$id= base64_decode($_GET['id']);
$db_data= mysqli_query($link,"SELECT * FROM `student information` WHERE id = '$id'");
$db_row = mysqli_fetch_assoc($db_data);
if(isset($_POST['update-student'])){
    $name=$_POST['name'];
    $roll=$_POST['roll'];
    $city=$_POST['city'];
    $contact=$_POST['contact'];
    $class=$_POST['class'];
    $query="UPDATE `student information` SET `name`='$name',`roll`='$roll',`class`='$class',`city`='$city',`p-contact`='$contact' WHERE `id`= '$id'";
   $result = mysqli_query($link,$query);

   if($result){
    header('location: index.php?page=all-student');
   }
    ob_end_flush();
}


?>

<div class="row">
    <div class="container">
         <div class="row">
             <div class="col-md-12">
            <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                    <label for="name">Student Name</label>
                    <input class="form-control" type="text" name="name" id="name" value="<?= $db_row['name']  ?>" placeholder="student name" required="">
            </div>
            <div class="form-group">
                    <label for="roll">Student Roll</label>
                    <input class="form-control" type="text" name="roll" value="<?= $db_row['roll']  ?>" id="roll" placeholder="student roll" required="">
            </div>
            <div class="form-group">
                    <label for="city">City</label>
                    <input class="form-control" type="text" name="city" value="<?= $db_row['city']  ?>" id="city" placeholder="city" required="">
            </div>
            <div class="form-group">
                    <label for="contact">p Contact</label>
                    <input class="form-control" type="text" name="contact" value="<?= $db_row['p-contact']  ?>" id="contact" placeholder="contact" pattern="01[1|5|6|7|8|9][0-9]{8}"required="">
            </div>
            <div class="form-group">
                    <label for="class">Class</label>
                    <select name="class" id="class" class="form-control" value="<?= $db_row['class']  ?>" required="">
                        <option value="">Select</option>
                        <option <?php echo $db_row['class']=='6' ? 'selected=""':'';?> value="6">six</option>
                        <option <?php echo $db_row['class']=='7' ? 'selected=""':'';?> value="7">seven</option>
                        <option <?php echo $db_row['class']=='8' ? 'selected=""':'';?> value="8">Eight</option>
                        <option <?php echo $db_row['class']=='9' ? 'selected=""':'';?> value="9">Nine</option>
                        <option <?php echo $db_row['class']=='10' ? 'selected=""':'';?> value="10">ten</option>
                    </select>
            </div>
            <br>
            <div class="form-group text-center">
                    <input type="submit" value="Update Student" name="update-student" class="btn btn-primary text-center        ">
            </div>

            </form>
        </div>
    </div>
</div>
</div>
