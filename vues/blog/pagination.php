<div id="pagination">
    <p class='pagination'>
        <?php
        echo 'Page :';
        for ($i = 1; $i <= $limit[1]; $i++) {
            echo '<a href='.$nompage.'.php?page=' . $i . '>' . $i . '</a>  ';

        }
        ?>
    </p>
</div>
