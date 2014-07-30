<!doctype html>
<?php
/**
 * Created by JetBrains PhpStorm.
 * User: smccard
 * Date: 5/3/13
 * Time: 9:20 PM
 * To change this template use File | Settings | File Templates.
 */

include "includes/head.php"

?>


<?php

    $firstVisit = true;

    if ($firstVisit){
        include "includes/pages/home.php";
    }

?>



<?php

include "includes/foot.php";
include "includes/scripts.php"

?>