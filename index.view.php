<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Task for the Day</h1>
    <ul>
        <li><b>Name</b>: <?= $task["title"]; ?></li>
        <li><b>Due Date</b>: <?= ucwords($task["due"]); ?></li>
        <li><b>Person Responsible</b>: <?= ucwords($task["assigned to"]); ?></li>
        <li><b>Status</b>:
            <?php if ($task["completed"]) : ?>
                <span>&#9989</span>
            <?php elseif (! $task["completed"]): ?>
                <span>Incomplete</span>
            <?php else: ?>
                <span>What????</span>
            <?php endif; ?>
        </li>
    </ul>
</body>
</html>