<?php
if(!isset($_SESSION)){
    session_start();
}
include('./admininclude/header.php');
include('../dbConnection.php');
if(isset($_SESSION['is_admin_login'])){
    $adminEmail=$_SESSION['adminLogEmail'];

} else{
    echo "<script> location.href='../index.php';</script>";
}


// for update the data in the dashboard course
if(isset($_REQUEST['requpdate'])){
    // checking for empty fileds
    if(($_REQUEST['lesson_id']=="")|| ($_REQUEST['lesson_name']=="")
|| ($_REQUEST['lesson_desc']=="") || ($_REQUEST['course_id']=="") || ($_REQUEST['course_name']=="")){
    // msg displayed if required filed missing////.
    $msg='<div class="alert alert-warning col-sm ml-5 mt-2" role="alert">Fill All Fileds</div>';

} else{
    // Assigning user values to variable...
    $lid=$_REQUEST['lesson_id'];
    $lname=$_REQUEST['lesson_name'];
        $ldesc=$_REQUEST['lesson_desc'];
        $cid=$_REQUEST['course_id'];
        $cname=$_REQUEST['course_name'];
        $link='../lessonvid/'.$_FILES['lesson_link']['name'];

        $sql="UPDATE lesson SET lesson_id= '$cid', lesson_name='$lname', lesson_desc='$ldesc', course_id='$cid',
        course_name='$cname', lesson_link='$link'
        WHERE lesson_id='$lid'";
        if($conn->query($sql)==TRUE){
            // below msg display on form submit success
            $msg='<dive class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Update successfully</dive>';
        } else {
            // below msg disply on form submit failed
            $msg='<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">Unable to Update</div>';

        }
    }
}

?>


<div class="col-sm-6 mt-3 mx-3 jumbotron">
<h3 class="text-center">Update Lesson Details</h3>

<?php
if(isset($_REQUEST['view'])){
    $sql="SELECT * FROM lesson WHERE lesson_id ={$_REQUEST['id']}";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
}
?>
<form action="" method="POST" enctype="multipart/form-data">
<div class="form-group">
        <label for="lesson_id">Lesson ID</label>
        <input type="text" class="form-control" id="lesson_id" name="lesson_id" value="<?php if(isset($row['lesson_id']))
              { echo $row['lesson_id']; }?>"readonly>
    </div>
    <div class="form-group">
        <label for="lesson_name">Lesson Name</label>
        <input type="text" class="form-control" id="lesson_name" name="lesson_name" value="<?php if(isset($row['lesson_name']))
              { echo $row['lesson_name']; }?>">
    </div>
    <div class="form-group">
        <label for="lesson_desc">Lesson Description</label>
        <textarea class="form_control" name="lesson_desc" id="lesson_desc" rows="2"><?php if(isset($row['lesson_desc']))
              { echo $row['lesson_desc']; }?></textarea>
    </div>
    <div class="form-group">
        <label for="course_id">Course ID</label>
        <input type="text" class="form-control" id="course_id" name="course_id" value="<?php if(isset($row['course_id']))
              { echo $row['course_id']; }?>" readonly>
    </div>
    <div class="form-group">
        <label for="course_name">Course name</label>
        <input type="text" class="form-control" id="course_name" name="course_name" onkeypress="isInputNumber(event)" value="<?php if(isset($row['course_name']))
              { echo $row['course_name']; }?>"readonly>
    </div>
    <div class="form-group">
        <label for="lesson_link">Lesson Link</label>
        <div class="embed-responsive embed-responsive-16by9">
            <iframe src="<?php if(isset($row['lesson_link'])) {echo $row['lesson_link'];}?>" allowfullscreen></iframe>
        </div>
        <input type="file" class="form-control" id="lesson_link" name="lesson_link">
    </div>
    
    <div class="text-center">
        <button type="submit" class="btn btn-danger" id="requpdate" name="requpdate">Update</button>
        <a href="lesson.php" class="btn btn-secondary">Close</a>
    </div>    
    <?php if(isset($msg)) {echo $msg;} ?>

</form>
</div>
</div>
<!-- div row close from header -->
</div>
<!-- div container-fluid close form header -->


<?php
include('./admininclude/footer.php')
?>