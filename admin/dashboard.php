

<?php

$count_student = mysqli_query($link,"SELECT * FROM `student information`");
$total_student = mysqli_num_rows($count_student);

$count_users = mysqli_query($link,"SELECT * FROM `users`");
$total_users = mysqli_num_rows($count_users);



?>

  <div class="cards">

<div class="card-single">
    <div>
        <h1> <?= $total_student ;?> </h1>
        <span>Total Students</span>
    </div>
    <div>
        <span class="las la-users"></span>
    </div>
</div>
<div class="card-single">
    <div>
        <h1><?= $total_users ;?></h1>
        <span>Total Users</span>
    </div>
    <div>
        <span class="las la-users"></span>
    </div>
</div>

</div>
</div>
       <hr>
       <h3 class="text-center">New Students</h3>
       <div class="table-responsive">
       <table id="data" class="table table-hover table-bordered table-success"style="width:100%">
         <thead>
           <tr>
             <td class="table-primary">Id</td>
             <td class="table-secondary">Name</td>
             <td class="table-success">Roll</td>
             <td class="table-danger">City</td>
             <td class="table-info">Contact</td>
             <td class="table-warning">Photo</td>
           </tr>
         </thead>
         <tbody>

         <?php
          $db_info=mysqli_query($link,"SELECT * FROM `student information`");
          while($row=mysqli_fetch_assoc($db_info)){?>



           <tr>
             <td class="table-primary"><?php echo $row['id'];?></td>
             <td class="table-secondary"><?php echo $row['name'];?></td>
             <td class="table-success"><?php echo $row['roll'];?></td>
             <td class="table-danger"><?php echo $row['city'];?></td>
             <td class="table-info"><?php echo $row['p-contact'];?></td>

             <td class="table-warning"><img src="student_images/<?php echo $row['photo']; ?>"width="40%" alt=""></td>
           </tr>
           <?php
          }

          ?>


         </tbody>
       </table>
       </div>

