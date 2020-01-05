<?php include "includes/header.php"; 
include "includes/menu.php";
?>

<div class="container-fluid">
    <div class="row">
   
    
    <div class = "col-lg-12">

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                    Category Page
                        
                    </h1>  

                    <?php

                    if(isset($_GET['source'])){
                        $source = $_GET['source'];
                    }
                    else{
                        $source = '';
                    }

                    switch($source){
                        case 'add_categories':
                        include 'add_categories.php';
                        break;

                        case 'edit_categories':
                        include 'edit_categories.php';
                        break;
                      
                        default:
                        include 'view_all_categories.php';
                        break;
                    }
                    deleteCategories();
                    ?>
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

    </div>
</div>

<?php include "includes/footer.php"; ?>