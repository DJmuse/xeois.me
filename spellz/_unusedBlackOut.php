<div id="blackoutLogin" class="noShow">
    <div style="background:lightslategrey; border-radius: 5px; border:1px solid black; margin:0 auto; width:355px; padding:25px; margin-top:15%;">
        <form action="blackoutLogin.php" id="loginform">
            <label for="login">Login: <input type="text" id="login" name="user"/></label><br>
            <label for="pass">Password: <input id="pass" type="password" name="password"/></label><br>
            <button type="submit">Submit</button>
        </form>
    </div>
</div>
<?php
if(!isset($_SESSION)){
    ?>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#blackoutLogin').animate({
                height: '100%',
                width: '100%',
                top: 0,
                left: 0

            }, 500);
            $('#loginform').submit(function(e) {
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: 'blackoutLogin.php',
                    data: $(this).serialize(),
                    success: function(data)
                    {
                        if (data === 'Login') {
                            $('#blackoutLogin').animate({
                                height: 0,
                                width: 0

                            }, 500, function(){
                                $('#blackoutLogin').hide();
                            });
                            //window.location = 'spellz/index.php';
                        }
                        else {
                            alert('Invalid Credentials');
                        }
                    }
                });
            });
        });
    </script>
<?php
}
?>