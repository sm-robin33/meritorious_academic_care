

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meritorious Academic Care</title>
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
   <!-- <link rel="stylesheet" href="css/meanmenu.min.css"> -->
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.bxslider.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="responsive.css"> -->

    <style>
        body{
            background-image: url(img/cover2.jpg);
            background-repeat: no-repeat;
            width:100%;
        }
        .color{
            color: seagreen;
        }
        a{
            text-decoration: none;
            font-size: 14px;
            color: seagreen;
        }
    </style>

</head>
<body>
<div class="container">
    <a class="btn btn-primary aligenright" href="admin/index.php">Dashboard</a>
    <br>
    <br>
    <br>
    <br>
    <h1 class="text-center color" >Meritorious Academic Care</h1>
    <br><br>

    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form action="" method="post">

                <table class="table table-bordered border-primary table-hover">
                    <tr>
                        <td class="text-center" colspan="2"><label for="">Student Information</label></td>
                    </tr>
                    <tr>
                        <td><label for="">Choose Class</label></td>
                        <td>
                            <select class="form-control" name="Choose" id="Choose">
                                <option value="">select</option>
                                <option value="6">Six</option>
                                <option value="7">Seven</option>
                                <option value="8">Eight</option>
                                <option value="9">Nine</option>
                                <option value="10">Ten</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="roll">Roll</label></td>
                        <td>
                            <input class="form-control" type="text" value="" name="roll" >
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center"><a href="index.php">Refresh</a></td>
                        <td class="text-center"><input type="submit" value="Show Info" name="show-info"></td>
                        
                    </tr>
                </table>
                
                
                    </form>
        </div>
    </div>



<?php
require_once 'admin/dbcon.php';
if(isset($_POST['show-info'])){

  $choose = $_POST['Choose'];
  $roll = $_POST['roll'];

 $result = mysqli_query($link,"SELECT * FROM `student information` WHERE `class`='$choose' and `roll` ='$roll'");

 if(mysqli_num_rows($result)==1){

    $row= mysqli_fetch_assoc($result);
?>
   <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-7">
            <table class="table table-bordered border-primary table-hover ">
                <tr>
                    <td rowspan="5">
                        <img width ="250px" src="admin/student_images/<?= $row['photo'];?>" class="img-thumbnail" alt="">
                    </td>
                    <td>Name</td>
                    <td><?= $row['name'];?></td>
                </tr>
                <tr>
                    
                    <td>Roll</td>
                    <td><?= $row['roll'];?></td>
                </tr>
                <tr>
                    
                    <td>Class</td>
                    <td><?= $row['class'];?></td>
                </tr>
                <tr>
                    
                    <td>City</td>
                    <td><?= $row['city'];?></td>
                </tr>
                <tr>
                
                    <td>p_contact</td>
                    <td><?= $row['p-contact'];?></td>
                </tr>
            </table>
        </div>
    </div>

<?php
 }else{
?>

<script type="text/javascript">
    alert("Data Not Found");
</script>


<?php
 }

}


?>


</div>


    



   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> 
   <script src="js/jquery.bxslider.min.js"></script>
   <script src="js/meanmenu.min.js"></script>
   <script src="js/main.js"></script>
</body>
</html>