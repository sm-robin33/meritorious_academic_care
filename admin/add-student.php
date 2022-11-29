
<?php  

if(isset($_POST['add-student'])){
    $name=$_POST['name'];
    $roll=$_POST['roll'];
    $city=$_POST['city'];
    $contact=$_POST['contact'];
    $class=$_POST['class'];
    $photo=explode('.',$_FILES['photo']['name']);
    $photo=end($photo);
    $photo_name=$roll.".".$photo;

    $query="INSERT INTO `student information`(`name`, `roll`, `class`, `city`, `p-contact`, `photo`) VALUES ('$name','$roll','$class','$city','$contact','$photo_name')";
   $result = mysqli_query($link,$query);
   if($result){
       $success="data insert successful";
       move_uploaded_file($_FILES['photo']['tmp_name'],'student_images/'.$photo_name);
   }else{
       $error="wrong";
   }
}


?>


<div class="container">
    <form action="" method="POST" enctype="multipart/form-data">
        <h1>Add New Student</h1>

        <?php

        if(isset($success)){
             echo '<div class="alert alert-success col-md-6">'.$success.'</div>';}
        if(isset($error)){
              echo '<div class="alert alert-success col-md-6">'.$error.'</div>';}

          ?>


        <div class="form-group">
            <input type="text" name="name" id="name" class="form-input" placeholder="Name" required="">
            <label for="name" class="form-label">Student Name</label>
        </div>





        <div class="form-group">
            <input type="text" name="roll" id="roll"class="form-input" placeholder="roll" required="">
            <label for="roll" class="form-label">Student Roll</label>
        </div> 




        <div class="form-group">
            <input type="text" name="city" id="city"class="form-input" placeholder="city"required="">
            <label for="city" class="form-label">City</label>
        </div>




        <div class="form-group">
            <input type="number" name="contact"class="form-input" id="contact" placeholder="contact no."required="">
            <label for="contact" class="form-label">parents contact</label>
        </div>



        <div class="form-group">
                     <select name="class" id="class" class="form-input" required="">
                        <option value="">Select</option>
                        <option value="6">six</option>
                        <option value="7">seven</option>
                        <option value="8">Eight</option>
                        <option value="9">Nine</option>
                        <option value="10">ten</option>
                    </select>
            <label for="class" class="form-label">Class </label>
        </div>




         <div class="form-group">
            <input type="file" name="photo" id="photo">
            <label for="name" class="form-label">Photo</label>
        </div>


        <div class="form-btn">
            <input type="submit" value="Add Student" name="add-student" class="btn">
        </div>
    </form>

    
</div>

