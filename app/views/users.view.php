<?php require("partials/head.php"); ?>

<h1>All Users</h1>

<?php foreach ($users as $user): ?>
    <li><?= $user->username; ?></li>
<?php endforeach; ?>

<h1>Submit your name</h1>
<form action="/users" method="POST">
    <input type="text" name="username" placeholder="Username"/>
    <input type="password" name="password" placeholder="Password"/>
    <input type="submit" value="Submit" />
</form>

<?php require("partials/footer.php"); ?>