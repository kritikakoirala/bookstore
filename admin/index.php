<?php

include 'includes/header.php';
include 'includes/menu.php';
include 'create_admin_process.php';

if (!isAdmin()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: ../login.php');
}

?>

<div id= "page-wrapper">

    <div class="container-fluid ">
       <!-- Page Heading -->
       <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header home">
                    Welcome to Admin Panel
                </h1>
                
            </div>
        </div>  <!-- /.row -->
              
    </div><!--container--fluid-->
</div>
<?php include 'includes/footer.php';?>