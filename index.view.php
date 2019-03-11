<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Hello</h1>
<ul>
    <?php foreach ($tasks as $task) : ?>
        <li>
            <?php if ($task->isComplete()) : ?> <!-- $task->completed; -->
                <strike><?= $task->description(); ?></strike>
            <?php else: ?>
                <?= $task->description(); ?> <!-- could use $task->description; -->
            <?php endif; ?>
        </li>
    <?php endforeach; ?>
</ul>

</body>
</html>