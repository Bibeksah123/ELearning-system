<!-- start including Header -->


<?php
include('./dbConnection.php');

include('./mainInclude/header.php');
// echo ($_SESSION['stuLogemail']);

// if(!isset($_SESSION['stuLogemail'])){
   
//     header("Location: courses.php");
//     echo "<script>alert(' wow')</script>";
   
    
// } 
// else{
//     header("Location: coursedetails.php");
//     echo "<script>alert('not wow')</script>";
    
    

    
// }

?>
<link rel="stylesheet" href="">

<!-- End including Header -->

<!-- start Course page Banner -->

<div class="container-fluid bg-dark">
    <div class="row">
        <img src="./image/coursebanner.jpg" alt="courses" style="height:500px; width:100%; object-fit:cover; box-shadow:10px;"/>
    </div>

</div>
<!-- End Course page Banner -->

<!-- start main content -->
<div class="container mt-5">
    <?php  
    if(isset($_GET['course_id'])){
        $course_id=$_GET['course_id'];
        $_SESSION['course_id']=$course_id;
        $sql="SELECT * FROM course WHERE course_id ='$course_id'";
        $result=$conn->query($sql);
        $row=$result->fetch_assoc();
    }
    
    ?>
<div class="row">
    <div class="col-md-4">
        <img src="<?php echo str_replace('..', '.', $row['course_img'])  ?>" class="card-img-top" alt="python">
    </div>
    <div class="col-md-8">
        <div class="card-body">
            <h5 class="card-title">Course Name: <?php echo $row['course_name']?></h5>
            <p class="card-text">Description: <?php echo $row['course_desc']?></p>
            <p class="card-text">Duration: <?php echo $row['course_duration']?></p>
            <form action="checkout.php" method="post">
                <p class="card-text d-inline">Price: <small><dell>&#8377 <?php echo $row['course_original_price']?></dell></small><span class="font-weight-bolder">&#8377 <?php echo $row['course_price']?></span></p>
                <input type="hidden" name="id" value="'$row['course_price']'">
                <button type="submit" class="btn btn-primary text-white font-weight-border float-right" name="buy">Buy Now</button>
            </form>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
   
        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <th scope="col">Lesson No.</th> <br/>
                <th scope="col">Lesson Name</th>
                <th scope="col">Lesson Description</th>

                </tr>                

                <tr>
                <?php
        $sql="SELECT * FROM lesson";
        $result=$conn->query($sql);
        if($result->num_rows>0){
            $num=0;
            while($row=$result->fetch_assoc()){
                if($course_id==$row['course_id']){
                    $num++;
                    echo '<tr>
                    <td scope="col">'.$num.'</td>
                    <td scope="col">'.$row['lesson_name'].'</td>                    
                    <td scope="col">'.$row['lesson_desc'].'</td></tr>';

                }
              

            }
        }
        ?>

                </tr>                

            </thead>
        </table>
    </div>
</div>
</div>

<!-- End main content -->



<!-- start including footer -->
<?php
include('./mainInclude/footer.php');
?>
<!-- End including footer -->