<!-- start including Header -->


<?php
include('./mainInclude/header.php');
?>

<!-- End including Header -->

<!-- start Course page Banner -->

<div class="container-fluid bg-dark">
    <div class="row">
        <img src="./image/coursebanner.jpg" alt="courses" style="height:500px; width:100%; object-fit:cover; box-shadow:10px;"/>
    </div>

</div>
<!-- End Course page Banner -->

<!-- start main content -->
<div class="container">
    <h2 class="text-center my-4">Payment Status</h2>
    <form method="POST" action="">
        <div class="form-group row">
            <label class="offset-sm-3 col-form-label">Order ID:</label>
            <div>
                <input type="text" class="form-control mx-3">
            </div>
            <input type="submit" class="btn btn-primary mx-4" value="View">
        </div>
</div>
    </form>
</div>

<!-- End main content -->

<!-- Start contact us -->
    <?php
    include('./contact.php')
    ?>

<!-- start including footer -->
<?php
include('./mainInclude/footer.php');
?>
<!-- End including footer -->