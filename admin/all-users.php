<h1 class="text-primary"><i class="fa fa-users"></i> All users</h1>
<ol class="breadcrumb">
    <li><a href="index.php?page=dashboard"><i class="fa fa-tachometer-alt"></i> Dashboard / </a></li>
<li class="breadcrumb-item active" aria-current="page"><i class="fa fa-users"></i> All users</li>
</ol>





<div class="table-responsive">
           <table id="data" class="table table-hover table-bordered table-success"style="width:100%">
             <thead>
               <tr>
                 <td>Id</td>
                 <td>Name</td>
                 <td>User Name</td>
                 <td>Email</td>
                 <td>Photo</td>
               </tr>
             </thead>
             <tbody>

             <?php
              $db_info=mysqli_query($link,"SELECT * FROM `users`");
              while($row=mysqli_fetch_assoc($db_info)){?>



               <tr>
                 <td><?php echo $row['id'];?></td>
                 <td><?php echo $row['name'];?></td>
                 <td><?php echo $row['username'];?></td>
                 <td><?php echo $row['email'];?></td>
                 <td><img src="images/<?php echo $row['photo']; ?>"width="40%" alt=""></td>
               </tr>
               <?php
              }
              ?>
             </tbody>
           </table>
           </div>