<?php require("partials/head.php"); ?>

<h1>Submit your name</h1>
<form action="/names" method="POST">
    <input type="text" name="username" placeholder="Username"/>
    <input type="password" name="password" placeholder="Password"/>
    <input type="submit" value="Submit" />
</form>

<?php require("partials/footer.php"); ?>
