<!doctype html>
<?php

include "../../includes/head.php";
include "../../includes/menu.php";
include "../../includes/functions/globalVars.php";

?>


<div class="row">
    <h1>Sign Up & Updates</h1>
</div>
<div class="row">
    <p>Sign In to view updates</p>
    <div class="logInForm">
        <form action="../functions/login.php" id="ajaxLogin">
            <label for="emailUser">E-mail: <input type="text" id="emailUser" name="userName"/></label><br/>
            <label for="password">Password: <input type="password" id="password" name="userPass"/></label>
        </form>
    </div>
</div>
<div class="row">
    <h3>Don't Have a Login? <a href="../functions/register.php" rel="boxMe">Register</a> and receive e-mail updates!</h3>
</div>



<?php

include "../../includes/foot.php";
include "../../includes/scripts.php";

?>