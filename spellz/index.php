<!doctype html>
<?php

include "includes/head.php";
include "includes/menu.php";
include "includes/functions/globalVars.php";

?>


<?php

    $firstVisit = true;

    include "/Library/WebServer/Documents/spellz/includes/functions/dbConfig.php";

    if ($firstVisit){
        include "includes/pages/home.php";
    }


?>



<?php

include "includes/foot.php";
include "includes/scripts.php"

?>
