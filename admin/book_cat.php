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
                   Book Category Page
                        
                    </h1>  

                    <?php

                    if(isset($_GET['source'])){
                        $source = $_GET['source'];
                    }
                    else{
                        $source = '';
                    }

                    switch($source){
                        case 'add_book_cat':
                        include 'add_book_cat.php';
                        break;

                        case 'edit_book_cat':
                        include 'edit_book_cat.php';
                        break;
                       

                        default:
                        include 'view_all_book_cat.php';
                        break;
                    }

                    deleteBookCategories();
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