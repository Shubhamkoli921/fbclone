<?php
 echo '
<nav class="navbar">
<img style=" width: 200px;
margin-left: 200px" src="logo2.png" alt="image come here">
<form class="forms" action="" method="post">
    <label for="Email">Email Or Phone</label>
    <input type="email" id="email" name="email">
    <label for="Email">Password</label>
    <input type="password" id="pass" name="pass">
    <button  type="submit">Log in</button>
</form>
</nav>';
if(isset($_GET['signupsuccess']) && $_GET('signupsuccess')=='true'){
    header("Location: /fbclone/hero.php?signupsuccess=true");
}
?>