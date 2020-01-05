<ul class="pagination justify-content-center">

    <?php

    if($page>1)
    {	
        echo '<li class="page-item"><a class="page-link" href="categories.php?id='.$id.'&page='.($page-1).'">Previous</a></li>';
    }
    for($i=1;$i<=$page_total_page;$i++)
    {
        echo '<li class="page-item">';

        echo '<a class = "page-link" href="categories.php?id='.$id.'&page='.$i.'"';
        if($i==$page) echo 'class = "active"';
        echo '>'.$i.'</a></li>';
        
    }

    if($page_total_page>$page)
    {
        echo '<li class="page-item"><a class="page-link" href="categories.php?id='.$id.'&page='.($page+1).'">Next</a></li>';
    }

    ?>

</ul>